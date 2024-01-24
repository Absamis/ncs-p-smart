<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnums;
use App\Http\Requests\CreateTaskRequest;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTaskActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    public function createTask(CreateTaskRequest $request, Project $project){
        $project->tasks()->create($request->validated());
        return "Task created";
    }

    public function deleteTask(Project $project, Task $task){
        $project->tasks()->find($task->id)->delete();
        return "Task deleted";
    }

    public function assignUserToTask(Request $request, Project $project, Task $task){
        $valid = $request->validate(["user_id" => ["required"]]);
        $user = User::findOrFail($valid["user_id"]);
        $project->tasks()->find($task->id)->update($valid);
        return "user successfully assigned to task";
    }

    public function removeUserFromTask(Request $request, Project $project, Task $task){
        // AI Model Required
        $valid = $request->validate(["user_id" => ["required"]]);
        $user = User::findOrFail($valid["user_id"]);
        $project->tasks()->find($task->id)->update(["user_id" => null]);
        return "User successfully removed from task";
    }

    public function changeTaskStatus(Request $request, Task $task){
        // AI Model required
        $valid = $request->validate(["status" => ["required"]]);
        $user = Auth::user();
        if($task->status == StatusEnums::$projectStatus["pending"]){
            if($valid['status'] == StatusEnums::$projectStatus["completed"]){
                $user->task_activities()->updateOrCreate(["task_id" => $task]);
                $valid['status'] = StatusEnums::$projectStatus["approval"];
            }
        }
        $user->tasks()->find($task->id)->update($valid);

    }

    public function reviewUserTask(Request $request, UserTaskActivity $activity){

    }
}
