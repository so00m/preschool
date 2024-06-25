<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
    public function tables()
    {
        return view('admin.tables');
    }


    public function forgotPassword()
    {
        return view('admin.forgotPassword');
    }

    public function error()
    {
        return view('admin.error');
    }

    public function blank()
    {
        return view('admin.blank');
    }


    public function buttons()
    {
        return view('admin.buttons');
    }


    public function cards()
    {
        return view('admin.cards');
    }


    public function charts()
    {
        return view('admin.charts');
    }

    public function color()
    {
        return view('admin.utilities-color');
    }

    public function animation()
    {
        return view('admin.utilities-animation');
    }

    public function border()
    {
        return view('admin.utilities-border');
    }

    public function other()
    {
        return view('admin.utilities-other');
    }





}