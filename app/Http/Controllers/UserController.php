<?php

namespace App\Http\Controllers;


use App\User;
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
        $projects = DB::select('SELECT firstname,lastname,name,description,user_id,projects.created_at  from  users INNER JOIN projects ON users.id = projects.user_id');
        return view('home', ['user' => $user], ['projects' => $projects]);
    }

}

