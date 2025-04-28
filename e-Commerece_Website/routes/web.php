<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', function(){
    return view('Auth_Pages.Signup');
});

Route::post('add_user', [UserController::class, 'add_user'])->name('add_user');

Route::get('login', function(){
    return view('Auth_Pages.Login');
})->name('login');
Route::post('/login_user', [UserController::class, 'login_user'])->name('login_user');

Route::get('home', function(){
    return view('Main_Pages.index');
})->name('home');

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/products', function(){
    return view('Main_Pages.products');
});


 