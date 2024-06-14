<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PreschoolController;
use App\Http\Controllers\DashboardController;


// Route::get('/', function () {
//     return view('test');
// });


Route::get('index', [PreschoolController::class, 'index'])->name('index');  //correct

Route::get('about', [PreschoolController::class, 'about'])->name('about');//correct

Route::get('team', [PreschoolController::class, 'team'])->name('team');
Route::get('error', [PreschoolController::class, 'error'])->name('error');
Route::get('appointment', [PreschoolController::class, 'appointment'])->name('appointment');
Route::get('callToAction', [PreschoolController::class, 'callToAction'])->name('callToAction');
Route::get('classes', [PreschoolController::class, 'classes'])->name('classes');
Route::get('contact', [PreschoolController::class, 'contact'])->name('contact');
Route::get('facility', [PreschoolController::class, 'facility'])->name('facility');
Route::get('testimonial', [PreschoolController::class, 'testimonial'])->name('testimonial');


// Route::prefix('admin')->group(function () {
//     Route::get('dashBoard',[DashboardController::class, 'dashBoard'])->name('dashBoard');
//     Route::get('login',[DashboardController::class, 'login'])->name('login');
//     Route::get('register',[DashboardController::class, 'register'])->name('register');
//     Route::get('tables',[DashboardController::class, 'tables'])->name('tables');
//     Route::get('forgotPassword',[DashboardController::class, 'forgotPassword'])->name('forgotPassword');
//     Route::get('errorPage',[DashboardController::class, 'errorPage'])->name('errorPage');
//     Route::get('blank',[DashboardController::class, 'blank'])->name('blank');
//     Route::get('buttons',[DashboardController::class, 'buttons'])->name('buttons');
//     Route::get('cards',[DashboardController::class, 'cards'])->name('cards');
//     Route::get('charts',[DashboardController::class, 'charts'])->name('charts');
    
//     })->middleware('verified');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
