<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
    Route::get('profile',[App\Http\Controllers\Admin\AdminController::class,'profile'])->name('profile');



    Route::name('course')->group(function(){

        Route::get('courses',[App\Http\Controllers\Admin\CourseController::class,'index']);
        Route::get('create/courses',[App\Http\Controllers\Admin\CourseController::class,'create'])->name('.create');
        Route::post('courses',[App\Http\Controllers\Admin\CourseController::class,'store'])->name('store');
        Route::get('courses/edit/{id}',[App\Http\Controllers\Admin\CourseController::class,'edit'])->name('edit');
        Route::get('courses/update/{id}',[App\Http\Controllers\Admin\CourseController::class,'update'])->name('update');

    });
    Route::name('teachers')->group(function(){

        Route::get('teachers',[App\Http\Controllers\Admin\TeacherController::class,'index']);
        Route::get('create/teachers',[App\Http\Controllers\Admin\TeacherController::class,'create'])->name('.create');

    });
    Route::name('students')->group(function(){

        Route::get('students',[App\Http\Controllers\Admin\StudentController::class,'index']);

    });

});
