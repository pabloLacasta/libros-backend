<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function update(Request $request){


        return $request->user()->fill([
            'password' => Hash::make($request->input('newPassword'))
        ])->save();
    }
}
