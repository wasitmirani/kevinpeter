<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){

        $teachers = User::where('role_id',3)->get();

        return view('admin.pages.courses.index',['teachers',$teachers]);
    }

    public function create(){

        return view('admin.pages.courses.add');
    }
}
