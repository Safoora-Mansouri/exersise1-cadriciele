<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  

    public function index()
    {
        return view('home');
    }
    //////////////////////////////////
    
    public function project()
    {
        return view('project');
    }
    ////////////////////////////////////
    public function resume()
    {
        return view('resume');
    }
    ////////////////////////////////////

    public function contact()
    {
        return view('contact');
    }
    ////////////////////////////

    public function contactForm(Request $request)
    {
        //return $request;
        return view('contact', ['data' => $request]);
    }
}
