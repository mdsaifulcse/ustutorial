<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teachers';
    protected $fillable=['name','mobile','email','subject_id','present_address','permanent_address','qualification','image','created_by','updated_by'];

}
