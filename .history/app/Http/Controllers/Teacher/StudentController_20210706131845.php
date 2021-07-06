<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        dd(Course::with()->where('teacher_id',Auth::user()->id)->get());


    }
}
