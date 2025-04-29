@extends('Admin_Pages.admin_layout')

@section('main_admin_content')

    <div class="header mt-3 rounded" style="background-color: black;">
        <h4 style="color: white;">Website Settings</h4>
    </div>

    <div class="settings-card">
        <form>
          <div class="mb-3">
            <label for="siteName" class="form-label">Site Name</label>
            <input type="text" class="form-control" id="siteName" placeholder="Enter site name" />
          </div>
  
          <div class="mb-3">
            <label for="adminEmail" class="form-label">Admin Email</label>
            <input type="email" class="form-control" id="adminEmail" placeholder="admin@example.com" />
          </div>
  
          <div class="mb-3">
            <label for="logo" class="form-label">Site Logo</label>
            <input type="file" class="form-control" id="logo" />
          </div>
  
          <div class="mb-3">
            <label for="changePassword" class="form-label">Change Admin Password</label>
            <input type="password" class="form-control" id="changePassword" placeholder="New password" />
          </div>
  
          <div class="mb-3">
            <label for="siteStatus" class="form-label">Site Status</label>
            <select class="form-select" id="siteStatus">
              <option selected>Active</option>
              <option>Maintenance</option>
              <option>Offline</option>
            </select>
          </div>
  
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Save Settings</button>
          </div>
        </form>
      </div>

@endsection