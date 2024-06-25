<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreschoolController extends Controller
{

    public function index(){
            return view('frontPages.index');
        }

    public function team(){
            return view('frontPages.team');
        }

    public function error(){
            return view('frontPages.error');
        }

    public function about(){
            return view('frontPages.about');
        }

    public function appointment(){
            return view('frontPages.appointment');
        }

    public function callToAction(){
            return view('frontPages.callToAction');
        }

    public function classes(){
            return view('frontPages.classes');
        }

    public function contact(){
            return view('frontPages.contact');
        }

    public function facility(){
            return view('frontPages.facilities');
        }

    public function testimonial(){
            return view('frontPages.testimonial');
        }

}
