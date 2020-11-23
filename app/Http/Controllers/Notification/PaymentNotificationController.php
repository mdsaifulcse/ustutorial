<?php

namespace App\Http\Controllers\Notification;

use App\Model\Course;
use App\Model\ProgramStudies;
use App\Model\StudentPayment;
use Dompdf\Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB, Auth,Session,Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class PaymentNotificationController extends Controller
{

protected function studentAsDeactivate(){

    DB::beginTransaction();
    try{

        $overDuesStudents=[];
        $courses=Course::where('status',1)->get();

        if (count($courses)>0){
            foreach ($courses as $course){
                $query= ProgramStudies::join('users','program_studies.user_id','users.id')
                    ->leftJoin('courses','program_studies.course_id','courses.id')
                    ->select('courses.days_limit','courses.name','program_studies.*')
                    ->where('program_studies.payable_amount','>',function ($query){
                        return $query->select(DB::raw('(total_paid+discount_amount)'));
                    })->where(['program_studies.course_id'=>$course->id,'program_studies.deactivate'=>1,'program_studies.status'=>2])
                    ->whereDate('admission_date','<=', Carbon::now()->subDays($course->days_limit))
                    ->get();
                if (count($query)>0){
                    $overDuesStudents[]=$query;
                }
            }
        }

        foreach ($overDuesStudents as $key=>$overDuesStudent){

            foreach ($overDuesStudent as $student){
                $student->update(['deactivate'=>0]);
            }
        }
        $bug=0;
        DB::commit();
    }catch (Exception $e){
        DB::rollback();
        $bug=$e->errorInfo[1];
    }

    return 'Success';
//    if($bug==0){
//        //return redirect()->back()->with('success','Data successfully inserted');
//        return redirect()->back()->with('success','Data Successfully Update');
//    }else{
//        return redirect()->back()->with('error',$bug);
//    }

}



}
