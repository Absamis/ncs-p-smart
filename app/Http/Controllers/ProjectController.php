<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function createProject(CreateProjectRequest $request){
        Project::create($request->validated());
        return "Project created";
    }

    public function deleteProject(Project $project){
        $project->delete();
        return "Project deleted";
    }
}
