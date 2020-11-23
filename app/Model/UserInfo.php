<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\user;

class UserInfo extends Model
{
    protected $table='user_info';
    protected $fillable=['user_id','gender','profession','birthday','address','present_address','father_name','father_occupation','mother_name','mother_occupation','relationship','guardian_mobile','how_find_us','education_meduim','second_timer','school','school_gpa','college','college_gpa','final_step','education_group','student_id','branch_id','max_student_id'];


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
