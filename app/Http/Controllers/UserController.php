<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(){

    }
    public function createUser(CreateUserRequest $request){
        User::create($request->validated());
        return "User created";
    }

    public function deleteUser(User $user){
        $user->delete();
        return "User deleted";
    }
}
