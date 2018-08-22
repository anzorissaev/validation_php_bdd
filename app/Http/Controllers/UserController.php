<?php

namespace App\Http\Controllers;




use App\Project;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {

        $user = Auth::user();
        $projects = Project::with('user')->orderBy('created_at', 'desc')->get();
        return view('home',compact('user','projects'));
    }
}

