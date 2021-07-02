<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){



        return view('admin.pages.courses.index',['teachers',$teachers]);
    }

    public function create(){
        $teachers = User::where('role_id',3)->get();

        return view('admin.pages.courses.add');
    }


    public function store(Request $request){
        dd($request);
    }
}
