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
        dd($teacher);

    }


    public function edit($id){

        $teacher = User::where('role_id','3')->first();

        return view('admin.pages.teachers.add',compact('teacher'));
    }


    public function update($id){

        $teacher = User::where('role_id','3')->first();

        return view('admin.pages.teachers.add',compact('teacher'));
    }

    public function delete($id){

        return $id;
    }




}
