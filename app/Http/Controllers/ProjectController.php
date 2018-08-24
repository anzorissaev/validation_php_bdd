<?php

namespace App\Http\Controllers;

use App\Project;
use Auth;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


    public function index()
    {
        $projects = Project::with('user')->orderBy('created_at', 'desc')->get();
//        dd($projects);
        return view('user.project', ['projects' => $projects]);
    }


    public function create()
    {
        $user = Auth::user();
        return view('user.projectcreate', ['user' => $user]);
    }


    public function show()
    {

        $userProjects = Auth::user();
        $userProjects->load('projects');
//        dd($userProjects);
        return view('user.myproject', ['userProjects' => $userProjects]);
    }


    public function edit($id)
    {
        $projects = Project::findOrFail($id);
        return view('user.editproject', ['projects' => $projects]);
    }


    public function store(Request $request)
    {
        $userId = Auth::id();

        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'description' => 'required|string|min:2|max:500',
        ]);

        $project = new Project;
        $project->name = $validatedData['name'];
        $project->description = $validatedData['description'];
        $project->user_id = $userId;
        $project->save();


        return redirect('project');


    }


    public function update(Request $request, $idProject)
    {

        $userId = Auth::id();
        $project = Project::where('user_id', $userId)->findOrFail($idProject);

        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->save();

        return view('home');
    }


    public function destroy($id)
    {
        DB::delete("DELETE FROM projects WHERE id = '$id'");

        return redirect('/');
    }


    public function editmyproject($id)
    {
        $userId = Auth::id();
        $projects = Project::where('user_id', $userId)->findOrFail($id);

        return view('user.updateMyProject', ['projects' => $projects]);
    }
}
