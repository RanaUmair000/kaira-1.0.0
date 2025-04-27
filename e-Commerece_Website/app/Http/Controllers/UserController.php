<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add_user(Request $request){

        $credentials = $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required|confirmed"
        ]);

    }
}
