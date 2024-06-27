<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $projects = Project::all();
        return view('projects.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            // 'project_id' => 'required', 
            'project_name' => 'required |max:25',
            'assigned_to' => 'required |max:25',
            'client_name' => 'required |max:25',
            'status' => 'required |in:1,2,3,4',
            'start_date' => 'required|date',
            'end_date' => 'required |date|after_or_equal:start_date',
        ]);

        Project::create($validatedData);
        return redirect('/projects')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('projects.show', ['project' => Project::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        return view('projects.edit', ['project' => Project::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            // 'project_id' => 'required',
           'project_name' => 'required |max:25',
            'assigned_to' => 'required |max:25',
            'client_name' => 'required |max:25',
            'status' => 'required |in:1,2,3,4',
            'start_date' => 'required|date',
            'end_date' => 'required |date|after_or_equal:start_date',
        ]);

        Project::whereId($id)->update($validatedData);

        return redirect('/projects')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('/projects')->with('success', 'Project deleted successfully.');
    }
}
