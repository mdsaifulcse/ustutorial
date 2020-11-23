<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['title','image','start_date','end_date','event_time','address','address_map','event_type','url','overview','description','event_tag','status','created_by'];
}
