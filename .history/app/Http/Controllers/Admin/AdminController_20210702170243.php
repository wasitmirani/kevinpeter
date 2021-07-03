<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
        return view('admin.pages.dashboard',compact('courses'));
    }


    public function profile(){

        $user = Auth::user();

        return view('admin.pages.profile',['user'=>$user]);
    }
}
