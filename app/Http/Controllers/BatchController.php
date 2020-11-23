<?php

namespace App\Http\Controllers;

use App\Model\Batch;
use App\Model\Branch;
use App\Model\SubCourse;
use Illuminate\Http\Request;
use Validator,DB,Auth;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $subCourse=SubCourse::findOrFail($request->sub_course_id);
        $validator = Validator::make($request->all(), [
            'batch_no' => 'required',
            //'student_capacity' => 'numeric',
            /*enable   extension=php_fileinfo*/
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $batchInfo=Batch::where(['branch_id'=>$request->branch_id,'course_id'=>$subCourse->course_id,'sub_course_id'=>$request->sub_course_id,'batch_no'=>$request->batch_no])->first();

        if (!empty($batchInfo)){
            return redirect()->back()->with('error','Batch number already exist');
        }

        $input=$request->except('_token');
        DB::beginTransaction();
        try{
            if ($request->start_date){
                $input['start_date']=date('Y-m-d',strtotime($request->start_date));
            }
            if ($request->end_date){
                $input['end_date']=date('Y-m-d',strtotime($request->end_date));
            }

            $input['branch_id']=$request->branch_id;
            $input['course_id']=$subCourse->course_id;
            $input['created_by']=\Auth::user()->id;
            $insertId= Batch::create($input)->id;

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Data Successfully Inserted');
        }elseif($bug==1062){
            return redirect()->back()->with('error',$bug);
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $subCourseId)
    {

        $subCourser=SubCourse::findOrFail($subCourseId);
        $batches=Batch::with(['batchOfBranch'])->orderBy('id','desc')->where('sub_course_id',$subCourseId)->paginate(15);
        $branches=Branch::orderBy('id','asc')->pluck('name','id');
       // $branches=Branch::select('id','name')->orderBy('id','asc')->get();
        $branchId='';

        $batchNo='';

        if ($request->branch_id){
            $branchId=$request->branch_id;

            $batches=Batch::with(['batchOfBranch'])->orderBy('id','desc')->where(['sub_course_id'=>$subCourseId,'branch_id'=>$request->branch_id])->paginate(15);

            $batchNo=Batch::orderBy('id','desc')->where(['branch_id'=>$request->branch_id,'course_id'=>$subCourser->course_id,'sub_course_id'=>$subCourseId])->value('batch_no')+1;

        }
        return view('backend.sub-course.batches.index',compact('subCourser','batches','subCourseId','branches','branchId','batchNo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $batch=Batch::findOrFail($request->id);
        $validator = Validator::make($request->all(), [
            'batch_no' => 'required',
            //'student_capacity' => 'numeric',
            /*enable   extension=php_fileinfo*/
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input=$request->except('_token');

        DB::beginTransaction();
        try{
            if ($request->start_date){
                $input['start_date']=date('Y-m-d',strtotime($request->start_date));
            }
            if ($request->end_date){
                $input['end_date']=date('Y-m-d',strtotime($request->end_date));
            }

            $input['updated_by']=\Auth::user()->id;
             $batch->update($input);
            $bug=0;
            DB::commit();
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Data Successfully Inserted');
        }elseif($bug==1062){
            return redirect()->back()->with('error',$bug);
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        DB::beginTransaction();
        try {
            $batch->delete();
            $bug=0;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Data Delete Successfully.');
        }elseif ($bug==1451){
            return redirect()->back()->with('error',"$bug1");
        }
        else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }
}
