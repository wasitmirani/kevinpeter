<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){


        if(Auth::user()->role_id == '1') {
            $courses = Course::with('teachers')->orderby('id','desc')->latest()->get();
            $totalCourses = Course::with('teachers')->count();
            $totalEnrollments = Enrollment::all()->count();
            $teachers = User::where('role_id','3')->get();
            return view('admin.pages.dashboard',compact('courses','totalCourses','totalEnrollments','teachers'));

        }

        if(Auth::user()->role_id == '2') {

            $courses = Course::with('teachers')->where('id','=',Auth::user()->id)->orderby('id','desc')->get();
            $totalCourses = count($courses);
            return view('admin.pages.dashboard',compact('courses','totalCourses'));
        }

        if(Auth::user()->role_id == '3') {
            $courses = Course::with('teachers')->where('teacher_id','=',Auth::user()->id)->orderby('id','desc')->get();
            $totalCourses = count($courses);
            $students = Enrollment::with('course')->with('student')->where('teacher_id',Auth::user()->id)->count();
            return view('admin.pages.dashboard',compact('courses','totalCourses','students'));

        }

    }


    public function profile(){

        $user = Auth::user();

        return view('admin.pages.profile',['user'=>$user]);
    }

    public function updateAvatar(Request $request){


        $id = Auth::user()->id;

        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/assets/images/user/"), $name);

        }



        $user = User::where('id',$id)->first();
        $user->image = $name ;
        if($user->save()){
            return response()->json('Image Update Successfully');

        }else{
            return  response()->json('Failed To Update Image');
        }




    }



    public function updateProfile(Request $request){

        $user = Auth::user();
        $id = $user->id;
        $profile = User::where('id',$id)->first();
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->role_id = $request->role;

        if($user->save()){

            return response()->json('Profile Updated Successfully');
        }else{
            return response()->json('Failed To Update Profile');
        }


    }

    public function updatePassword(Request $request){



        $validate = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::where('id',Auth::user()->id)->first();

        $user->password = $request->password;
        if($user->save()){

            return response()->json('Password Updated Successfully');

        }else{

            return response()->json('Failed To Update Password');


        }

    }

    public function getEnrollments(){

        $enrollments = Enrollment::with('course')->with('student')->get();



        return view('admin.pages.enrollments',compact('enrollments'));



    }


    public function searchCourse(Request $request){

       $keyword = $request->keyword;
       $result = User::where('name','=',$keyword)->get();
       dd($result);
    }
}
