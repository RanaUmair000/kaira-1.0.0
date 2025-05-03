<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Orders - Daraz Style</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
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

<div class="my-order-container container-fluid mt-4">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-md-3 mb-4">
        <div class="sidebar">
            <h5>Account Menu</h5>
            <a href="/my_orders" class="{{ Request::is('my_orders') ? 'active' : 'k' }}"><i class="fas fa-box"></i> My Orders</a>
            <a href="/my_orders/toship" class="{{ Request::is('my_orders/toship') ? 'active' : 'k' }}"><i class="fas fa-truck"></i> To Ship</a>
            <a href="/my_orders/shipped" class="{{ Request::is('my_orders/shipped') ? 'active' : 'k' }}"><i class="fas fa-shipping-fast"></i> Shipped</a>
            <a href="/my_orders/delieverd" class="{{ Request::is('my_orders/delieverd') ? 'active' : 'k' }}"><i class="fas fa-box"></i> Delivered</a>
        </div>
    </div>

    <!-- Orders Section -->
    <div class="col-md-9 order__container">
        @yield('orders')
    </div>

</div>

    @include('Homepage_Sections.footer')

</body>
