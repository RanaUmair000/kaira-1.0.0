<head>
    <title>Add Category</title>
    @include('Links.links')
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
  @include('Components.navbar')
  <div class="main-container">
  <div class="signup-container">
      <h3 class="text-center mb-4">Add Category</h3>
      <form action="{{route('category_added')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="cate_name" class="form-label umair">Category Name</label>
          <input type="text" class="form-control" name="cate_name" id="name" placeholder="Enter Category Name" required>
        </div>

        <div class="mb-3">
          <label for="category_image" class="form-label">Product Image</label>
          <input type="file" class="form-control" id="product_image" name="category_image" accept="image/*" required />
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
          <button type="submit" class="btn btn-black">Add Category</button>
        </div>
        
      </form>
    </div>
  </div>

  @include('Homepage_Sections.footer')