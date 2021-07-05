<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create(){

        return view('admin.pages.category.create');

    }

    public function store(Request $request){

        dd($request->all());

        $validate = $request->validate([
            'category' => ['required']
        ]);

        $created =  Category::create([

            'category' => $request->category,

        ]);
        if($created){

            return response()->json('Category Created');

        }else{
            return response()->json('Failed To Create Category');

        }





    }
}
