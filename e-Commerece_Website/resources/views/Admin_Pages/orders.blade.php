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
                  <td><span class="badge bg-warning status-badge">Pending</span></td>
                  <td>${{$order->order_price}}</td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection