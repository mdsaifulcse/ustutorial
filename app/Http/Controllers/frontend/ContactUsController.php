<?php

namespace App\Http\Controllers\frontend;

use App\Mail\UseFeedBackSend;
use App\Model\PrimaryInfo;
use App\Model\SocialIcon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    protected function contactWithCompany(){
        $info=PrimaryInfo::first();
        $socialIcons=SocialIcon::orderBy('id','asc')->get();
        return view('website.contact.contact-us',compact('info','socialIcons'));
    }


    protected function getUserFeedBack(Request $request){

        Mail::to('info@ustutorial.com')->send(new UseFeedBackSend($request));
        return redirect()->back()->with('success','Thank you very much for your message');
    }
}
