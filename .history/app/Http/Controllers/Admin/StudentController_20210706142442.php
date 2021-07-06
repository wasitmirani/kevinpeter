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
        $student = User::where([['role_id','=',2],['id','=',$id]])->latest()->get();
        return view('admin.pages.students.show',compact('student'));
}

public function edit($id){

    $student = User::where([
        ['id','=',$id],
        ['role_id','=','2']
    ])->first();

    return view('admin.pages.students.edit',compact('student'));



}


public function updateStudent(Request $request){

    $id = $request->id;
    $student = User::where('id', $id)->first();
    $student->name = $request->name;
    $student->email = $request->email;
    if( $student->save()){

        return response()->json('Student Record Updated Successfully');

    }else{
        return response()->json('Failed To Update Record');

    }


}
}
