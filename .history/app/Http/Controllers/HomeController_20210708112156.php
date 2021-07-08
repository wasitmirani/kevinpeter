<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
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

        $course = Course::with->('teacher')->with('category')->where('id',$id)->first();
        dd($course);
        return view('frontend.enrollmentForm');

    }


}
