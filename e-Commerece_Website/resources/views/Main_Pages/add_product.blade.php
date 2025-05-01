<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Product - Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('./style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">
</head>
<body>
    @include('Components.navbar')


  <div class="container">
    <div class="form-container">
      <h2 class="text-center">Add New Product</h2>
      <form action="{{route('product_added')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="product_name" class="form-label">Product Name</label>
          <input type="text" class="form-control" id="product_name" name="product_name" required />
        </div>

        <div class="mb-3">
          <label for="product_description" class="form-label">Product Description</label>
          <textarea class="form-control" id="product_description" name="product_description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
          <label for="product_price" class="form-label">Product Price</label>
          <input type="number" class="form-control" id="product_price" name="product_price" step="0.01" required />
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" id="status" name="product_category" required>
          @foreach($cates as $cate)
            <option value="{{$cate->id}}" selected>{{$cate->category_name}}</option>
          @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="product_image" class="form-label">Product Image</label>
          <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*" required />
        </div>

        <div class="mb-3">
          <label for="stock" class="form-label">Stock Quantity</label>
          <input type="number" class="form-control" id="stock" name="stock" required />
        </div>

        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" id="status" name="status" required>
            <option value="1" selected>Active</option>
            <option value="0">Inactive</option>
          </select>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary bg-black">Add Product</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
