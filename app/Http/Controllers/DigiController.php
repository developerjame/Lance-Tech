<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DigiController extends Controller
{
    //Home page
    public function index(){
        return view('index');
    }

    //Access contact page
    public function contact(){
        return view('contact');
    }

    //Access about us page
    public function aboutUs(){
        return view('about-us');
    }

    //Access services
    public function services(){
        return view('section');
    }

    
}
