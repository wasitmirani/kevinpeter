<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index(){

        return view('admin.pages.teachers.index');
    }

    public function create(){


        return view('admin.pages.teachers.add');
    }


    public function store(){


        return view('admin.pages.teachers.add');
    }

}
