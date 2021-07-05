<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{


    public function index(){

        $categories = Category::all();
        return view('admin.pages.category.list',compact('categories'));

    }
    public function create(){

        return view('admin.pages.category.create');

    }

    public function store(Request $request){



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


    public function edit($id){

        $category = Category::where('id',$id)->first();

        return view('admin.pages.category.add',compact('category'));

    }
}
