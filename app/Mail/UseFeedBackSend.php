<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UseFeedBackSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $userMessage='';
    public function __construct($data)
    {
        $this->userMessage = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $messageData=$this->userMessage;
        return $this->view('mail.send-login-credential',compact('messageData'));
    }
}
