<?php

namespace App\Http\Controllers;

use App\Dons;
use App\Project;
use Auth;
use Illuminate\Http\Request;

class DonsController extends Controller
{

    public function index()
    {
        //
    }


    public function create($id)
    {
        $userId = Auth::id();
        $projects = Project::where('user_id', $userId)->find($id);
        dd($projects);
        return view('user.don.create',['projects' => $projects]);
    }


    public function store(Request $request, $id)
    {
        $userId = Auth::id();

        $validatedData = $request->validate([
            'amount' => 'string',
        ]);
        $dons = new Dons;
        $dons->amount = $validatedData['amount'];
        $dons->user_id = $userId;
        $dons->project_id = $id;
        $dons->save();

        return redirect()->route('user.project');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
