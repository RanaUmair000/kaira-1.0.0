<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Main_Category;

class MainCateController extends Controller
{
    public function add_category(){
        return view('Admin_Pages.add_category');
    }

    public function show_categories(){

        $cates = Main_Category::get();

        return view('Admin_Pages.categories', compact('cates'));
    }

    public function show_categories_for_product_form(){
        $cates = Main_Category::get();

        return view('Main_Pages.add_product', compact('cates'));
    }

    public function category_added(Request $request){
        $slug = Str::slug($request->cate_name);

        $credentials = $request->validate([
            'category_image' => 'required|mimes:jpg,png,jpeg,gif|max:3000',
        ]);

        $file = $request->file('category_image');
        $file_name = time() . '_' . $file->getClientOriginalName();

        $path = $file->storeAs('category', $file_name, 'public');

        $category = Main_Category::create([
            'category_name' => $request->cate_name,
            'slug' => $slug,
            'category_image' => $path, 
        ]);

        return redirect('/admin/categories');
    }

    public function update_category(string $id){

        $cate = Main_Category::find($id);

        return view('Admin_Pages.update_category', compact('cate'));
    }

    public function category_updated(Request $request){
        $slug = Str::slug($request->cate_name);
        $category = Main_Category::where('id', $request->id)->update([
            'category_name' => $request->cate_name,
            'slug', $slug
        ]);

        return redirect('/admin/categories');

    }   

}
