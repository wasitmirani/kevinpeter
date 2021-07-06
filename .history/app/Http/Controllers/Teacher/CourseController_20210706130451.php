<?php

namespace App\Http\Controllers\Teacher;

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
        $user = Auth::user();
        $id = $user->id;


            $courses = Course::with('teachers')->with('category')->where('teacher_id',$id)->get();




        return view('admin.teacherpages.courses.index',compact('courses'));
    }

    public function create(){
        $categories  = Category::all();
        return view('admin.teacherpages.courses.create',compact('categories'));
    }


    public function store(Request $request){


        $validate = $request->validate([
            'title' => "required",
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
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
            'teacher_id' => Auth::user()->id,
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
        $categories = User::where('role_id',3)->get();

        return view('admin.teacherpages.courses.create',compact('course','categories'));

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
        $course->category_id =  $request->category;
        $course->teacher_id =Auth::user()->id;

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
