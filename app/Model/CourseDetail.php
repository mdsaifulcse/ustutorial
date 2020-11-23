<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    protected $table='course_details';
    protected $fillable=['course_id','title','details','photo','detail_type','serial','status'];
}
