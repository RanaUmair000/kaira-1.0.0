<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!-- Bootstrap CSS CDN -->
  @include('links')
  <link rel="stylesheet" href="./style.css">
</head>
<body>

  <div class="container">
    <div class="login-container">
      <h3 class="text-center mb-4">Login</h3>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-black">Login</button>
        </div>
        <div class="text-center">
          <p style="font-size: 16px;">Don't have an account? <a href="#">Sign up here</a></p>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
