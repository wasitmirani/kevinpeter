<?php

namespace App\Http\Controllers\Student;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    public function courses(){

        $courses = Course::with('teachers')->with('category')->paginate(10);

        return view('admin.studentpages.courses',compact('courses'));

     }


 public function enrollmentForm($id){

    $course = Course::where('id',$id)->with('teachers')->with('category')->first();

    return view('admin.studentpages.enrolmentform',compact('course'));

 }

 public function enrollment(Request $request){

    $validate = $request-validate([
        'course' => ['required',
        'teacher' => ['required'],
        'price' => ['required'],
        'category' => ['required'],
        'title' => ['required']
    ]);

 }
}
