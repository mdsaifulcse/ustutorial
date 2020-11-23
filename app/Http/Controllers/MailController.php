<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;


class MailController extends Controller
{
    public  function index(){
        return view('frontend.contact.contact');
    }

    public  function Mailsend(Request $request){

    $this->validate($request,[
        'name' => 'required',
        'subject' => 'required',
        'message' => 'required',
        'email' => 'required|email',

    ]);

 /*   $data = array(
        'name'  => $request->name,
        'email'  => $request->email,
        'subject'  => $request->subject,
        'message'  => $request->message,

    );*/

        $name  = $request->name;
        $email  = $request->email;
        $subject = $request->subject;
        $message  = $request->message;

    Mail::to('kamrul.leamtech@gmail.com')->send(new ContactEmail($name,$message,$subject,$email));

        return back()->with('success','thanks for contacting us');
    }
}
