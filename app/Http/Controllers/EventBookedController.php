<?php

namespace App\Http\Controllers;

use App\Model\Event;
use App\Model\EventBooked;
use Illuminate\Http\Request;
use Auth,DB,Validator;
use Yajra\DataTables\DataTables;

class EventBookedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.events.even-register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allData=EventBooked::leftJoin('events','event_booked.event_id','events.id')
            ->select('events.title','event_booked.*')
            ->orderBy('id','DESC')->groupBy('event_booked.event_id');

        return DataTables::of($allData)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('action','
            <a href="#evenBookedModal<?php echo $id;?>" class="btn btn-xs btn-success" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <!-- #evenBookedModal -->
                        <div class="modal fade" id="evenBookedModal<?php echo $id;?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                
                                <div class="modal-header">
                    <h3 class="modal-title text-center"> Event Application -{{$title}}</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                                
                                
                                
                 {!! Form::open([\'route\'=>[\'event-register.update\',$id],\'method\'=>\'PUT\',\'class\'=>\'\']) !!}
                <div class="modal-body" style="color: #ffffff;background-color: #085eac;">

                    <h4 style="color: #fd9649;">Personal Information</h4>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="first_name">First Name <span class="required text-danger">*</span></label>
                            {{Form::text(\'first_name\',$value=$first_name,[\'maxlength\'=>45,\'class\'=>\'form-control\',\'required\'=>true,\'placeholder\'=>\'Your First name\'])}}

                           
                        </div>
                        <div class="col-md-6">
                            <label for="last_name">Last Name <span class="required text-danger">*</span></label>
                            {{Form::text(\'last_name\',$value=$last_name,[\'maxlength\'=>45,\'class\'=>\'form-control\',\'required\'=>true,\'placeholder\'=>\'Your last name\'])}}
                        </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="mobile">Mobile <span class="required text-danger">*</span></label>
                            {{Form::text(\'mobile\',$value=$mobile,[\'maxlength\'=>30,\'class\'=>\'form-control\',\'required\'=>true,\'placeholder\'=>\'Your mobile\'])}}

                            
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email <span class="required text-danger">*</span></label>
                            {{Form::email(\'email\',$value=$email,[\'maxlength\'=>80,\'class\'=>\'form-control\',\'required\'=>true,\'placeholder\'=>\'Your email address\'])}}

                            
                        </div>
                    </div>

                    <h4 style="color: #fd9649;">Academic & Work Information</h4>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="academic_qualification">Academic Qualification <span class="required text-danger">*</span></label>
                            {{Form::text(\'academic_qualification\',$value=$academic_qualification,[\'maxlength\'=>120,\'class\'=>\'form-control\',\'required\'=>true,\'placeholder\'=>\'Last Academy Qualification\'])}}

                            
                        </div>

                        <div class="col-md-6">
                            <label for="work_experience">Work Experience <span class="required text-danger">*</span></label>
                            {{Form::number(\'work_experience\',$value=$work_experience,[\'min\'=>0,\'max\'=>30,\'step\'=>\'any\',\'class\'=>\'form-control\',\'required\'=>true,\'placeholder\'=>\'Number of Work Experience\'])}}

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="field_of_work">Field of Work </label>
                            {{Form::text(\'field_of_work\',$value=$field_of_work,[\'maxlength\'=>120,\'class\'=>\'form-control\',\'required\'=>true,\'placeholder\'=>\'Last Academy Qualification\'])}}
                        </div>

                        <div class="col-md-6">
                            <label for="country_of_work">Country of Work </label>
                            {{Form::text(\'country_of_work\',$value=$work_experience,[\'maxlength\'=>50,\'class\'=>\'form-control\',\'required\'=>false,\'placeholder\'=>\'Current working country\'])}}

                        </div>
                    </div>


                </div>

            <!-- Modal footer -->
                <div class="modal-footer" style="display: flow-root">
                    <a href="javascript:void(0)" class="btn btn-danger pull-left" data-dismiss="modal">Close</a>
                   
                    <button class="btn btn-success pull-right" type="submit">Submit</button>
                </div>
                {!! Form::close() !!}
                                </div> 
                            </div>
                        </div>
                        
                <!-- end edit section -->

                <!-- delete section -->
                {!! Form::open(array(\'route\'=> [\'event-register.destroy\',$id],\'method\'=>\'DELETE\',\'class\'=>\'deleteForm\',\'id\'=>"deleteForm$id")) !!}
                    {{ Form::hidden(\'id\',$id)}}
                    <button type="button" onclick=\'return deleteConfirm("deleteForm{{$id}}");\' class="btn btn-danger btn-xs">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                {!! Form::close() !!}
            ')
            ->rawColumns(['action'])
            ->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\EventBooked  $eventBooked
     * @return \Illuminate\Http\Response
     */
    public function show(EventBooked $eventBooked)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\EventBooked  $eventBooked
     * @return \Illuminate\Http\Response
     */
    public function edit(EventBooked $eventBooked)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\EventBooked  $eventBooked
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eventRegister=EventBooked::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'mobile' => 'required|max:30',
            'email' => 'required|max:100',
            'academic_qualification' => 'required|max:200',
            'work_experience' => 'required|max:250',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $input=$request->except('_token');
        DB::beginTransaction();
        try{
            $eventRegister->update($input);
            DB::commit();
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Data Successfully Update');
        }elseif($bug==1062){
            return redirect()->back()->with('error',$bug);
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\EventBooked  $eventBooked
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventBook=EventBooked::findOrFail($id);
        try {
            $eventBook->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Data Delete Successfully.');
        }elseif ($bug==1451){

            return redirect()->back()->with('error', 'Sorry this Course can not be delete due to used another module');

        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }
}
