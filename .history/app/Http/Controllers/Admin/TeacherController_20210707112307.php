<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index(){

        $teachers = User::where('role_id',3)->get();

        return view('admin.pages.teachers.index',compact('teachers'));
    }

    public function create(){


        return view('admin.pages.teachers.add');
    }

    public function show($id){


        $teacher = User::where([['id','=',$id]])->first()e;
        return view('admin.pages.teachers.show',compact('teacher'));

    }


    public function edit($id){

        $categories = Category::all();

        $teacher = User::where([['id','=',$id],['role_id','=','3']])->first();

        return view('admin.pages.teachers.edit',compact('teacher','categories'));
    }


    public function update(Request $request){



        $id = $request->id;
        $teacher = User::where('id', $id)->first();
        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/assets/images/user/"), $name);
            $teacher->image = $name;


        }


        $teacher->name = $request->name;
        $teacher->email = $request->email;

        $teacher->category_id = $request->category;
        if( $teacher->save()){

            return response()->json('Teacher Record Updated Successfully');

        }else{
            return response()->json('Failed To Update Record');

        }


    }






}
