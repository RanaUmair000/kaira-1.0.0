<?php

namespace App\Http\Controllers;

use App\Models\Main_Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function returns(){
        $allCategories = Main_Category::limit(3)->get();

        $newArrivals = Product::latest()->limit(8)->get();

        $mayLike = Product::inRandomOrder()->limit(8)->get();

        return view('Main_Pages.index', compact('allCategories','newArrivals', 'mayLike'));
    }
}
