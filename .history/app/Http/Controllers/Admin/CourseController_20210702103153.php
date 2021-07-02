<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){


        $courses = Course::orderby('id','desc')->all();
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

        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/admin/courses/images/"), $name);

        }

       $store =  Course::create([
            'course_title' => $request->title,
            'course_description' => $request->description,
            'price' => $request->price,
            'teacher_id' => $request->teacher,
            'image' => $name
        ]);
        if($store){

            return response()->json('Course Added Successfully');
        }else{
            return response()->json('OOPs Something Went Wrong');
        }




    }
}
