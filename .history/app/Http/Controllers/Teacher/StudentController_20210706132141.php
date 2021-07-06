<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        dd(Course::with('enrollments')->where('teacher_id',Auth::user()->id)->get());


    }
}
