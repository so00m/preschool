<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myVal() {
        // session()->put('test','my first session');
         session()->flash('test1','my first session');
         return 'session created';
     }
 
     public function restoreVal() {
                 return 'my session value is  : ' . session('test1');
     }
 
     public function deleteVal() {
         //session()->forget('test');
         session()->flush();
 
         return 'session removed';
 
     }
}
