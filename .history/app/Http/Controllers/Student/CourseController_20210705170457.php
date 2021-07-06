<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
 public function enrollmentForm(){

    return view('admin.studentpages.enrollmentform');

 }
}
