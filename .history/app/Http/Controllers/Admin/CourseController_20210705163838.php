<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(){

        if(Auth::user()->role_id == '1') {
            $courses = Course::with('teachers')->orderby('id','desc')->get();
        }

        if(Auth::user()->role_id == '2') {
            $courses = Course::with('teachers')->where('id','=',Auth::user()->id)->orderby('id','desc')->get();

        }

        if(Auth::user()->role_id == '3') {
            $courses = Course::with('teachers')->where('id','=',Auth::user()->id)->orderby('id','desc')->get();

        }
        dd($courses);

        return view('admin.pages.courses.index',compact('courses'));
    }

    public function create(){
        $teachers = User::where('role_id',3)->get();
        $categories = Category::all();

        return view('admin.pages.courses.add',compact('teachers','categories'));
    }


    public function store(Request $request){


        $validate = $request->validate([
            'title' => "required",
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'teacher' => 'required',
            'category' => 'required'
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
            'category_id' => $request->category,
            'image' => $name
        ]);
        if($store){

            return response()->json('Course Added Successfully');
        }else{
            return response()->json('OOPs Something Went Wrong');
        }




    }


    public function edit($id){
        $course = Course::where('id',$id)->first();
        $teachers = User::where('role_id',3)->get();

        return view('admin.pages.courses.add',compact('teachers','course'));

    }


    public function updateCourse(Request $request){

        $id = $request->id;
        $course = Course::where('id',$id)->first();

        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/admin/courses/images/"), $name);
            $course->image = $$name;

        }else{

            $course->image = $request->oldImage;

        }

        $course->course_title = $request->title;
        $course->course_description = $request->description;
        $course->price = $request->price;
        $course->teacher_id = $request->teacher;
        if($course->save()){

            return response()->json('Course Updated Successfully');
        }else{
            return response()->json('OOPs Something Went Wrong');
        }


    }

    public function deleteCourse($id){

        $course = Course::where('id',$id)->first();

        if($course->delete()){

            return response()->json('Your Record Deleted Successfully');

        }else{

            return response()->json('Something Went Wrong');
        }



    }
}
