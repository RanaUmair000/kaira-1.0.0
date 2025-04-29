<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Products extends Controller
{
    public function show_products(){
        $products = Product::Paginate(1, ['*']);
        return view('Main_Pages.products', compact("products"));
    }
}
