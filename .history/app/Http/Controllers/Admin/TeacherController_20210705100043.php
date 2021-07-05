<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
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

        $teacher = User::where([['id','=',$id],['role_id','=',3]])->first();
        return view('admin.pages.teachers.show',compact('teacher'));

    }


    public function edit($id){

        $teacher = User::where('id','3')->first();

        return view('admin.pages.teachers.edit',compact('teacher'));
    }


    public function update(Request $request){

        $id = $request->id;

        $teacher = User::where('id', $id)->first();\
        dd($teacher);

        $teacher->name = $request->name;
        $teacher->email = $request->email;

        return view('admin.pages.teachers.add',compact('teacher'));
    }

    public function delete($id){

        return $id;
    }




}
