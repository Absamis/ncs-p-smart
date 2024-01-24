<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/dashboard", [PageController::class, "dashboard"])->name("dashboard");

Route::get("teams/{team?}", [UserController::class, "getTeamMembers"])->name("teams");

Route::get("projects/{project?}", [ProjectController::class, "getProjects"])->name("projects");
Route::get("tasks/review", [TaskController::class, "taskReview"])->name("task-review");

Route::get("profile", [UserController::class, "userProfile"])->name("profile");
