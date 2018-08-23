<?php

namespace App\Http\Controllers;




use DB;
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
//        dd($user);
//        projects INNER JOIN users ON users.id = projects.user_id

        $projects = DB::select('SELECT firstname,lastname,name,description,user_id,projects.created_at  from  users INNER JOIN projects ON users.id = projects.user_id');
//        $projects = Project::with('user')->orderBy('created_at', 'desc')->get();
//        dd($projects);
//        return view('home',compact('user','projects'));
        return view('home',['user'=>$user],['projects'=>$projects]);
    }
}

