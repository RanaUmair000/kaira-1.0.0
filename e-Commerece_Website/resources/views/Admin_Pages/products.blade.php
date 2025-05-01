@extends('Admin_Pages.admin_layout')

@section('main_admin_content')

    <div class="header mt-3 rounded" style="background-color: black;">
        <h4 style="color: white;">Manage Products</h4>
    </div>

    <a href="/admin/add_products" style="margin-top: 20px; margin-bottom: 20px;" class="btn btn-success btn-add">
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
                @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="/storage/{{$product->product_image}}" alt="Product Image"></td>
                    <td>{{$product->product_name}}</td>
                    <td>${{$product->product_price}}</td>
                    <td>{{$product->stock}}</td>
                    @if($product->status == 1)
                      <td><span class="badge bg-success">Active</span></td>
                    @elseif($product->status == 0)
                    <td><span class="badge bg-danger">Inactive</span></td>
                    @endif
                    <td class="action-buttons">
                      <a href="{{route('product_detail', $product->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                      <a href="{{route('delete_product', $product->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
              
            </table>
            <div class="products_pagination">{{$products->links()}}</div>
          </div>
        </div>
      </div>

@endsection