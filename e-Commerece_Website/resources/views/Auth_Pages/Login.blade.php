<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  @include('Links.links')
  <link rel="stylesheet" href="./style.css">
</head>
<body>

  <div class="container">
    @if(!Auth::check())
      <div class="login-container">
        <h3 class="text-center mb-4">Login</h3>
        <form action="{{route('login_user')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
          </div>

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>  
          @endif
          
          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-black">Login</button>
          </div>
          <div class="text-center">
            <p style="font-size: 16px;">Don't have an account? <a href="#">Sign up here</a></p>
          </div>
        </form>
      </div>
    @else
      <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center shadow p-4">
          <div class="card-body">
            <h5 class="card-title">You're Already Logged In {{Auth::user()->name}}</h5>
            <p class="card-text">If you want to switch accounts or end your session, please click below to log out.</p>
            <a href="/logout" class="btn btn-black"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
      
            <form id="logout-form" action="/logout" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </div>
      </div>
    @endif
  </div>

  <!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
