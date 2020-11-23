<?php

namespace App\Http\Controllers;

use App\Model\Branch;
use App\Model\Category;
use App\Model\Course;
use App\Model\SubCategory;
use App\Model\Teacher;
use function GuzzleHttp\json_encode;
use Illuminate\Http\Request;
use DB,Auth,Validator,MyHelper;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::leftJoin('categories','courses.category_id','categories.id')
            ->leftJoin('sub_category','courses.sub_category_id','sub_category.id')
            ->select('categories.category_name','sub_category.sub_category_name','courses.*')
            ->orderBy('courses.serial','ASC')->get();
        return view('backend.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $serial=Course::max('serial')+1;
        $instructors=Teacher::orderBy('id','desc')->pluck('name','id');
        $categories=Category::orderBy('serial_num','ASC')->pluck('category_name','id');
        return view('backend.courses.create',compact('instructors','serial','categories'));
    }

    public function loadSubCategory($categoryId){
        $subCategories=SubCategory::where('category_id',$categoryId)->orderBy('serial_num','ASC')
            ->pluck('sub_category_name','id');
        return view('backend.courses.load-sub-categories',compact('subCategories'));
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
            'name' => 'required|max:150',
            'status' => 'required',
        ]);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput(); }

        $courseExist=Course::where(['name'=>$request->name])->first();
        if ($courseExist!=''){
            return redirect()->back()->with('error','This Course name already Exist');
        }

        try {

            $input=$request->except('_token');

            if ($request->start_date){
                $input['start_date']=date('Y-m-d',strtotime($request->start_date));
            }
            $input['instructor']=json_encode($request->instructor);


            if ($request->hasFile('image')){
                $input['image']=MyHelper::photoUpload($request->file('image'),'images/course/',600);
                $input['image_small']=MyHelper::photoUpload($request->file('image'),'images/course-small/',400);
            }



            $input['created_by']=\Auth::user()->id;
            $lastId=Course::create($input)->id;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructors=Teacher::orderBy('id','desc')->pluck('name','id');
        $course=Course::findOrFail($id);
        $categories=Category::orderBy('id','desc')->pluck('category_name','id');
        $subCategories=[];
        if ($course->sub_category_id!=''){
            $subCategories=SubCategory::where('category_id',$course->category_id)->orderBy('id','desc')->pluck('sub_category_name','id');
        }
        return view('backend.courses.edit',compact('course','instructors','categories','subCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $course=Course::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'status' => 'required'
        ]);
        if($validator->fails()){ return redirect()->back()->withErrors($validator)->withInput(); }

        try {

            $input=$request->except('_token');

            if ($request->start_date){
                $input['start_date']=date('Y-m-d',strtotime($request->start_date));
            }

            if ($request->hasFile('image')){
                $input['image']=MyHelper::photoUpload($request->file('image'),'images/course/',600);
                $input['image_small']=MyHelper::photoUpload($request->file('image'),'images/course-small/',400);


                if (file_exists($course->image)){
                    unlink($course->image);
                }

                if (file_exists($course->image_small)){
                    unlink($course->image_small);
                }

            }


            $input['updated_by']=\Auth::user()->id;
            $course->update($input);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::findOrFail($id);
        try {
            $course->delete();

            if (file_exists($course->image)){
                unlink($course->image);
            }

            if (file_exists($course->image_small)){
                unlink($course->image_small);
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
