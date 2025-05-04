<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function submit_review(Request $request, string $p_id){

        $rating = $request->input('rating');

        $order = Order::where('product_id', $p_id)->where('user_id', Auth::id())->where('order_status', 2)->get();

        if(!($order->isEmpty())){
            $review = Review::create([
                "review_text" => $request->comment,
                "product_id" => $p_id,
                "user_id" => Auth::id(),
                "rating" => $rating
            ]);
            return redirect()->back()->with('message', 'Review Added Successfully :)');
        }else{
            return redirect()->back()->with('message', 'Review not submitted. Buy product to review :)');
        }
        
        
    }

}
