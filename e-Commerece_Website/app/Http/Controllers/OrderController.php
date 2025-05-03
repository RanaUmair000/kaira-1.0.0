<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
            'payment_method' => $request->payment,
            'order_price' => $request->order_price
        ]);

        if($order){
            return redirect()->route('order_details', $order->id);
        }else{
            return redirect()->back();
        }
    }

    public function ship_order(string $id){
        $order = Order::find($id);

        $ship_order = Order::where('id', $id)->update([
            'order_status' => 1
        ]);

        return redirect()->back();

    }

    public function delete_order(string $id){
        $order = Order::find($id);
        
        $order->delete();

        return redirect()->back();
    }

    public function user_orders(){
        if(Auth::check()){
            $orders = Order::where('user_id', Auth::id())->join('products', 'orders.product_id', '=', 'products.id')->select('orders.id as order_id', 'orders.qunatity as order_quantity', 'orders.*', 'products.*' )->get();

            if($orders->isEmpty()){
                return view('Main_Pages.User_Orders.user_orders', compact('orders'))->with('message', 'No Orders Yet!');
            }

            return view('Main_Pages.User_Orders.user_orders', compact('orders'));
        }
        return redirect('/login');
        
    }

    public function cancel_order(string $id){
        $order = Order::find($id);

        if($order->order_status == 0){
            $update = Order::where('id', $id)->update([
                'order_status' => 3
            ]);
            return redirect('/my_orders');
        }

        return redirect('/my_orders');
    }

    public function to_ship_orders(){
        $to_ship = Order::where('user_id', Auth::id())->where('order_status','0')->join('products', 'orders.product_id', '=', 'products.id')->select('orders.id as order_id', 'orders.qunatity as order_quantity', 'orders.*', 'products.*' )->get();

        if($to_ship->isEmpty()){
            return view('Main_Pages.User_Orders.to_ship', compact('to_ship'))->with('message', 'No Orders to Ship');
        }

        return view('Main_Pages.User_Orders.to_ship', compact('to_ship'));
    }

    public function shipped_orders(){
        $shipped = Order::where('user_id', Auth::id())->where('order_status','1')->join('products', 'orders.product_id', '=', 'products.id')->select('orders.id as order_id', 'orders.qunatity as order_quantity', 'orders.*', 'products.*' )->get();

        if($shipped->isEmpty()){
            return view('Main_Pages.User_Orders.shipped', compact('shipped'))->with('message', 'No Orders Shipped :)');
        }

        return view('Main_Pages.User_Orders.shipped', compact('shipped'));
    }

    public function delieverd_orders(){
        $delieverd = Order::where('user_id', Auth::id())->where('order_status','2')->join('products', 'orders.product_id', '=', 'products.id')->select('orders.id as order_id', 'orders.qunatity as order_quantity', 'orders.*', 'products.*' )->get();

        if($delieverd->isEmpty()){
            return view('Main_Pages.User_Orders.delieverd', compact('delieverd'))->with('message', 'No Orders Delieverd :)');
        }

        return view('Main_Pages.User_Orders.delieverd', compact('delieverd'));
    }

    public function order_delieverd(string $id){
        $order = Order::find($id);

        if($order->order_status == 1){
            Order::where('id', $id)->update([
                'order_status' => 2
            ]);
        }

        return redirect('/my_orders');
    }

    public function show_orders(){
        $orders = Order::paginate(12, ['*']);
        return view("Admin_Pages.orders", compact('orders'));
    }

    public function order_details(string $id){

        $o = Order::findOrFail($id);

        $order = Order::join('products', 'orders.product_id', '=', 'products.id')->find($id);

        if(Gate::denies('view-order', $o)){
            abort(403, 'Unauthorized');
        }
        
        return view('Main_Pages.order_details', compact('order', 'id'));

        
    }

}
