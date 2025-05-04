<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
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
@include('Components.navbar')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="profile-card text-center">
        <h2 class="profile-title">My Profile</h2>
        <p class="profile-role">Welcome to e-Commerece_Website</p>
        @if(isset($canChangePassword) && !$canChangePassword)
            @if(isset($message))
            <h4 class="alert alert-warning">
                {{ $message }}
            </h4>
            @endif
        @endif
        <p>We sell quality products in less price and more reliability.</p>

        <div class="row text-start my-4">
          <div class="col-4 info-label">Name:</div>
          <div class="col-8 info-value">{{$user->name}}</div>
          <div class="col-4 info-label">Email:</div>
          <div class="col-8 info-value">{{$user->email}}</div>
          @if(!empty($user->location))
            <div class="col-4 info-label">Location:</div>
            <div class="col-8 info-value">{{$user->location}}</div>
          @endif
          @if(!empty($user->user_phone))
            <div class="col-4 info-label">Phone Number:</div>
            <div class="col-8 info-value">{{$user->user_phone}}</div>
          @endif
        </div>

        <div class="social-icons my-3">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

        <div class="mt-3">
          <a href="/edit_profile" class="btn btn-black me-2">Edit Profile</a>
          <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
            Change Password
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

@include('Homepage_Sections.footer')


<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          <form action="{{route('change_password')}}" method="POST">
            @csrf <!-- You can change to POST if needed -->
            <div class="mb-3">
              <label for="oldPassword" class="form-label">Enter Old Password</label>
              <input type="password" class="form-control" id="oldPassword" name="old_password" required>
            </div>
            
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-dark">Change Password</button>
            </div>
          </form>
        </div>
  
      </div>
    </div>
  </div>

  @include('Links.js')
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}


</body>
</html>


// id, product_id, comment, rating, user, comment_date, 