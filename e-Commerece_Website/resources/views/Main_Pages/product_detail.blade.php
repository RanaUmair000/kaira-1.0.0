
  <title>Daraz-style Product Page</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
      rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="{{ asset('./style.css') }}">

</head>
<body class="product_detail_main">

  @include('Components.navbar')

  <div class="pp_container">
    <div class="product-page">
      <div class="product-image">
        <img src="/storage/{{$product->product_image}}" alt="Product Image" />
      </div>
      <div class="product-details">
        <h1 class="product-title">{{$product->product_name}}</h1>
        
        <div class="rating">
          ★★★★☆ <span>(4.2 out of 5 | 1,024 ratings)</span>
        </div>

        <p class="product-price">${{$product->product_price}}</p>

        <p class="product-description">
            {{$product->product_description}}
        </p>

        <div class="buttons">
          <a href="{{route('order_now', $product->id)}}"><button class="btn-buy">Order Now</button></a>

          <form action="{{route('added_to_cart', $product->id)}}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="hidden" name="product_name" value="{{$product->product_name}}">
            <input type="hidden" name="product_price" value="{{$product->product_price}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <button type="submit" class="btn-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="reviews-section">
      <h2>Customer Reviews</h2>

      <div class="review">
        <div class="reviewer">Ali Raza</div>
        <div class="stars">★★★★★</div>
        <p>Excellent sound quality and battery life. Totally worth the price!</p>
      </div>

      <div class="review">
        <div class="reviewer">Sarah Khan</div>
        <div class="stars">★★★★☆</div>
        <p>Comfortable to wear. Noise cancellation is decent for the price range.</p>
      </div>

      <div class="review">
        <div class="reviewer">Usman Tariq</div>
        <div class="stars">★★★☆☆</div>
        <p>Good overall but the bass could be better.</p>
      </div>
    </div>
  </div>

  @include('Homepage_Sections.footer')

</body>
