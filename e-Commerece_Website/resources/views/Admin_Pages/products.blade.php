@extends('Admin_Pages.admin_layout')

@section('main_admin_content')

    <div class="header mt-3 rounded" style="background-color: black;">
        <h4 style="color: white;">Manage Products</h4>
    </div>

    <a href="#" style="margin-top: 20px; margin-bottom: 20px;" class="btn btn-success btn-add">
        <i class="fas fa-plus-circle"></i> Add Product
    </a>

    <div class="card product_manage_table">
        <div class="card-header bg-light">
          Product List
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped align-middle">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Sample Product Row -->
                <tr>
                  <td>1</td>
                  <td><img src="https://via.placeholder.com/50" alt="Product Image"></td>
                  <td>Baggy T-Shirt</td>
                  <td>$25.00</td>
                  <td>45</td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img src="https://via.placeholder.com/50" alt="Product Image"></td>
                  <td>Dark Florish Onepiece</td>
                  <td>$40.00</td>
                  <td>30</td>
                  <td><span class="badge bg-secondary">Inactive</span></td>
                  <td class="action-buttons">
                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <!-- Add more rows here dynamically -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection