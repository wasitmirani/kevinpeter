<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function courses(){

        $courses = Course::paginate(10);

        return view('admin.studentpages.courses');

     }


 public function enrollmentForm(){

    return view('admin.studentpages.enrollmentform');

 }
}
