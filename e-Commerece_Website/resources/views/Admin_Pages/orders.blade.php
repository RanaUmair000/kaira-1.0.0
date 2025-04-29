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
                <!-- Sample Orders -->
                <tr>
                  <td>#1001</td>
                  <td>John Doe</td>
                  <td>2025-04-25</td>
                  <td><span class="badge bg-warning status-badge">Pending</span></td>
                  <td>$150.00</td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>#1002</td>
                  <td>Jane Smith</td>
                  <td>2025-04-24</td>
                  <td><span class="badge bg-success status-badge">Completed</span></td>
                  <td>$230.00</td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>#1003</td>
                  <td>Ali Raza</td>
                  <td>2025-04-23</td>
                  <td><span class="badge bg-secondary status-badge">Cancelled</span></td>
                  <td>$0.00</td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <!-- More rows can be added dynamically -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection