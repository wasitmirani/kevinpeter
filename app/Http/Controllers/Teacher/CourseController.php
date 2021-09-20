<?php

namespace App\Http\Controllers\Teacher;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Enrollment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseContent;
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
        if(!is_null($request->file)) {
             $files = json_encode($request->file);

        }

       $store =  Course::create([
            'course_title' => $request->title,
            'course_description' => $request->description,
            'price' => $request->price,
            'teacher_id' => Auth::user()->id,
            'category_id' => $request->category,
            'image' => $name,

        ]);



        if($store){

            return response()->json('Course Added Successfully');
        }else{
            return response()->json('OOPs Something Went Wrong');
        }




    }
    public function addCourseContent(Request $request){



        $arr = [];
        foreach($request->file as $key =>$file){

            $string = Str::random(16);
            $ext = $file->guessExtension();
            $file_name = $string . '.' .  $ext;
            $filepath = 'uploads/' . Auth::user()->name . '/' . $file_name;
            $file->move(('uploads/' . Auth::user()->name), $file_name);
            array_push($arr, [$file_name, $filepath]);


        CourseContent::create([
            'course_id' => $request->course_id,
            'lessonTitle' => $request->lessonTitle[$key],
            'file' => $filepath
        ]);



        }
        if(!is_null($arr)){
            return response()->json('Course Content Uploaded Successfully');


        }else{
            return response()->json('Something Went Wrong');
        }



    }


    public function download_content($id){
        $file = CourseContent::where('id',$id)->first();
        return response()->download(public_path($file->file));
    }

    public function listCourseContent($id){

        $contents = CourseContent::with('course')->where('course_id',$id)->get();

        return view('admin.teacherpages.courses.course_content',compact('contents'));
    }

    public function courseContent(Request $request){

        $courses = Course::where('teacher_id',Auth::user()->id)->get();
        return view('admin.teacherpages.courses.addCourseContent',compact('courses'));

    }


    public function edit($id){
        $course = Course::where('id',$id)->first();
        $categories = Category::all();


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
        $course->teacher_id = Auth::user()->id;

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



    public function joinRequest(){

        $requests = Enrollment::where('teacher_id',Auth::user()->id)->get();
        return view('admin.teacherpages.courses.requests',compact('requests'));

    }


    public function updateRequestStatus(Request $request){

         $id = $request->id;

         $status = $request->status;

         $enrollment = Enrollment::where('id',$id)->first();
         $updated =  $enrollment->update([
             'status' => $status
         ]);



         if($updated){
            return response()->json('Status Updated Successfully');

         }else{
            return response()->json('Failed To Update Status');
        }

    }

}
