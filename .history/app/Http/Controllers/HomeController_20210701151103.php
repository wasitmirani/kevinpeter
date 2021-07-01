<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       if(Auth::user()){

        if(Auth::user()->role_id == 1){
            return view('admin.pages.dashboard');

        }
        if(Auth::user()->role_id == 2){
            return view('home');

        }
        if(Auth::user()->role_id == 3){
            return view('home');

        }

       }


    }
}
