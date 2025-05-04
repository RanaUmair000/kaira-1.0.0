<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('./style.css') }}">
</head>
<body>

    @include('Components.navbar')

  <!-- Mobile Sidebar Toggle & Overlay -->
  <div class="d-md-none p-2 bg-dark text-white d-flex justify-content-between align-items-center">
    <button class="btn btn-sm btn-light" onclick="toggleSidebar()">
      <i class="fas fa-bars"></i>
    </button>
    <span>Admin Panel</span>
  </div>
  <div class="overlay" onclick="toggleSidebar()"></div>

  <div class="container-fluid admin_container">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 sidebar p-0" id="sidebar">
        <div class="text-white text-center py-3 d-none d-md-block fs-5">Admin Panel</div>
        <a href="/admin/dashboard" class="{{ Request::is('admin/dashboard') ? 'active' : 'k' }}"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>

        <a href="/admin/categories" class="{{ Request::is('admin/categories') ? 'active' : 'k' }}"><i class="fas fa-box me-2"></i> Categoreis</a>

        <a href="/admin/products_management" class="{{ Request::is('admin/products_management') ? 'active' : 'k' }}"><i class="fas fa-box me-2"></i> Products</a>

        <a href="/admin/settings" class="{{ Request::is('admin/settings') ? 'active' : 'k' }}"><i class="fas fa-cogs me-2"></i> Settings</a>

        <a href="/admin/users_management" class="{{ Request::is('admin/users_management') ? 'active' : 'k' }}"><i class="fas fa-users me-2"></i> Users</a>

        <a href="/admin/orders_management" class="{{ Request::is('admin/orders_management') ? 'active' : 'k' }}"><i class="fas fa-chart-line me-2"></i> Orders</a>
        @yield('admin_sidebar')
      </nav>

      <!-- Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
        @yield('main_admin_content')
      </main>
    </div>
  </div>

  @include('Links.js')

  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('active');
      document.querySelector('.overlay').classList.toggle('show');
    }
  </script>
</body>
</html>
