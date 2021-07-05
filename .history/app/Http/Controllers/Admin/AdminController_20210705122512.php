<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;
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
}
