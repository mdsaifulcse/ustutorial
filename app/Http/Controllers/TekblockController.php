<?php

namespace App\Http\Controllers;

use App\Model\Course;
use App\Model\Event;
use App\Model\PrimaryInfo;
use App\Model\Slider;
use App\Model\SubCategory;
use App\Model\Subscription;
use App\Model\Testimonial;
use Illuminate\Http\Request;
use Auth,DB,Validator;

class TekblockController extends Controller
{
    public function index(){

        $demoCourses=Course::orderBy('id','DESC')->where('status',1)->pluck('name','id');

        $sliders=Slider::orderBy('serial','ASC')->where(['status'=>1])->get();
        $upcomingEvents=Event::orderBy('id','DESC')->where(['status'=>1,'event_type'=>2])->get(); // event_type=1 latest/running & 2=Upcoming Event

        $courses=Course::leftJoin('categories','courses.category_id','categories.id')
            ->leftJoin('sub_category','courses.sub_category_id','sub_category.id')
            ->select('categories.category_name','sub_category.sub_category_name','courses.name','courses.overview','courses.image_small','courses.start_date')
            ->where(['courses.status'=>1,'show_at_home'=>1])->orderBy('courses.serial','ASC')->take(3)->get();

        $primaryInfo=PrimaryInfo::select('why_us','company_name')->first();
        $testimonials=Testimonial::select('name','content','image','course_name','rating')->orderBy('id','DESC')->where('status',1)->get();

        return view('website.home.index',compact('sliders','upcomingEvents','courses','primaryInfo','demoCourses','testimonials'));
    }


    protected function saveSubscriber(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100|email'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input=$request->except('_token');

        DB::beginTransaction();
        try{
            $data=Subscription::where('email',$request->email)->first();
            if (empty($data)){
                Subscription::create($input)->id;
            }else{
                $data->update($input);
            }

            DB::commit();
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('subscription','Data Successfully Inserted');
        }elseif($bug==1062){
            return redirect()->back()->with('error',$bug);
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }


}
