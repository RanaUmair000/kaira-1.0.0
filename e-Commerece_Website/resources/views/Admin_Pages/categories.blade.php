@extends('Admin_Pages.admin_layout')

@section('main_admin_content')

    <div style="background-color: black" class="header d-flex justify-content-between align-items-center">
        <h4 style="color: white">Manage Categories</h4>
        <a href="/admin/add_category" class="btn btn-success">
        <i class="fas fa-cart-plus"></i> Add Category
        </a>
    </div>

    <div class="card" style="margin-top: 20px;">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped align-middle">
              <thead class="table-dark">
                <tr>
                  <th>Category_Id</th>
                  <th>Category_Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cates as $cate)
                  <tr>
                    <td style="color: black !important;">{{$cate->id}}</td>
                    <td style="color: black !important;">{{$cate->category_name}}</td>
                    <td class="action-buttons">
                      <a href="{{route('update_category', $cate->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

                      <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection