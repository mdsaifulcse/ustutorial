<?php

namespace App\Http\Controllers;

use App\Model\UserInfo;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Yajra\Datatables\Datatables;
use Validator;
use App\Model\Branch;
use App\Model\SmsLog;
use SMS;
use App\Model\Course;
use App\Model\SubCourse;
use App\Model\Batch;
use App\Model\ProgramStudies;

class SmsController extends Controller
{
    public function manuallySms(){
        return view('backend.sms.manuallySms');
    }
    public function manuallySmsSend(Request $request){
        $validator = Validator::make($request->all(), [
            'mobile_no'  => "required|min:11",
            'text'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $result = SMS::single($request->mobile_no,$request->text);
        if($result=='True'){
            return redirect()->back()->with('success','Successfully send sms.');
        }else{
            return redirect()->back()->with('error','Error Found: '.$result)->withInput();
        }

    }

    public function bulkSms(){
        return view('backend.sms.bulkSms');
    }
    public function bulkSmsSend(Request $request){
        $validator = Validator::make($request->all(), [
            'excel_file'  => "required",
            'text'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $result = '';
        if($request->hasFile('excel_file')){
            $path = $request->file('excel_file')->getRealPath();
            $reader = IOFactory::createReader('Xlsx')->setReadDataOnly(true)->load($path);
            $sheetData = $reader->getActiveSheet()->toArray(null, true, true, true);
            $numbers=[];
            for ($row=2; $row <= count($sheetData); $row++){
                $numbers[] = $sheetData[$row]["A"];
            }
            $result = \SMS::oneToMany($numbers,$request->text);

        }
        if($result=='True'){
            return redirect()->back()->with('success','Successfully send sms to all.');
        }else{
            return redirect()->back()->with('error','Sms is not delivered.')->withInput();
        }

    }

    public function customSms(){
        $branch = Branch::pluck('name','id');
        $course = Course::pluck('name','id');
        return view('backend.sms.customSms',compact('branch','course'));
    }
    public function customSmsSend(Request $request){
        $validator = Validator::make($request->all(), [
            'mobile'  => "required",
            'text'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $result = SMS::oneToMany($request->mobile,$request->text);
        if($result=='True'){

            return redirect()->back()->with('success','Successfully send sms to all.');
        }else{
            return redirect()->back()->with('error','Sms is not delivered.')->withInput();
        }

    }
    public function subCourseLoad(Request $request){
        $data = [];
        if($request->type==1){
            $data = SubCourse::where('course_id',$request->id)->pluck('sub_course','id');
        }else{
            $data = Batch::where(['branch_id'=>$request->branch,'sub_course_id'=>$request->sub_course])->pluck('batch_no','id');
        }
        return response()->json($data,200);

    }
    public function studentLoad(Request $request){
        $students = ProgramStudies::leftJoin('users','user_id','users.id')->where(['status'=>3,'branch_id'=>$request->branch])->select('name','mobile_no','user_id');
        if(isset($request->course) && $request->course!=''){
            $students = $students->where('course_id',$request->course); 
        }
        if(isset($request->sub_course) && $request->sub_course!=''){
            $students = $students->where('sub_course_id',$request->sub_course); 
        }
        if(isset($request->batch) && $request->batch!=''){
            $students = $students->where('batch_id',$request->batch); 
        }
        


        $students = $students->get();
        return response()->json($students,200);

    }


    public function smsLog(){
      SMS::deliveryReport();
        return view('backend.sms.log');
    }
    public function smsLogSingle($id){
        $data = SmsLog::findOrFail($id);
        return view('backend.sms.singleModal',compact('data'));
    }
    public function smsLogAll(){
        
        $allData = SmsLog::latest();
        return DataTables::of($allData)
            ->addColumn('status_text',function($data){
                if($data->status==1){
                    return '<span class="text-success">Delivered</span>';
                }else{
                    return '<span class="text-danger">Failed</span>';

                }
            })
            ->addColumn('action','
            <a  href="javascript:void(0);" onclick="smsDetails({{$id}})" class="btn btn-warning btn-sm" >View</a>
            ')
            ->rawColumns(['action','status_text'])
            ->toJson();
    }




}
