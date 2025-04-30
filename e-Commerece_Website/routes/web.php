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

Route::get('/admin/products_management', [Products::class, 'show_products_for_admin'])->middleware('admin');

Route::get('/admin/add_products', function(){action: 
    return view('Main_Pages.add_product');
})->middleware('admin');

Route::post('/admin/product_added', [Products::class, 'add_products'])->middleware('admin')->name('product_added');

Route::get('/admin/delete_product/{id}', [Products::class, 'delete_product'])->middleware('admin')->name('delete_product');

Route::get('/admin/orders_management', function(){
    return view('Admin_Pages.orders');
})->middleware('admin');

Route::get('admin/users_management', [UserController::class, 'show_users_for_admin'])->middleware('admin');

Route::get('admin/add_user', function(){
    return view('Admin_Pages.add_user');
});

Route::post('admin/user_added', [UserController::class, 'add_user_for_admin'])->name('user_added');

Route::get('admin/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');

Route::get('admin/settings', function(){
    return view('Admin_Pages.settings');
})->middleware('admin');

 