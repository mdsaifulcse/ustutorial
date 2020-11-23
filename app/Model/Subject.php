<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';
    protected $fillable=['sub_course_id','branch_id','subject_name','short_name','status','created_by','updated_by'];

    public function subCourserOfSubject(){
        return $this->belongsTo(SubCourse::class,'sub_course_id','id');
    }
}
