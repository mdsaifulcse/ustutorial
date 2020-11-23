<?php

namespace App\Http\Controllers;

use App\Model\Branch;
use App\Model\Course;
use App\Model\SubCourse;
use App\Model\SubCoursePrice;
use Illuminate\Http\Request;
use Validator,DB,Auth;
use Yajra\Datatables\Datatables;

class SubCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function courseWiseBranch($courseId=null){

        //$course=Course::findOrFail($courseId);
        $branches=Branch::select('name','id')->orderBy('id','asc')->get();

        return view('backend.sub-course.load-branch-by-course',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $course=Course::findOrFail($request->courseId);
        $allSubCourse=SubCourse::leftjoin('branch','branch.id','sub_courses.branch_id')
            ->leftjoin('courses','courses.id','sub_courses.course_id')
            ->select('branch.name as branch_name',
                DB::raw('CONCAT(courses.name)AS courser_name'),
                'sub_courses.*')->orderBy('sub_courses.id','desc')->where(['sub_courses.course_id'=>$request->courseId]);

        return DataTables::of($allSubCourse)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('Batch','<a  href="{{URL::to(\'/batches/\'.$id)}}" class="btn btn-primary btn-xs" title="Click here to create batch under the <?php echo $sub_course?> of {{$courser_name}}" > <i class="fa fa-pencil"></i> Create Batch</a>')

            ->addColumn('Status','<span class="text-success">@if($status==1)<span>Active</span>
@else <span class="text-danger">Inactive</span> @endif</span>')
            ->addColumn('Action','
            {{Form::open(array(\'route\'=>[\'sub-course.destroy\',$id],\'method\'=>\'DELETE\',\'id\'=>"deleteForm$id",\'class\'=>\'deleteForm\'))}}
            <a  href="#" class="btn btn-warning btn-xs" onclick="editSubCourse({{$id}})" > <i class="fa fa-pencil-square"></i></a>
            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{$id}}\')"><i class="fa fa-trash"></i></button>
            {!! Form::close() !!}
            ')
            ->rawColumns(['Batch','Status','Action'])
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
        $validator = Validator::make($request->all(),[
            'sub_course' => 'required',
            'course_id' => 'required',
            'amount' => 'required',
            //'branch_id' => 'required_if:for_branch,==,2',
        ]);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput(); }


        DB::beginTransaction();
        try {

            $course=Course::findOrFail($request->course_id);

            $input=$request->except('_token');

            $lastId=SubCourse::create(
                [
                    'sub_course'=>$request->sub_course,
                    'course_id'=>$request->course_id,
                    'amount'=>$request->amount,
                    'first_payment'=>$request->first_payment,
                    'student_amount'=>$request->student_amount,
                    'created_by'=>\Auth::user()->id,
                ]
            )->id;


            //return $request;

            $branches=Branch::select('branch.name','branch.id')->orderBy('branch.id','asc')->get();


            if ($request->for_branch==2){ // sub-course for by-choice branch ---------
                foreach ($request->branch_id as $key=>$branchId){
           // $existSubCourse=SubCourse::where(['sub_course'=>$request->sub_course,'branch_id'=>$branchId,'course_id'=>$request->course_id])->first();


                $input=$request->except('_token');
                $input['sub_course_id']=$lastId;
                $input['created_by']=\Auth::user()->id;
                $input['branch_id']=$branchId;
                SubCoursePrice::create($input)->id;

                } // end foreach -
            }else{ // sub-course for all branch ---------
            foreach ($branches as $branch) {
            //$existSubCourse = SubCourse::where(['sub_course' => $request->sub_course, 'branch_id' => $branch->id,'course_id' => $request->course_id])->first();

                $input = $request->except('_token');
                $input['sub_course_id']=$lastId;
                $input['created_by'] = \Auth::user()->id;
                $input['branch_id'] = $branch->id;

                SubCoursePrice::create($input)->id;

            } // end foreach --
            } // end else

            DB::commit();
            $bug = 0;

        } catch (Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Data Save Successfully.');
        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SubCourse  $subCourse
     * @return \Illuminate\Http\Response
     */
    public function show($courseId)
    {
        $course=Course::findOrFail($courseId);
        $branches=Branch::select('id','name')->orderBy('id','asc')->get();
        $alldata=SubCourse::with(['courseInSubCourse'])->where('course_id',$courseId)->orderBy('course_id','asc')->get();
        return view('backend.sub-course.index',compact('course','branches','alldata','courseId'));

    }

    public function getSubCourse($id){
        $courses=Course::select('id','name')->orderBy('id','desc')->get();
        $subCourse=SubCourse::findOrFail($id);
        return response()->json(['courses'=>$courses,'subCourse'=>$subCourse]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubCourse  $subCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCourse $subCourse)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubCourse  $subCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $subCourse=SubCourse::findOrFail($request->id);
        $validator = Validator::make($request->all(),[
            'sub_course' => 'required',
            'amount' => 'required',
            'first_payment' => 'required',
            'for_branch' => 'required'
        ]);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput(); }

        DB::beginTransaction();
        try {


            $branches=Branch::select('branch.name','branch.id')->orderBy('branch.id','asc')->get();

            $input=$request->except('_token');
            $input['updated_by']=\Auth::user()->id;
            $subCourse->update($input);


            if ($request->for_branch==2){ // sub-course for by-choice branch ---------
                foreach ($request->branch_id as $key=>$branchId){
//                     $existSubCourse=SubCourse::where(['sub_course'=>$request->sub_course,'branch_id'=>$branchId,'course_id'=>$request->course_id])->first();

                    $existSubCoursePrice = SubCoursePrice::where(['sub_course_id' => $request->id, 'branch_id' => $branchId])->first();
                    $input = $request->except('_token');
                    $input['updated_by'] = \Auth::user()->id;

                    $existSubCoursePrice->update($input);

                } // end foreach -
            }elseif($request->for_branch==1){ // sub-course for all branch ---------

                foreach ($branches as $branch) {
                    $existSubCoursePrice = SubCoursePrice::where(['sub_course_id' => $request->id, 'branch_id' => $branch->id])->first();
                    $input = $request->except('_token');
                    $input['updated_by'] = \Auth::user()->id;

                    $existSubCoursePrice->update($input);

                } // end foreach --
            } // end else

            $bug = 0;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Data Update Successfully.');
        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubCourse  $subCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCourse $subCourse)
    {
        try {
            $subCourse->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Data Delete Successfully.');
        }elseif($bug==1451){
            return redirect()->back()->with('error',$bug1);
        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }
}
