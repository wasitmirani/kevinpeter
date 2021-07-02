<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){



        return view('admin.pages.courses.index');
    }

    public function create(){
        $teachers = User::where('role_id',3)->get();

        return view('admin.pages.courses.add',compact('teachers'));
    }


    public function store(Request $request){

        $validate = $request->validate([
            'title' => "required",
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'teacher' => 'required'
        ]);

        Course::create([
            'course_title' => $request->title,
            'course_description' => $request->description,
            'price' => $request->price,
            'teacher_id'
        ]);


    }
}
