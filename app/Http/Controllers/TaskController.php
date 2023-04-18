<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectIdRequest;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProjectIdRequest $request)
    {
        $tasks = Task::all()->where('project_id', '=', $request->project);
        return view('tasks.all', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $fields = $request->validated();
        $fields += Task::uploadFile($request->file('project_file'));
        $task = Task::create($fields);
        return view('tasks.show', compact(['task']));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact(['task']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact(['task']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Task $task, UpdateTaskRequest $request)
    {
        $fields = $request->validated();
        if ($file = $request->file('project_file')) {
            $task->deleteFile();
            $fileName = 'file' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('files', $file, $fileName);
            $fields += ['project_file' => "storage/files/$fileName"];
        }
        $task->update($fields);
        return to_route('tasks.show', compact(['task']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $project_id = $task->project_id;
        $task->deleteFile();
        $task->delete();
        $tasks = Task::all()->where('project_id', '=', $project_id);
        return view('tasks.all', compact(['tasks']));
    }
}
