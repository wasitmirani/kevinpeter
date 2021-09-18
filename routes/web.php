<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
Route::post('/search/courses', [App\Http\Controllers\HomeController::class, 'searchcourses'])->name('search.course');
Route::post('/add/cart',[CartController::class,'addCart'])->name('add.cart');

Route::middleware(['auth'])->group(function(){

    Route::get('/checkout/create', ['as'=>'home','uses'=>'CheckoutController@index'])->name('checkout.create');
    Route::post('order-post', ['as'=>'order-post','uses'=>'CheckoutController@orderPost']);



});




Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
    Route::get('profile',[App\Http\Controllers\Admin\AdminController::class,'profile'])->name('profile');
    Route::post('update/profile/avatar',[App\Http\Controllers\Admin\AdminController::class,'updateAvatar'])->name('update.avatar');
    Route::post('update/profile',[App\Http\Controllers\Admin\AdminController::class,'updateProfile'])->name('update.profile');
    Route::post('update/password',[App\Http\Controllers\Admin\AdminController::class,'updatePassword'])->name('update.password');
    Route::get('enrollments',[App\Http\Controllers\Admin\AdminController::class,'getEnrollments'])->name('enrollments');

    Route::post('search',[App\Http\Controllers\Admin\AdminController::class,'searchCourse'])->name('search.course');



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

        Route::get('students/create',[App\Http\Controllers\Admin\StudentController::class,'create'])->name('.create');
        Route::get('students/show/{id}',[App\Http\Controllers\Admin\StudentController::class,'show'])->name('.show');
        Route::get('students/edit/{id}',[App\Http\Controllers\Admin\StudentController::class,'edit'])->name('.edit');
        Route::post('students/update/{id}',[App\Http\Controllers\Admin\StudentController::class,'updateStudent'])->name('.update');
        Route::post('students/delete/{id}',[App\Http\Controllers\Admin\StudentController::class,'deleteStudent'])->name('.delete');

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


Route::middleware(['auth'])->prefix('teacher')->name('teacher.')->group(function () {
    Route::name('course')->group(function(){

        Route::get('course/list',[App\Http\Controllers\Teacher\CourseController::class,'index'])->name('.list');
        Route::get('create/courses',[App\Http\Controllers\Teacher\CourseController::class,'create'])->name('.create');
        Route::post('course/store',[App\Http\Controllers\Teacher\CourseController::class,'store'])->name('.store');
        Route::get('add/course/content',[App\Http\Controllers\Teacher\CourseController::class,'courseContent'])->name('.content');
        Route::post('/course/content',[App\Http\Controllers\Teacher\CourseController::class,'addCourseContent'])->name('.post.content');
        Route::get('course/show',[App\Http\Controllers\Teacher\CourseController::class,'show'])->name('.show');
        Route::get('courses/edit/{id}',[App\Http\Controllers\Teacher\CourseController::class,'edit'])->name('.edit');
        Route::post('courses/update/{id}',[App\Http\Controllers\Teacher\CourseController::class,'updateCourse'])->name('.update');
        Route::post('courses/delete/{id}',[App\Http\Controllers\Teacher\CourseController::class,'deleteCourse'])->name('.delete');
        Route::get('enrollment/request/',[App\Http\Controllers\Teacher\CourseController::class,'joinRequest'])->name('.request');
        Route::post('update/request/status/{id}',[App\Http\Controllers\Teacher\CourseController::class,'updateRequestStatus'])->name('.status');

        //student



    });
    //student
    Route::name('student')->group(function(){
        Route::get('student/list',[App\Http\Controllers\Teacher\StudentController::class,'index'])->name('.list');
        Route::get('student/detail/{id}',[App\Http\Controllers\Teacher\StudentController::class,'studentDetail'])->name('.detail');

    });


});

Route::middleware(['auth'])->prefix('student')->name('student.')->group(function () {
    Route::name('course')->group(function(){

        Route::get('courses',[App\Http\Controllers\Student\CourseController::class,'courses'])->name('.list');
        Route::get('course/enroll/form/{id}',[App\Http\Controllers\Student\CourseController::class,'enrollmentForm'])->name('.enroll.form');
        Route::post('course/enroll',[App\Http\Controllers\Student\CourseController::class,'enrollment'])->name('.enroll');


        //student course

        Route::get('my/courses',[App\Http\Controllers\Student\CourseController::class,'myCourses'])->name('.my.courses');


    });

});


Route::get('contact',[App\Http\Controllers\HomeController::class,'contactUsPage'])->name('contact');
Route::get('about',[App\Http\Controllers\HomeController::class,'abouttUsPage'])->name('about');
Route::get('class',[App\Http\Controllers\HomeController::class,'classPage'])->name('classes');
Route::get('enroll/now/{id}',[App\Http\Controllers\HomeController::class,'enrollForm'])->name('enroll.form');
Route::post('enroll/now',[App\Http\Controllers\HomeController::class,'enrollNow'])->name('enroll.now');


