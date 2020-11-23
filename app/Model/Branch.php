<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table='branch';
    protected $fillable=['name','address','details','branch_id','contact','status'];

//    public function coursesOfBranch(){
//        return $this->hasMany(Course::class,'branch_id','id');
//        $courses= Course::where('branch_id',$branchId)->get();
//        return $good=count($courses);
   // }

//    public function subCoursesOfBranch(){
//        return $this->hasMany(SubCourse::class,'branch_id','id');
//    }
}
