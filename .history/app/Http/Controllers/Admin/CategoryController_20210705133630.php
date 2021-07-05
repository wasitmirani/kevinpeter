<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){

        return view('admin.pages.category.create');

    }

    public function store(Request $request){

        $validate = $request->validate([
            'category' => ['required']
        ]);

        User::create([

            'category' => $request->category;

        ]);

    }
}
