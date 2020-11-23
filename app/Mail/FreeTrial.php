<?php

namespace App\Mail;

use App\Model\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FreeTrial extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $formData;
    public function __construct($data)
    {
        $this->formData = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $formData=$this->formData;
        $formData['course_name']=$courseName=Course::select('name')->where('id',$this->formData->course_id)->first();
        return $this->view('mail.free-trial-form',compact('formData'));
    }
}
