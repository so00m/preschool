<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashBoard()
    {
        $title = 'Dashboard Main';
        return view('admin.dashBoard', compact('title'));
    }

    public function login()
    {
        $title = 'Login Page';
        return view('admin.login', compact('title'));
    }


    public function register()
    {
        $title = 'Register Page';
        return view('admin.register', compact('title'));
    }


    public function tables()
    {
        $title = 'Tables Page';
        return view('admin.tables', compact('title'));
    }


    public function forgotPassword()
    {
        $title = 'Forgot-Password Page';
        return view('admin.forgotPassword', compact('title'));
    }

    public function error()
    {
        $title = 'Error Page';
        return view('admin.error', compact('title'));
    }

    public function blank()
    {
        $title = 'Blank Page';
        return view('admin.blank', compact('title'));
    }


    public function buttons()
    {
        $title = 'Button Page';
        return view('admin.buttons', compact('title'));
    }


    public function cards()
    {
        $title = 'Cards Page';
        return view('admin.cards', compact('title'));
    }


    public function charts()
    {
        $title = 'Charts Page';
        return view('admin.charts', compact('title'));
    }

}