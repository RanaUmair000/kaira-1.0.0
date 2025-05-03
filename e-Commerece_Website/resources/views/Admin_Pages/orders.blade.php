@extends('Admin_Pages.admin_layout')

@section('main_admin_content')

    <div class="header mt-3 rounded" style="background-color: black;">
        <h4 style="color: white;">Manage Orders</h4>
    </div>

    <div class="card" style="margin-top: 20px;">
        <div class="card-header bg-light">
          Orders List
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-bordered align-middle">
              <thead class="table-dark">
                <tr>
                  <th>#Order ID</th>
                  <th>Customer</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($orders as $order)
                <tr>
                  <td>#{{$order->id}}</td>
                  <td>{{$order->order_name}}</td>
                  <td>{{$order->order_date}}</td>
                  @if($order->order_status == 0)
                    <td><span class="badge bg-warning status-badge">Pending</span></td>
                  @elseif($order->order_status == 1)
                    <td><span class="badge bg-success status-badge">Shipped</span></td>
                  @elseif($order->order_status == 2)
                    <td><span class="badge bg-primary status-badge">Delieverd</span></td>
                  @elseif($order->order_status == 3)
                    <td><span class="badge bg-danger status-badge">Cancelled</span></td>
                  @endif
                  <td>${{$order->order_price}}</td>
                  <td class="action-buttons">
                    <a href="{{route('order_details', $order->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="{{route('delete_order', $order->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    @if($order->order_status == 0)
                      <a href="{{route('shipped_order', $order->id)}}" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                    @endif
                    
                  </td>
                </tr>
              @endforeach
              </tbody>
              
            </table>
            <div class="products_pagination">{{$orders->links()}}</div>
          </div>
        </div>
      </div>

@endsection