
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
    @if(session('message'))
      <div class="alert alert-secondary">
        {{ session('message') }}
      </div>
    @endif
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
          @can('isLogin')
            <a href="{{route('order_now', $product->id)}}"><button class="btn-buy">Order Now</button></a>
          @else
            <a href="/login"><button class="btn-buy">Order Now</button></a>
          @endcan
          

          @can('isLogin')
            <form action="{{route('added_to_cart', $product->id)}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{$product->id}}">
              <input type="hidden" name="product_name" value="{{$product->product_name}}">
              <input type="hidden" name="product_price" value="{{$product->product_price}}">
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
          @else
            <a href="/login"><button type="submit" class="btn-cart">Add to Cart</button></a>
          @endcan

          
        </div>
      </div>
    </div>

    

    <div class="container my-5">
      <h4 class="mb-4">Customer Reviews</h4>
      @if(!($reviews->isEmpty()))
        <div class="mb-4">
        @foreach($reviews as $review)
          <div class="border-bottom pb-3 mb-3">
            <div class="d-flex justify-content-between">
              <strong>{{$review->name}}</strong>
              <small class="text-muted">{{$review->review_date}}</small>
            </div>
            <div class="text-warning mb-1">
              @if($review->rating == 5)
                ★★★★★
              @elseif($review->rating == 4)
                ★★★★☆
              @elseif($review->rating == 3)
                ★★★☆☆
              @elseif($review->rating == 2)
                ★★☆☆☆
              @elseif($review->rating == 1)
                ★☆☆☆☆
              @endif
            </div>
            <p class="mb-0">{{$review->review_text}}</p>
          </div>
        @endforeach
      @else
          <h5>No Reviews Yet.</h5>
      @endif
      </div>
      @can('isLogin')
        <h5 class="mt-5">Add Your Review</h5>
        <form action="{{route('submit_review', $product->id)}}" method="POST">
          @csrf 
          <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select" id="rating" name="rating" required>
              <option value="">Select Rating</option>
              <option value="5">★★★★★</option>
              <option value="4">★★★★</option>
              <option value="3">★★★</option>
              <option value="2">★★</option>
              <option value="1">★</option>
            </select>
          </div>
      
          <div class="mb-3">
            <label for="comment" class="form-label">Your Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
          </div>
      
          <button type="submit" class="btn btn-dark">Submit Review</button>
        </form>
      @endcan
    </div>
    
  </div>

  @include('Homepage_Sections.footer')

</body>
