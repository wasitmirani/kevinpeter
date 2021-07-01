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
        if(isset(Auth::user()->role_id)){
           $role = Auth::user()->role_id;
            switch ($role) {
                case '1':
                    return view('admin.pages.dashboard');

                    break;
                case '2':
                    return view('home');

                     break;
                case '3':
                     return view('home');

                     break;

                default:
                return view('home');
                    break;
            }else{
                return view('home');
            }


        }




    }
}
