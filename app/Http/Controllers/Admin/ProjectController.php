<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin', ['projects' => $projects]);
    }

    // Metodo Create
    public function create()
    {
        return view('create');
    }


    // Metodo Store
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',

        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Progetto creato con successo!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    // Metodo Edit
    public function edit(Project $project)
    {
        return view('edit', compact('project'));
    }


    // Metodo Update
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Progetto aggiornato con successo!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
