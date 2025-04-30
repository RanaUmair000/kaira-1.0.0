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

    public function add_user_for_admin(Request $request){
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

            return redirect('/admin/users_management');

        }else{
            return redirect('/admin/add_user');
        }
    }

    public function show_users_for_admin(){
        $users = User::all();
        return view('Admin_Pages.users', compact('users'));
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

    public function delete_user(string $id){
        $user = User::find($id);
        $user->delete();

        return redirect('/admin/users_management');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


}
