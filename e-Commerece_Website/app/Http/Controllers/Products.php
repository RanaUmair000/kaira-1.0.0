<?php

namespace App\Http\Controllers;

use App\Models\Main_Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Products extends Controller
{
    public function show_products_category(string $category){
        $category_id = Main_Category::where('slug', $category)->select('*')->first();

        if($category_id){
            $products = Product::where('product_category', $category_id->id)->paginate(12, ['*']);
            $category_set = $category_id->category_name;
            return view('Main_Pages.products', compact('products', 'category_set'));
        }
    }

    public function show_products(){
        $products = Product::paginate(12, ['*']);
        return view('Main_Pages.products', compact('products'));
    }

    public function show_products_for_admin(){
        $products = Product::Paginate(12, ['*']);
        return view('Admin_Pages.products', compact('products'));
    }

    public function delete_product(string $id){
        $product = Product::find($id);

        if ($product && $product->product_image && Storage::disk('public')->exists($product->product_image)) {
            Storage::disk('public')->delete($product->product_image);
        }
        $product->delete();
        return redirect('/admin/products_management');
    }

    public function show_product_detail(string $id){
        $product = Product::find($id);
        return view('Main_Pages.product_detail', compact('product'));
    }

    public function add_products(Request $request){
        $credentials = $request->validate([
            "product_image" => "required|mimes:jpg, png, jpeg, gif|max: 3000"
        ]);

        $status = $request->input('status');
        $category = $request->input('product_category');

        if($credentials){
            $file_name = $request->file('product_image')->getClientOriginalName();
            $path = $request->file('product_image')->storeAs('/products', $file_name, 'public');

            $product = Product::create([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_image' => $path,
                'stock' => $request->stock,
                'status' => $status,
                'product_category' => $category
            ]);

            redirect('/admin/products_management');

        }
    }

    public function order_product(string $id){
        $product = Product::find($id);
        return view('Main_Pages.order_now', compact('product'));
    }

}