<?php

namespace App\Http\Controllers\frontend;

use App\Model\Category;
use App\Model\Course;
use App\Model\CourseDetail;
use App\Model\PrimaryInfo;
use App\Model\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowCourseController extends Controller
{
    protected function allActiveCourse(Request $request){

        $courses=Course::leftJoin('categories','courses.category_id','categories.id')
            ->leftJoin('sub_category','courses.sub_category_id','sub_category.id')
            ->select('categories.category_name','sub_category.sub_category_name','courses.name','courses.overview','courses.image_small','courses.start_date')
            ->where(['courses.status'=>1])->orderBy('courses.serial','ASC');

        if (isset($request->category_id) && $request->category_id!=''){
            $courses=$courses->where(['courses.category_id'=>$request->category_id]);
        }

        if (isset($request->sub_category_id) && $request->sub_category_id!=''){
            $courses=$courses->where(['courses.sub_category_id'=>$request->sub_category_id]);
        }

        if (isset($request->user_play) && $request->user_play!='' ){
            $courses=$courses->where('courses.name','like','%'.$request->user_play.'%')->orWhere('courses.overview', 'like','%'.$request->user_play.'%');
        }

        $courses=$courses->get();

        $categories=Category::orderBy('serial_num','ASC')->pluck('category_name','id');


        return view('website.courses.course',compact('courses','categories','request'));
    }

    public function loadSubCategoryData($categoryId){
        $subCategories=SubCategory::where('category_id',$categoryId)->orderBy('serial_num','ASC')
            ->pluck('sub_category_name','id');
        return view('website.courses.load-sub-categories',compact('subCategories'));
    }

    protected function singleCourseDetails($courseName){
        $course=Course::where(['name'=>$courseName,'status'=>1])->first();
        if (empty($course)){
            return redirect()->back();
        }
        $primaryInfo=PrimaryInfo::select('mobile_no')->first();

        $courseDetails=CourseDetail::orderBy('course_details.serial','ASC')
            ->where(['course_id'=>$course->id,'status'=>1])->get();

        return view('website.courses.courseDetails',compact('course','primaryInfo','courseDetails'));
    }

}
