<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('user')->orderBy('created_at','desc')->get();

        return view('user.project', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('user.projectcreate', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $userProjects = Auth::user();
        $userProjects->load('projects');
//        dd($userProjects);
        return view('user.myproject', ['userProjects' => $userProjects]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */

    public function editmyproject($id)
    {
        $userId = Auth::id();
        $projects = Project::where('user_id', $userId)->findOrFail($id);

        return view('user.updateMyProject', ['projects'=>$projects]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project::findOrFail($id);
        return view('user.editproject',(['projects'=>$projects]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

    }
}
