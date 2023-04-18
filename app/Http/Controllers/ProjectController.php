<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::with('user:id,name')
            ->where('user_id', '=', auth()->id())->get();
        return view('projects.index', compact(['projects']));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact(['project']));
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Project::create(
            $request->validated()
        );
        return view('projects.show', compact(['project']));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact(['project']));
    }

    public function add(Project $project)
    {
        return view('tasks.create', compact(['project']));
    }

    public function update(Project $project, UpdateProjectRequest $request)
    {
        $project->update($request->validated());
        return to_route('projects.show', compact(['project']));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return to_route('projects.index');
    }
}
