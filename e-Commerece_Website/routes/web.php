<?php

use App\Http\Controllers\MainCateController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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

Route::get('/products/{category}', [Products::class, 'show_products_category']);
Route::get('/products', [Products::class, 'show_products']);


Route::get('/admin', function(){
    return redirect('/admin/dashboard');
});

Route::get('/pp', function(){
    return view('Admin_Pages.orders');
});


Route::get('admin/dashboard', function(){
    return view('Admin_Pages.dashboard');
})->middleware('admin');

Route::get('/admin/products_management', [Products::class, 'show_products_for_admin'])->middleware('admin');

Route::get('/admin/add_products', [MainCateController::class, 'show_categories_for_product_form'])->middleware('admin');

Route::post('/admin/product_added', [Products::class, 'add_products'])->middleware('admin')->name('product_added');

Route::get('/admin/delete_product/{id}', [Products::class, 'delete_product'])->middleware('admin')->name('delete_product');

Route::get('/admin/orders_management', [OrderController::class, 'show_orders'])->middleware('admin');

Route::get('admin/users_management', [UserController::class, 'show_users_for_admin'])->middleware('admin');

Route::get('admin/add_user', function(){
    return view('Admin_Pages.add_user');
})->middleware('admin');

Route::post('admin/user_added', [UserController::class, 'add_user_for_admin'])->name('user_added')->middleware('admin');

Route::get('admin/update_user/{id}', [UserController::class, 'update_users_for_admin'])->middleware('admin')->name('update_user_for_admin');

Route::post('admin/user_updated', [UserController::class, 'user_updated'])->name('user_updated')->middleware(middleware:'admin');

Route::get('admin/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user')->middleware('admin');


Route::get('admin/add_category', [MainCateController::class, 'add_category'])->middleware('admin');

Route::get('admin/categories', [MainCateController::class, 'show_categories'])->middleware('admin');

Route::post('/category_added', [MainCateController::class, 'category_added'])->middleware('admin')->name('category_added');

Route::get('/admin/update_category/{id}', [MainCateController::class, 'update_category'])->name('update_category');

Route::post('/category_updated', [MainCateController::class, 'category_updated'])->middleware('admin')->name('category_updated');

Route::get('/product_detail/{id}', [Products::class, 'show_product_detail'])->name('product_detail');

Route::get('admin/settings', function(){
    return view('Admin_Pages.settings');
})->middleware('admin');

Route::get('/product_detail/{id}/order_now', [Products::class, 'order_product'])->name('order_now');
Route::post('/product_detail/ordered', [OrderController::class, 'add_order'])->name('ordered');

Route::get('/cart', [CartController::class, 'show_cart_items']);

Route::POST('/product_detail/{id}/added_to_cart', [CartController::class, 'add_to_cart'])->name('added_to_cart')->middleware('can:isLogin'); 

Route::get('/cart/{id}', [CartController::class, 'remove_cart_item'])->name('delete_cart_item')->middleware('can:isLogin');
