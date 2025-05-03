<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Change Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
  rel="stylesheet">

<link rel="stylesheet" href="{{ asset('./style.css') }}">
</head>
<body>

    {{-- @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}

<div class="edit-container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow p-4">
        <h3 class="mb-4 text-center">Change Password</h3>
        @if($canChangePassword)
        <form method="POST" action="{{route('password_changed')}}">
            @csrf
          <div class="mb-3">
            <label for="fullName" class="form-label">New Password</label>
            <input type="password" class="form-control" name="change_password" id="fullName" required>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-black">Change Password</button>
          </div>
        </form>
        @else
        @php return abort(407, 'Forbidden') @endphp
        @endif
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
