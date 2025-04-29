@extends('Admin_Pages.admin_layout')

@section('main_admin_content')

    <div style="background-color: black" class="header d-flex justify-content-between align-items-center">
        <h4 style="color: white">Manage Users</h4>
        <a href="#" class="btn btn-success">
        <i class="fas fa-user-plus"></i> Add User
        </a>
    </div>

    <div class="card">
        <div class="card-header bg-light">
          User List
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped align-middle">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Sample Users -->
                <tr>
                  <td>1</td>
                  <td>Ali Khan</td>
                  <td>ali@example.com</td>
                  <td>Admin</td>
                  <td><span class="badge bg-success status-badge">Active</span></td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Sara Yousuf</td>
                  <td>sara@example.com</td>
                  <td>Customer</td>
                  <td><span class="badge bg-warning text-dark status-badge">Pending</span></td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Usman Tariq</td>
                  <td>usman@example.com</td>
                  <td>Seller</td>
                  <td><span class="badge bg-secondary status-badge">Inactive</span></td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <!-- More users -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection