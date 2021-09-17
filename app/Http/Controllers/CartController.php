<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart(Request $request){

        $user_id = $request->user_id;
        $course_id = $request->course_id;

        $added = Cart::create([

            'user_id' => $request->user_id,
            'course_id' => $request->course_id

        ]);

        if($added){

            $cart = Cart::where('user_id',Auth::user()->id)->count();

            return back()->with('success',$cart);

        }else{

            return back()->with('Failed',"Something Went Wrong");

        }


    }
}
