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


    public function create()
    {
        return view('user.don.create');
    }


    public function store(Request $request, $id)
    {
        $userId = Auth::id();
        $projectId = Project::findOrFail($id);
        dd($projectId);

        $validatedData = $request->validate([
            'amount' => 'required|integer',
        ]);

        $dons = new Dons;
        $dons->amount = $validatedData['amount'];
        $dons->user_id = $userId;
        $dons->project_id = $projectId;
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
