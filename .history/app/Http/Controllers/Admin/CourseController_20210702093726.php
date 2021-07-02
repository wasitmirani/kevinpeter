<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        $teachers = User::where('role_id',3)->get();

        return view('admin.pages.courses.index');
    }

    public function create(){

        return view('admin.pages.courses.add');
    }
}
