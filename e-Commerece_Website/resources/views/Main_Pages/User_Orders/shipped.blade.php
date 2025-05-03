@extends('Main_Pages.User_Orders.user_orders_layout')

@section('orders')
  <h3 class="main-title">Shipped Orders</h3>

    @if($shipped->isEmpty())
        @if(isset($message))
        <h4 class="alert">
            {{ $message }}
        </h4>
        @endif
    @else
        @foreach($shipped as $order)
            <div class="order-card">
                <div class="order-header">
                    @if($order->order_status == 3)
                    <span>Order # <i class="fas fa-receipt"></i> {{$order->order_id}} | </span> <strong style="font-size: 20px;" class="text-danger"><i class="fas fa-ban"></i> Cancelled</strong>
                    @else
                    <span>Order # <i class="fas fa-receipt"></i> {{$order->order_id}}</span>
                    @endif
                    @if($order->order_status == 0)
                    <span class="status text-warning"><i class="fas fa-hourglass-half"></i> To Ship</span>
                    @elseif($order->order_status == 1)
                    <span class="status text-success"><i class="fas fa-truck"></i> Shipped</span> 
                    @elseif($order->order_status == 2)
                    <span class="status text-primary"><i class="fas fa-check-circle"></i> Delivered</span>
                    @endif
                </div>

                <div class="order-product">
                    <img src="{{asset('/storage/'. $order->product_image)}}" alt="Product Image"/>
                    <div class="order-details">
                    <h6>{{$order->product_name}}</h6>
                    <p>Quantity: {{$order->order_quantity}}</p>
                    <p>Price: <strong>${{$order->order_price}}</strong></p>
                    </div>
                </div>

                <div class="order-actions">
                    <a href="{{route('order_delieverd', $order->order_id)}}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-box"></i> Add to Delieverd</a>
                    <a href="{{route('order_details', $order->order_id)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i> View Details</a>
                    <a href="{{route('product_detail', $order->id)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-redo"></i> Buy Again</a>
                    @if($order->order_status == 0)
                    <a href="{{route('order_cancelled', $order->order_id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-ban"></i> Cancel</a>
                    @elseif($order->order_status == 1 || $order->order_status == 2)
                    <a class="btn btn-outline-danger btn-sm disabled"><i class="fas fa-ban"></i> Cancel</a>
                    @endif
                </div>
            </div>
        @endforeach
    @endif
@endsection
