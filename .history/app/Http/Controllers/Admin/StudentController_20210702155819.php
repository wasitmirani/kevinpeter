<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(){

        $students = User::where('role_id',2)->latest()->get();
        return view('admin.pages.students.index',compact('students'));
    }

    public function show($id){
        $students = User::where([['role_id','=',2],['id','=',$id]])->latest()->get();



    }
}
