<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreschoolController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChildController;


Route::get('/', function () {
   return view('welcome');
});

Route::get('/logout', function () { Auth::logout(); return redirect('login'); })->name('logout');
//---------------front pages routes----------------------------------------------------------


Route::get('index', [PreschoolController::class, 'index'])->name('index');
Route::get('about', [PreschoolController::class, 'about'])->name('about');
Route::get('team', [PreschoolController::class, 'team'])->name('team');
Route::get('error', [PreschoolController::class, 'error'])->name('error');
Route::get('appointment', [PreschoolController::class, 'appointment'])->name('appointment');
Route::get('callToAction', [PreschoolController::class, 'callToAction'])->name('callToAction');
Route::get('classes', [PreschoolController::class, 'classes'])->name('classes');
Route::get('contact', [PreschoolController::class, 'contact'])->name('contact');
Route::get('facility', [PreschoolController::class, 'facility'])->name('facility');
Route::get('testimonial', [PreschoolController::class, 'testimonial'])->name('testimonial');




//---------------dashboard routes-----------------------------------------------------------

Route::prefix('admin')->group(function () {
    
    //Route::get('dashBoard',[DashboardController::class, 'dashBoard'])->name('dashBoard');
    // Route::get('login',[DashboardController::class, 'login'])->name('login');
    // Route::get('register',[DashboardController::class, 'register'])->name('register');
    Route::get('tables',[DashboardController::class, 'tables'])->name('tables');
    Route::get('forgotPassword',[DashboardController::class, 'forgotPassword'])->name('forgotPassword');
    Route::get('error',[DashboardController::class, 'error'])->name('error');
    Route::get('blank',[DashboardController::class, 'blank'])->name('blank');
    Route::get('buttons',[DashboardController::class, 'buttons'])->name('buttons');
    Route::get('cards',[DashboardController::class, 'cards'])->name('cards');
    Route::get('charts',[DashboardController::class, 'charts'])->name('charts');
    Route::get('animation',[DashboardController::class, 'animation'])->name('animation');
    Route::get('border',[DashboardController::class, 'border'])->name('border');
    Route::get('color',[DashboardController::class, 'color'])->name('color');
    Route::get('other',[DashboardController::class, 'other'])->name('other');

    })->middleware('verified');

  Route::get('/dashBoard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('dashBoard');  
    
Auth::routes(['verify'=>true]);
// Home route after successful login and verification


//---------------teacher routes-----------------------------------------------------------

Route::get('teachers',[TeacherController::class, 'index'])->name('teachers');
Route::get('addTeacher',[TeacherController::class, 'create'])->name('addTeacher');
Route::post('insertTeacher', [TeacherController::class,'store'])->name('insertTeacher');
Route::get('editTeacher/{id}', [TeacherController::class, 'edit'])->name('editTeacher');
Route::put('updateTeacher/{id}', [TeacherController::class, 'update'])->name('updateTeacher');
Route::get('showTeacher/{id}', [TeacherController::class, 'show'])->name('showTeacher');
Route::delete('deleteTeacher', [TeacherController::class, 'destroy'])->name('deleteTeacher');
Route::get('restoreTeacher/{id}', [TeacherController::class,'restore'])->name('restoreTeacher');


//---------------classes routes-----------------------------------------------------------

Route::get('classes',[ClassesController::class, 'index'])->name('Classes');
Route::get('addClass',[ClassesController::class, 'create'])->name('addClass');
Route::post('insertClass', [ClassesController::class,'store'])->name('insertClass');
Route::get('editClass/{id}', [ClassesController::class, 'edit'])->name('editClass');
Route::put('updateClass/{id}', [ClassesController::class, 'update'])->name('updateClass');
Route::get('showClass/{id}', [ClassesController::class, 'show'])->name('showClass');
Route::delete('deleteClass', [ClassesController::class, 'destroy'])->name('deleteClass');
Route::get('restoreClass/{id}', [ClassesController::class,'restore'])->name('restoreClass');




//---------------children routes-----------------------------------------------------------

Route::get('children',[ChildController::class, 'index'])->name('children');
Route::get('addChild',[ChildController::class, 'create'])->name('addChild');
Route::post('insertChild', [ChildController::class,'store'])->name('insertChild');
Route::get('editChild/{id}', [ChildController::class, 'edit'])->name('editChild');
Route::put('updateChild/{id}', [ChildController::class, 'update'])->name('updateChild');
Route::get('showChild/{id}', [ChildController::class, 'show'])->name('showChild');
Route::delete('deleteChild', [ChildController::class, 'destroy'])->name('deleteChild');
Route::get('restoreChild/{id}', [ChildController::class,'restore'])->name('restoreChild');



//--------------------------------------------------------------------------
