<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('teacher')->name('teacher.')->group(function () {

    Route::post('create/course',[App\Http\Controllers\Api\TeacherController::class,'create_course']);
    Route::post('update/course/{id}',[App\Http\Controllers\Api\TeacherController::class, 'update_course']);
    Route::post('delete/course/{id}',[App\Http\Controllers\Api\TeacherController::class,'delete_course']);



});


Route::prefix('student')->name('student.')->group(function () {

 Route::post('enroll/',[App\Http\Controllers\Api\StudentController::class,'enroll_course']);
 Route::get('course',[App\Http\Controllers\Api\StudentController::class,'get_courses']);
 Route::get('course/detail/{id}',[App\Http\Controllers\Api\StudentController::class,'course_detail']);



});
