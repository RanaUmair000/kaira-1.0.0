<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - E-Commerce Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
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
  <style>
    :root {
      --bs-primary: #000000; /* Override Bootstrap primary color with black */
    }
  </style>
</head>
<body>

    @include('Components.navbar')

  <!-- Hero Section -->
  <section class="bg-dark text-white text-center py-5">
    <div class="container">
      <h1 class="display-4 fw-bold">About Us</h1>
      <p class="lead">Empowering online shopping with trust, quality, and convenience</p>
    </div>
  </section>

  <!-- Main About Section -->
  <section class="container py-5">
    <div class="row text-center mb-5">
      <div class="col">
        <h2 class="fw-bold">Welcome to Our Marketplace</h2>
        <p class="text-muted">Founded by <strong>Muhammad Umair</strong>, our mission is simple — quality, affordability, and reliability in every order.</p>
      </div>
    </div>

    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="p-4 border rounded h-100 shadow-sm">
          <i class="fas fa-bullseye fa-2x text-black mb-3"></i>
          <h4>Our Mission</h4>
          <p>To make quality products accessible at affordable prices, with unbeatable customer service.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded h-100 shadow-sm">
          <i class="fas fa-eye fa-2x text-success mb-3"></i>
          <h4>Our Vision</h4>
          <p>To become a leading e-commerce brand built on innovation, satisfaction, and customer loyalty.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded h-100 shadow-sm">
          <i class="fas fa-heart fa-2x text-danger mb-3"></i>
          <h4>Our Values</h4>
          <p>Trust, honesty, efficiency, and a customer-first approach in everything we do.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="bg-light py-5">
    <div class="container">
      <div class="row text-center mb-4">
        <h2 class="fw-bold">Why Choose Us?</h2>
        <p class="text-muted">We go the extra mile to ensure a seamless and satisfying experience</p>
      </div>
      <div class="row g-4">
        <div class="col-md-3 text-center">
          <i class="fas fa-shipping-fast fa-2x text-info mb-2"></i>
          <h6>Fast Delivery</h6>
          <p>Quick and secure shipping, always on time.</p>
        </div>
        <div class="col-md-3 text-center">
          <i class="fas fa-lock fa-2x text-warning mb-2"></i>
          <h6>Secure Payments</h6>
          <p>We protect your data with top-tier encryption and systems.</p>
        </div>
        <div class="col-md-3 text-center">
          <i class="fas fa-headset fa-2x text-black mb-2"></i>
          <h6>24/7 Support</h6>
          <p>Dedicated customer service whenever you need it.</p>
        </div>
        <div class="col-md-3 text-center">
          <i class="fas fa-tags fa-2x text-success mb-2"></i>
          <h6>Best Prices</h6>
          <p>Affordable pricing without compromising on quality.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-black text-white py-5 text-center">
    <div class="container">
      <h4 class="mb-3">Ready to explore our products?</h4>
      <a href="/products" class="btn btn-light btn-lg">Visit Our Store</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-4 text-muted small">
    &copy; 2025 Muhammad Umair. All rights reserved.
  </footer>

  @include('Links.js')
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>
