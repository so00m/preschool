<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreschoolController extends Controller
{

    public function index(){
            return view('index');
        }

    public function team(){
            return view('team');
        }

    public function error(){
            return view('error');
        }

    public function about(){
            return view('about');
        }

    public function appointment(){
            return view('appointment');
        }

    public function callToAction(){
            return view('callToAction');
        }

    public function classes(){
            return view('classes');
        }

    public function contact(){
            return view('contact');
        }

    public function facility(){
            return view('facilities');
        }

    public function testimonial(){
            return view('testimonial');
        }

}
