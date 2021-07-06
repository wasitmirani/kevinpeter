<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $students = Enrollment::with('course')->with('student')->where('teacher_id',Auth::user()->id)->get();
        return view('admin.teacherpages.courses.myStudents',compact('students'));


    }

    public function detail($id){
        $student = Enrollment::with('course')->with('student')->where([['teacher_id','=',Auth::user()->id],['id','=',$id]])->first();
        return view('admin.teacherpages.courses.detail',compact('student'));


    }
}
