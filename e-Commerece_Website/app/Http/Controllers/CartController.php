<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_to_cart(Request $request){
        $item = Cart::where('product_id', $request->product_id)
            ->where('user_id', $request->user_id)
            ->first();

        if ($item) {
            $item->quantity += 1;
            $item->save();
        } else {
        Cart::create([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'product_price' => $request->product_price,
            'quantity' => 1
        ]);
    }


    }

    public function show_cart_items(){
        $iitems = Cart::where('user_id', Auth::id())
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->select('carts.*', 'products.*')
        ->get();

        $total = $iitems->sum('product_price');

        
        return view('Main_Pages.cart', compact('iitems', 'total'));
    }

    public function remove_cart_item(string $id){
        $item = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();
        
        if($item){
            $item->delete();
            return redirect('/cart');
        }else{
            return redirect('/cart');
        }
        

    }
}
