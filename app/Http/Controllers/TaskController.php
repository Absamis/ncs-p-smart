<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function createTask(CreateTaskRequest $request, Project $project){
        $project->tasks()->create($request->validated());
        return "Task created";
    }

    public function deleteProject(Project $project, Task $task){
        $project->tasks()->find($task->id)->delete();
        return "Task deleted";
    }
}
