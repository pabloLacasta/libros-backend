<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(User $users){
        $users = User::all();

        return $users;

    }

    public function show(User $user, $user_id){
        $user = User::find($user_id);
        $user_id = $user->id;

        return $user;
    }
}
