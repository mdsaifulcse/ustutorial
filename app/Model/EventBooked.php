<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EventBooked extends Model

{
    protected $table = 'event_booked';
    protected $fillable = ['event_id','first_name','last_name','mobile','email','academic_qualification','work_experience','field_of_work','country_of_work'];
}
