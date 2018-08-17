<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {

        $user = Auth::user();
        $project = $user->all();
        return view('home',['user' => $user,'project'=>$project]);
    }
}

