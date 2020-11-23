<?php

namespace App\Http\Controllers;

use App\Model\Course;
use App\Model\CourseDetail;
use Illuminate\Http\Request;
use DB,Auth,Validator,MyHelper;

class CourseDetailController extends Controller
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
        $validator = Validator::make($request->all(),[
            'course_id' => 'required',
            'title' => 'required|max:200',
            'detail_type' => 'required',
            'serial' => 'required',
            'status' => 'required',
        ]);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput(); }


        try {

            $input=$request->except('_token');
            $input['instructor']=json_encode($request->instructor);


            if ($request->hasFile('photo')){
                $input['photo']=MyHelper::photoUpload($request->file('photo'),'images/course-details/',800);
            }

            $lastId=CourseDetail::create($input)->id;
            $bug = 0;

        } catch (Exception $e) {
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
     * @param  \App\Model\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function show($courseId)
    {
        $course=Course::findOrFail($courseId);

        $courseDetails=CourseDetail::leftJoin('courses','course_details.course_id','courses.id')
            ->select('courses.name','course_details.*')
            ->where('course_details.course_id',$courseId)
            ->orderBy('course_details.serial','ASC')->get();
        $serial=CourseDetail::where('course_id',$courseId)->max('serial');

        return view('backend.courses-details.index',compact('course','courseDetails','serial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseDetail $courseDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $courseDetail=CourseDetail::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:200',
            'detail_type' => 'required',
            'serial' => 'required',
            'status' => 'required',
        ]);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput(); }

        try {

            $input=$request->except('_token');

            if ($request->hasFile('photo')){
                $input['photo']=MyHelper::photoUpload($request->file('photo'),'images/course-details/',800);


                if (file_exists($courseDetail->photo)){
                    unlink($courseDetail->photo);
                }


            }

            $courseDetail->update($input);
            $bug = 0;
        } catch (\Exception $e) {
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
     * @param  \App\Model\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=CourseDetail::findOrFail($id);
        try {
            $data->delete();

            if (file_exists($data->photo)){
                unlink($data->photo);
            }


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
