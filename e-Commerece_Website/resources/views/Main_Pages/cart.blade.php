<head>
  <title>Iconic Shopping Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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

<div class="f-container">
  <div class="main-cart-container">
    @can('isLogin')
        <div class="cart-header">
        <h3><i class="bi bi-cart-check-fill" style="color: black;"></i> Your Shopping Cart</h3>
        </div>
        
            <div class="row">
                <!-- Summary -->
                <div class="col-lg-4">
                    <div class="cart-summary">
                    <h4><i class="bi bi-receipt me-2"></i>Order Summary</h4>
                    <hr>
                    <p>Subtotal: <span class="float-end sub_total">${{$total}}</span></p>
                    <p>Shipping: <span class="float-end ship_fee">$5.00</span></p>
                    <hr>
                    <h5>Total: <span class="float-end text-primary total_price"></span></h5>
                    <button class="btn btn-success bg-black w-100 mt-3"><i class="bi bi-lock-fill me-2"></i>Secure Checkout</button>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    @foreach($iitems as $item)
                        <div class="col-lg-12">
                            <div class="cart-item d-flex align-items-center">
                            <img src="/storage/{{$item->product_image}}" alt="Product" class="me-3">
                            <div class="flex-grow-1 product-info">
                                <h5>{{$item->product_name}}</h5>
                                <small class="d-block mb-1"><i class="bi bi-headphones me-1"></i>Category</small>
                                <span class="price-tag text-primary">${{$item->product_price}}</span>
                                <div class="input-group quantity-input mt-2" style="max-width: 140px;">
                                <button class="btn btn-outline-secondary btn-icon">-</button>
                                <input style="padding-bottom: 0;" type="text" class="form-control text-center" value="1">
                                <button class="btn btn-outline-secondary btn-icon">+</i></button>
                                </div>
                            </div>
                            <buatton class="btn remove-btn ms-3"><a href="{{route('delete_cart_item', $item->product_id)}}"><i style="color: red" class="bi bi-trash3-fill"></i></a></button>
                            </div>
                        </div>
                    @endforeach
                </div>
                

                
            </div>
        
    @else  
        <h4>To see your cart, Please Login.</h4>
    @endcan
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const subTotalElement = document.querySelector('.sub_total');
        const subTotal = parseFloat(subTotalElement.textContent.replace(/[^0-9.]/g, ''));
        const shipFeeElement = document.querySelector('.ship_fee');
        const shipFee = parseFloat(shipFeeElement.textContent.replace(/[^0-9.]/g, ''));
        const totalElement = document.querySelector('.total_price');
        const total = parseFloat(totalElement.textContent.replace(/[^0-9.]/g, ''));

        final_total = subTotal + shipFee;
        totalElement.textContent = "$" + final_total;




    </script>


    @include('Homepage_Sections.footer')

</body>

