<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function add_order(Request $request){
        $order = Order::create([
            'order_name' => $request->name,
            'order_email' => $request->email,
            'order_phone' => $request->phone,
            'order_address' => $request->address,
            'order_city' => $request->city,
            'order_postal' => $request->postal,
            'product_id' => $request->product_id, 
            'user_id' => $request->user_id,
            'qunatity' => $request->quantity,
            'payment_method' => $request->payment
        ]);

        if($order){
            return redirect('/home');
        }else{
            return redirect('/cart');
        }
    }

    public function show_orders(){
        $orders = Order::get();
        return view("Admin_Pages.orders", compact('orders'));
    }

}
