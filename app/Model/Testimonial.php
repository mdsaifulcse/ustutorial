<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
    protected $fillable = ['course_name','rating','name','content','image','image_small','url','serial','status','created_by','updated_by'];
}
