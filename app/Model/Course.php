<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    protected $fillable=['category_id','sub_category_id','name','start_date','overview','curriculum','program_structure','eligibility','instructor','course_duration','price','discount','image','image_small','show_at_home',
        'status','serial','created_by','updated_by'];

//    public function courseOfBranch(){
//        return $this->belongsTo(Branch::class,'branch_id','id');
//    }
}
