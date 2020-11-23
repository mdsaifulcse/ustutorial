<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='sliders';
    protected $fillable=['caption','overview','image','button_text','url','status','serial','created_by','updated_by'];
}
