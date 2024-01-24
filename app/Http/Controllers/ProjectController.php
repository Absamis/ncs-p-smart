<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnums;
use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function getProjects(Project $project = null){
        // if($project){
        //     $data = $project->with(["tasks" => function($query){
        //         $query->with("user");
        //     }])->first();
        // }else{
        //     $data = Project::all();
        // }
        return view("projects");
    }

    public function changeProjectStatus(Request $request, Project $project){
        $status = $request->status;
        if(!$status) return "Error";
        if($status == StatusEnums::$projectStatus["pending"]){
            if($status == StatusEnums::$projectStatus["completed"])
                return "Error";
            if($status == StatusEnums::$projectStatus["started"]){
                $date = strtotime("+$project->duration_in_weeks weeks");
                $project->start_date = now()->toDateTime();
                $project->end_date = date("Y-m-d", $date);
            }
        }
        $project->status = $status;
        $project->save();
    }
    public function createProject(CreateProjectRequest $request){
        Project::create($request->validated());
        return "Project created";
    }

    public function deleteProject(Project $project){
        $project->delete();
        return "Project deleted";
    }
}
