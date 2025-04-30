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
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td class="action-buttons">
                      <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                      <a href="{{route('delete_user', $user->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection