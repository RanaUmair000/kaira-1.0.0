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

    public function user_profile(){

        $user = User::find(Auth::id());

        return view('Main_Pages.profile', compact('user'));
    }

    public function edit_profile(){
        $user = User::find(Auth::id());

        return view("Main_Pages.edit_profile", compact('user'));
    }

    public function update_profile(Request $request){
        $user = User::where('id', Auth::id())->update([
            "name" => $request->name,
            "email" => $request->email,
            "location" => $request->location,
            "user_phone" => $request->phone
        ]);

        return redirect('/user_profile');
    }

    public function check_pass_to_change_pass(Request $request){

        $canChangePassword = false;
        if(Hash::check($request->old_password, Auth::user()->password)){
            $canChangePassword = true;
            return view('Main_Pages.change_pass', compact('canChangePassword'));
        }else{
            $user = User::find(Auth::id());
            return view('Main_Pages.profile', compact('canChangePassword','user'))->with('message', 'Wrong Password');
        }

    }

    public function password_changed(Request $request){

        $new_password = $request->change_password;
        $hashed_password = Hash::make($new_password);
        $user = User::where('id', Auth::id())->update([
            "password" => $hashed_password
        ]);

        return redirect('/user_profile');

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

    public function update_users_for_admin(string $id){

        $user = User::find($id);
        return view('Admin_Pages.update_user', compact('user'));

    }

    public function user_updated(Request $request){
        $user = User::where('id', $request->user_id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        if($user){
            return redirect('/admin/users_management');
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
