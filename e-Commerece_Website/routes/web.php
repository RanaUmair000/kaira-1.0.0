<?php

use App\Http\Controllers\Products;
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

Route::get('/products', [Products::class, 'show_products']);

// Route::get('/admin', function(){
//     return view('Admin_Pages.admin_layout');
// });

Route::get('/pp', function(){
    return view('Admin_Pages.orders');
});


Route::get('admin/dashboard', function(){
    return view('Admin_Pages.dashboard');
})->middleware('admin');

Route::get('/admin/products_management', function(){
    return view('Admin_Pages.products');
})->middleware('admin');

Route::get('/admin/orders_management', function(){
    return view('Admin_Pages.orders');
})->middleware('admin');

Route::get('admin/users_management', function(){
    return view('Admin_Pages.users');
})->middleware('admin');

Route::get('admin/settings', function(){
    return view('Admin_Pages.settings');
})->middleware('admin');

 