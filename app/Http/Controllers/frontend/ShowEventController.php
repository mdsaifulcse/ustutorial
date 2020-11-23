<?php

namespace App\Http\Controllers\frontend;

use App\Model\Event;
use App\Model\EventBooked;
use App\Model\PrimaryInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Auth,Validator;

class ShowEventController extends Controller
{

    protected function allActiveEvents(){

        $events=Event::orderBy('id','DESC')->where(['status'=>1])->get(); // event_type=1 latest/running & 2=Upcoming Event
        return view('website.event.events',compact('events'));
    }


    protected function eventDetails($url){
        $singleEvent=Event::where(['url'=>$url,'status'=>1])->first();
        if (empty($singleEvent)){
            return redirect()->back()->with('noEvent',' No Event Data Found !');
        }

        $primaryInfo=PrimaryInfo::select('mobile_no')->first();
        $eventTags=[];
        if ($singleEvent->event_tag!=''){
            $eventTags=explode(',',$singleEvent->event_tag);
        }

        return view('website.event.eventsDetails',compact('singleEvent','eventTags','primaryInfo'));
    }

    protected function evenApplicant(Request $request){
        //return $request;

        $event=Event::findOrFail($request->event_id);
        $validator = Validator::make($request->all(), [
            'event_id' => 'required|exists:events,id',
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

        $existsEventData=EventBooked::where(['event_id'=>$request->event_id])
            ->Where(['mobile'=>$request->mobile])->orWhere(['email'=>$request->email])->first();

        if (!empty($existsEventData)){
            return redirect()->back()->with('evenExists','Already Applied');
        }

       $input=$request->except('_token');
        DB::beginTransaction();
        try{

            EventBooked::create($input);
            DB::commit();
            $bug=0;
        }catch(\Exception $e){
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
}
