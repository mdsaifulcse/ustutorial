<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LatestNewsController extends Controller
{
    protected function latestNewsList(){
        return view('website.news.newses');
    }
}
