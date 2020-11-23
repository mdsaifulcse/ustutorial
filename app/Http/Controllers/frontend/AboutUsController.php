<?php

namespace App\Http\Controllers\frontend;

use App\Model\PrimaryInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    protected function aboutCompany(){
        $primaryInfo=PrimaryInfo::select('why_us','description','company_name','address','mobile_no','email')->first();
        return view('website.about-us.about-us',compact('primaryInfo'));
    }
}
