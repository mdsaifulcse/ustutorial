<?php

namespace App\Http\Controllers;

use App\Model\Branch;
use App\Model\QuizCategory;
use App\Model\Teacher;
use App\User;
use Illuminate\Http\Request;
use DB, Auth, Validator, MyHelper;
use Yajra\Acl\Models\Role;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allUsers=Teacher::orderBy('id','desc')->paginate(10);

        return view('backend.teacher.index',compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150',
            //'email' => 'email|required|unique:users',
            //'qualification' => 'required|max:199',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        $input['created_by']=Auth::user()->id;

        if ($request->hasFile('image')){
            $input['image']=MyHelper::photoUpload($request->file('image'),'images/teacher/',120,100);
        }



        DB::beginTransaction();
        try{

             Teacher::create($input)->id;

            DB::commit();

            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('teachers')->with('success','New Teacher Successfully Create');
        }elseif($bug==1062){
            return redirect()->back()->with('error','The Mobile has already been taken.');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $data=Teacher::findOrFail($id);
        return view('backend.teacher.edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Teacher::findOrFail($id);
        return view('backend.primary_info.user.password',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data= Teacher::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator)->withInput();
        }

        $userData=Teacher::findOrFail($data->id);


        DB::beginTransaction();
        try{
            $input=$request->all();

            if ($request->hasFile('image')){
                $input['image']=MyHelper::photoUpload($request->file('image'),'images/teacher/',120,100);
                if (file_exists($data->image)){
                    unlink($data->image);
                }
            }

            $input['updated_by']=Auth::user()->id;

            $data->update($input); // update teacher info
            $userData->update($input); // update user info


            DB::commit();

            $bug=0;
        }
        catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }

        if($bug==0){

            return redirect()->back()->with('success','Teacher Info Successfully updated');

        }elseif ($bug==1062) {
            return redirect()->back()->with('error','Data has already been taken');
        }else{
            return redirect()->back()->with('error','Something error taken !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=Teacher::findOrFail($id);

        DB::beginTransaction();
        try {
            $teacher->delete();

            $bug = 0;
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if ($bug == 0) {
            return redirect()->back()->with('success', ' Users Deleted Successfully.');
        }elseif ($bug==1451){
            return redirect()->back()->with('error', 'Sorry this users can not be delete due to used another module');
        }
        else {
            return redirect()->back()->with('error', 'Something Error Found! ' . $bug1);
        }
    }

    protected function teacherProfile(){

            $userinfo=Teacher::where('user_id',Auth::user()->id)
                ->leftjoin('quiz_category','teachers.subject_id','quiz_category.id')
                ->select('quiz_category.name as subject_name','teachers.*')->first();
            $branch=Branch::select('name')->where('id',Auth::user()->branch)->value('name');

            return view('backend.teacher.teacher-profile',compact('userinfo','branch'));
    }

    protected function showTeacherDashboard(){
        return redirect('/teacher-profile');
    }





}
