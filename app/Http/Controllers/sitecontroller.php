<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    function ShowHome(){
        return view('Home');
    }
    function ShowAbout(){
        return view('About');
    }
    function ShowService(){
        return view('Service');
    }
    function ShowPortfolio(){
        return view('Portfolio');
    }
}
