<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Order Details Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
<body class="order_details_body">

    @include('Components.navbar')

  <div class="order-detail-container">
    <!-- Order Heading -->
    <h3 class="title">Order # {{$id}}</h3>
    <p class="subtitle">Track your order below. We're getting it to you fast!</p>
    <!-- Progress Bar -->
    <div class="progress-bar">
        @if($order->order_status == 0)
            <div class="progress-fill" style="width: 15%;"></div>
        @elseif($order->order_status == 1)
            <div class="progress-fill" style="width: 55%;"></div>
        @elseif($order->order_status == 2)
            <div class="progress-fill" style="width: 100%;"></div>
        @endif

    </div>
    <div class="status-steps">
      <span class="active">Ordered</span>
      <span class="active">Shipped</span>
      <span>Delivered</span>
    </div>

    <!-- Timeline -->
    <div class="timeline">
      <div class="timeline-step">
        <i class="bi bi-cart-check-fill"></i>
        <p>Ordered</p>
      </div>
      <div class="timeline-step">
        <i class="bi bi-truck"></i>
        <p>On the Way</p>
      </div>
      <div class="timeline-step">
        <i class="bi bi-house-door-fill"></i>
        <p>Delivered</p>
      </div>
    </div>

    <!-- Shipping Info -->
    <div class="section">
      <h4><i class="bi bi-geo-alt-fill"></i> Shipping Information</h4>
      <div class="info-box">
        <p><strong>Name:</strong> {{$order->order_name}}</p>
        <p><strong>Address:</strong> {{$order->order_address}}</p>
        <p><strong>Phone:</strong> {{$order->order_phone}}</p>
      </div>
    </div>

    <!-- Order Summary -->
    <div class="section">
      <h4><i class="bi bi-receipt-cutoff"></i> Order Summary</h4>
      <div class="info-box">
        <p><strong>Item:</strong> {{$order->product_name}}</p>
        <p><strong>Quantity:</strong> {{$order->qunatity}}</p>
        <p><strong>Payment Method:</strong> {{$order->payment_method}}</p>
        <p><strong>Total Invoice:</strong> <span style="color: #000; font-weight: bold;"> ${{$order->order_price}}</span></p>
      </div>
    </div>

    <!-- CTA Button -->
    <a href="#" class="btn-track"><i class="bi bi-truck"></i> Track Shipment</a>
  </div>

  @include('Homepage_Sections.footer')

  @include('Links.js')

</body>
</html>
