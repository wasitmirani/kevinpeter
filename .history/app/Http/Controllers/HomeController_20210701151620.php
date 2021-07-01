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

        switch (Auth::user()->role_id) {
            case '1':
              if (Auth::user()->role_id) {
                return view('admin.pages.dashboard');
              }
              case '2':
                if (Auth::user()->role_id) {
                  return view('home');
                }
                case '3':
                  if (Auth::user()->role_id) {
                    return view('home');
                  }
            default:

            return view('home');

              break;
          }


       }


    }
}
