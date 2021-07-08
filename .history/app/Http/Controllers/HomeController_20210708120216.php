<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $teachers = User::with('category')->where('role_id','3')->get();

        $courses = Course::with('teachers')->get();
        $totalTeacher = User::where('role_id','3')->count();
        $totalStudent = User::where('role_id','2')->count();

        $totalCourses = Course::all()->count();

        return view('home',compact('teachers','courses','totalTeacher','totalStudent','totalCourses'));


    }


    public function contactUsPage(){

        return view('frontend.contact');
    }
    public function aboutUsPage(){

        return view('frontend.about');
    }
    public function class(){

        return view('frontend.classes');
    }

    public function enrollForm($id){

        $course = Course::with('teachers')->with('category')->where('id',$id)->first();
        return view('frontend.enrollmentForm',compact('course'));

    }

    public function enrollNow(Request $request){

      $validate = $request->validate([

        'name' => 'required',
        'title' => 'required',
        'category'=> 'required',
        'teacher' => 'required',
        'price' => 'required',

      ]);

      $enrolled = Enrollment::create([
        'student_name' => $request->name,
        'course_title' => $request->title,
        'teacher' => $request->teacher,
        'price' => $request->price,
        'category' => $request->category
      ]);
      if($enrolled){

        return back()->with('You Are Enrollment Is Pending');

      }else{

        return back()->with('Failed To Enroll Something Went Wrong');

      }

    }


}
