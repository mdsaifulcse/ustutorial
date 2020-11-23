<?php

namespace App\Http\Controllers;


use App\Mail\FreeTrial;
use App\Model\Course;
use App\Model\DemoClass;
use Illuminate\Http\Request;
use Auth,DB,Validator;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;

class DemoClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demoCourses=Course::orderBy('id','DESC')->where('status',1)->pluck('name','id');

        return view('backend.demo-class-register.index',compact('demoCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $allData=DemoClass::leftJoin('courses','demo_classes.course_id','courses.id')
            ->select('courses.name as course_name','demo_classes.*')
            ->orderBy('demo_classes.id','DESC');
        $demoCourses=Course::orderBy('id','DESC')->where('status',1)->pluck('name','id');

        return DataTables::of($allData,$demoCourses)
            ->addColumn('DT_Row_Index','')
            ->addIndexColumn()
            ->addColumn('action','
            <a href="#subsCriberModal<?php echo $id;?>" class="btn btn-xs btn-success" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <!-- #subsCriberModal -->
                        <div class="modal fade" id="subsCriberModal<?php echo $id;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                {!! Form::open(array(\'route\' => [\'demo-class.update\',$id],\'class\'=>\'form-horizontal author_form\',\'method\'=>\'PUT\',\'files\'=>\'true\', \'id\'=>\'commentForm\',\'role\'=>\'form\',\'data-parsley-validate novalidate\')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Demo Class Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <div class="form-group row">
                                            <label class="control-label col-md-4 col-sm-4" for="name">Name :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" />
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label class="control-label col-md-4 col-sm-4" for="email">Email :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input class="form-control" type="text" id="email" name="email" value="<?php echo $email; ?>" />
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label class="control-label col-md-4 col-sm-4" for="phone">Phone :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input class="form-control" type="text" name="phone" value="<?php echo $phone; ?>" />
                                            </div>
                                        </div>
                                      
                                    </div>
	                                                        
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                                    </div>
                                {!! Form::close(); !!}
                                </div> 
                            </div>
                        </div>
                                        <!-- end edit section -->

                                        <!-- delete section -->
                                        {!! Form::open(array(\'route\'=> [\'demo-class.destroy\',$id],\'method\'=>\'DELETE\',\'class\'=>\'deleteForm\',\'id\'=>"deleteForm$id")) !!}
                                            {{ Form::hidden(\'id\',$id)}}
                                            <button type="button" onclick=\'return deleteConfirm("deleteForm{{$id}}");\' class="btn btn-danger btn-xs">
                                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        {!! Form::close() !!}
            ')
            ->rawColumns(['action'])
            ->make(true);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|max:100|email',
            'phone' => 'required|max:100',
            'course_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input=$request->except('_token');

        DB::beginTransaction();
        try{

            $input=$request->except('_token');
            DemoClass::create($input);

            DB::commit();
            Mail::to('info@ustutorial.com')->send(new FreeTrial($request));
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('demo-class','Thank you for ');
        }elseif($bug==1062){
            return redirect()->back()->with('error',$bug);
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DemoClass  $demoClass
     * @return \Illuminate\Http\Response
     */
    public function show(DemoClass $demoClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DemoClass  $demoClass
     * @return \Illuminate\Http\Response
     */
    public function edit(DemoClass $demoClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DemoClass  $demoClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DemoClass::findOrFail($id);
        $input = $request->except('_token');
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:100',
            'email' => 'required|max:100|email',
            'phone' => 'required|max:100',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();

        try {
            $data->update($input);

            $bug = 0;

        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Updated Successfully.');
        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DemoClass  $demoClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DemoClass::findOrFail($id);

        try {
            $data->delete();

            $bug = 0;

        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Deleted Successfully.');
        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }
}
