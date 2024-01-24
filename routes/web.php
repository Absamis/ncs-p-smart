<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
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

Route::get("teams", [UserController::class, "getTeamMembers"])->name("teams");

Route::get("projects", [ProjectController::class, "getProjects"])->name("projects");

Route::get("profile", [UserController::class, "userProfile"])->name("profile");
