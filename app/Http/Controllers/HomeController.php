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
        $this->middleware(['auth','verified']);

       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
       // dd("home Page...");

        if(Auth::User()->user_type<5){
            return view('admin.admin');
        }
        return view('home.home');
    }
    public function login(){


        return view('auth.login')->with('success', trans('site.Les observations sont envoyées avec succès.'));
    }
}
