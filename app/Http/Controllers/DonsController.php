<?php

namespace App\Http\Controllers;

use App\Dons;
use App\Project;
use Auth;
use DB;
use Illuminate\Http\Request;

class DonsController extends Controller
{

    public function index()
    {

    }


    public function create($id)
    {
        $projects = Project::find($id);
        return view('user.don.create',['projects' => $projects]);
    }


    public function store(Request $request, $id)
    {
        $userId = Auth::id();
//        dd($userId);

        $validatedData = $request->validate([
            'amount' => 'string',
        ]);
        $dons = new Dons;
        $dons->amount = $validatedData['amount'];
        $dons->user_id = $userId;
        $dons->project_id = $id;
//        dd($dons);
        $dons->save();

        return redirect()->route('user.project');
    }


    public function show()
    {
        $authuser = Auth::id();
        $user_dons = DB::select("SELECT amount,user_id,project_id From dons WHERE user_id = {$authuser}");
        return view('user.don.mesdons',['user_dons'=>$user_dons],[]);
    }

    public function edit($id)
    {
        //
    }

}
