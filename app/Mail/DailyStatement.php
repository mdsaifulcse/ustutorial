<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\ProgramStudies;
use App\Model\StudentPayment;
use DB;
use SMS;

class DailyStatement extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mobile;
    public function __construct($num)
    {
        $this->mobile = $num;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $month = '06';//date('m');
        $date = date("Y-m-d",strtotime('2019-06-16'));
       
       $admission = ProgramStudies::where('status',2)->select(DB::raw('sum(payable_amount-discount_amount) as `payable_amount`'),DB::raw('count(program_studies.id) as `total_student`'));
       $totalAdmission =  $admission->whereMonth('admission_date',$month)->first();
       $dailyAdmission = $admission->whereDate('admission_date',$date)->first();
        $totalCollection = StudentPayment::whereMonth('payment_date',$month)->sum('amount');
        $todayCollection = StudentPayment::whereDate('payment_date',$date)->sum('amount');
        $todayAmount=[
            'daily_admission'=>$dailyAdmission,
            'total_admission'=>$totalAdmission,
            'dues'=>$totalAdmission->payable_amount - $totalCollection,
            'today_collection'=>$todayCollection,
            'total_collection'=>$totalCollection ,
        ];
        $text = 'Today Admission: '.$dailyAdmission->total_student.', Today Collections: '.$todayCollection.', Total Collections in this month: '.$totalCollection.'. For more details click: http://bit.ly/demo' ;
        SMS::single($this->mobile,$text);
      
        return $this->view('backend.report.email',compact('todayAmount'));
    }
}
