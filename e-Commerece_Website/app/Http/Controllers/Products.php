<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Products extends Controller
{
    public function show_products(){
        $products = Product::Paginate(12, ['*']);
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

    public function add_products(Request $request){
        $credentials = $request->validate([
            "product_image" => "required|mimes:jpg, png, jpeg, gif|max: 3000"
        ]);

        $status = $request->input('status');

        if($credentials){
            $file_name = $request->file('product_image')->getClientOriginalName();
            $path = $request->file('product_image')->storeAs('/products', $file_name, 'public');

            $product = Product::create([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_image' => $path,
                'stock' => $request->stock,
                'status' => $status
            ]);

            return $product;

        }
    }
}

// Elevate your style with the Dark Florish Onepiece — a perfect blend of elegance and comfort. Crafted from soft, breathable fabric, this dress features a rich dark tone adorned with subtle floral patterns, offering a timeless and sophisticated look. Ideal for evening outings, casual gatherings, or sp


// Stay comfortable and stylish with our Baggy T-Shirt — the perfect blend of relaxed fit and modern streetwear. Made from soft, breathable cotton, this tee is designed for all-day comfort with a loose, oversized silhouette that suits every body type. Whether you're lounging at home or heading out, thi