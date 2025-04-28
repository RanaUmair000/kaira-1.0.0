<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function add_user(Request $request){

        $credentials = $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required|confirmed"
        ]);

        $hashed_password = Hash::make($request->password);

        if($credentials){
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $hashed_password
            ]);

            return redirect()->route('login');

        }else{
            return redirect('/signup');
        }

    }

    public function login_user(Request $request){
        $credentials = $request->validate([
            "email" => "required|string",
            "password" => "required"
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('home')->with("status", "User Logged in Successfully");
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


}
