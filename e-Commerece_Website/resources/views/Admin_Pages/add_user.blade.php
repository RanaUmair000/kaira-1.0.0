<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <!-- Bootstrap CSS CDN -->
    @include('Links.links')
    <link href="{{ asset('./style.css') }}" rel="stylesheet">
    
  </head>
  
  <div class="main-container">
  <div class="signup-container">
      <h3 class="text-center mb-4">Add a User</h3>
      <form action="{{route('user_added')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label umair">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" name="password_confirmation" required>
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
          <button type="submit" class="btn btn-black">Add User</button>
        </div>
        
      </form>
    </div>
  </div>