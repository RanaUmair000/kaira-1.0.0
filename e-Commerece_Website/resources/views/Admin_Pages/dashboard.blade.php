@extends('Admin_Pages.admin_layout')

@section('main_admin_content')

    <div class="header mt-3 rounded" style="background-color: black;">
        <h4 style="color: white">Admin Dashboard</h4>
    </div>

    <div class="row mt-4 g-3">
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-title">Total Products</div>
                <div class="card-value">120</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-title">Total Orders</div>
                <div class="card-value">45</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-title">Total Sales</div>
                <div class="card-value">$5,000</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-title">New Users</div>
                <div class="card-value">30</div>
            </div>
        </div>
    </div>

    <!-- Orders Table -->
    <div class="card mt-4">
        <div class="card-header"><b>Recent Orders</b></div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#12345</td>
                        <td>John Doe</td>
                        <td>Shipped</td>
                        <td>$200</td>
                    </tr>
                    <tr>
                        <td>#12346</td>
                        <td>Jane Smith</td>
                        <td>Pending</td>
                        <td>$120</td>
                    </tr>
                    <tr>
                        <td>#12347</td>
                        <td>Mark Lee</td>
                        <td>Delivered</td>
                        <td>$350</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection