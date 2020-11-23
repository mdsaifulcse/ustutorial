<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DemoClass extends Model
{

    protected $table='demo_classes';
    protected $fillable=['name','email','phone','course_id','status'];
}
