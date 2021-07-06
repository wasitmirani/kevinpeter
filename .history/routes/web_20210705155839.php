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
    Route::post('update/profile/avatar',[App\Http\Controllers\Admin\AdminController::class,'updateAvatar'])->name('update.avatar');
    Route::post('update/profile',[App\Http\Controllers\Admin\AdminController::class,'updateProfile'])->name('update.profile');
    Route::post('update/password',[App\Http\Controllers\Admin\AdminController::class,'updatePassword'])->name('update.password');



    Route::name('course')->group(function(){

        Route::get('course/list',[App\Http\Controllers\Admin\CourseController::class,'index'])->name('.list');
        Route::get('create/courses',[App\Http\Controllers\Admin\CourseController::class,'create'])->name('.create');
        Route::post('course/store',[App\Http\Controllers\Admin\CourseController::class,'store'])->name('.store');
        Route::get('course/show',[App\Http\Controllers\Admin\CourseController::class,'show'])->name('.show');
        Route::get('courses/edit/{id}',[App\Http\Controllers\Admin\CourseController::class,'edit'])->name('.edit');
        Route::post('courses/update/{id}',[App\Http\Controllers\Admin\CourseController::class,'updateCourse'])->name('.update');
        Route::post('courses/delete/{id}',[App\Http\Controllers\Admin\CourseController::class,'deleteCourse'])->name('.delete');

    });
    Route::name('teachers')->group(function(){

        Route::get('teachers',[App\Http\Controllers\Admin\TeacherController::class,'index']);
        Route::get('teachers/create',[App\Http\Controllers\Admin\TeacherController::class,'create'])->name('.create');
        Route::get('teachers/show/{id}',[App\Http\Controllers\Admin\TeacherController::class,'show'])->name('.show');
        Route::get('teachers/edit/{id}',[App\Http\Controllers\Admin\TeacherController::class,'edit'])->name('.edit');
        Route::post('teachers/update/{id}',[App\Http\Controllers\Admin\TeacherController::class,'update'])->name('.update');
        Route::post('teachers/delete/{id}',[App\Http\Controllers\Admin\TeacherController::class,'deleteTeacher'])->name('.delete');


    });
    Route::name('students')->group(function(){

        Route::get('students',[App\Http\Controllers\Admin\StudentController::class,'index']);

        Route::get('Students/create',[App\Http\Controllers\Admin\StudentController::class,'create'])->name('.create');
        Route::get('Students/show/{id}',[App\Http\Controllers\Admin\StudentController::class,'show'])->name('.show');
        Route::get('Students/edit/{id}',[App\Http\Controllers\Admin\StudentController::class,'edit'])->name('.edit');
        Route::post('Students/update/{id}',[App\Http\Controllers\Admin\StudentController::class,'updateStudent'])->name('.update');
        Route::post('Students/delete/{id}',[App\Http\Controllers\Admin\StudentController::class,'deleteStudent'])->name('.delete');

    });

    //Categories

    Route::name('categories')->group(function(){

        Route::get('categories',[App\Http\Controllers\Admin\CategoryController::class,'index']);
        Route::get('categories/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('.create');
        Route::post('categories/store',[App\Http\Controllers\Admin\CategoryController::class,'store'])->name('.store');
        Route::get('categories/show/{id}',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('.show');
        Route::get('categories/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('.edit');
        Route::post('categories/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'updateCategory'])->name('.update');
        Route::post('categories/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteCategory'])->name('.delete');

    });

});


Route::middleware(['auth'])->prefix('admin')->name('teacher.')->group(function () {
    Route::name('course')->group(function(){

        Route::get('course/list',[App\Http\ControllersTeacher\CourseController::class,'index'])->name('.list');
        Route::get('create/courses',[App\Http\ControllersTeacher\CourseController::class,'create'])->name('.create');
        Route::post('course/store',[App\Http\ControllersTeacher\CourseController::class,'store'])->name('.store');
        Route::get('course/show',[App\Http\ControllersTeacher\CourseController::class,'show'])->name('.show');
        Route::get('courses/edit/{id}',[App\Http\ControllersTeacher\CourseController::class,'edit'])->name('.edit');
        Route::post('courses/update/{id}',[App\Http\ControllersTeacher\CourseController::class,'updateCourse'])->name('.update');
        Route::post('courses/delete/{id}',[App\Http\ControllersTeacher\CourseController::class,'deleteCourse'])->name('.delete');

    });

});
