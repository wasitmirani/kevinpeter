<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $students = User::where('role_id',2)->latest()->get();
        return view('admin.pages.students.index',compact('students'));
    }
}
