<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnums;
use App\Http\Requests\CreateLoginRequest;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //
    public function login(CreateLoginRequest $request){
        $valid = $request->validated();
        // $user = User::where("email", $valid["email"]);
        if(!Auth::attempt($valid)){
            return "Invalid login details";
        }
        return "Login successful";
    }

    public function getTeamMembers(User $user){
        // $data = User::where("role", StatusEnums::$userTeamRole)->get();
        // return $data;
        return view("team-member-details");
        return view("teams");
    }

    public function createTeamMember(CreateUserRequest $request){
        $valid = $request->validated();
        $valid["role"] = StatusEnums::$userTeamRole;
        $valid["password"] = Hash::make($valid["firstname"]);
        $valid["status"] = StatusEnums::$accountCode["unverified"];
        User::create($request->validated());
        return "User created";
    }

    public function deleteUser(User $user){
        $user->delete();
        return "User deleted";
    }

    public function userProfile(){
        return view("profile");
    }

    public function changePassword(Request $request){
        $valid = $request->validate([
            "current_password" => ["required"],
            "new_password" => ["required", Password::min(8)->letters()->numbers()->symbols(), "max:30"],
            "confirm_password" => ["required", "same:new_password"]
        ]);
        if(!Hash::check($valid["current_password"], auth()->user()->password))
            return "Current password entered is not correct";
        auth()->user()->password = Hash::make($valid["new_password"]);
        auth()->user()->save();
        return "Password successfully changed";
    }
}
