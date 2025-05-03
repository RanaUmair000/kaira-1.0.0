<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checkout</title>
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

  <div class="order-now_container">
    <form action="{{route('ordered')}}" method="POST">
        @csrf
        <input type="hidden" value="{{$product->id}}" name="product_id">
        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">

        <div class="section">
          <h2>1. Order Summary</h2>
          <div class="summary-box d-flex align-items-center gap-3">
              <img id="productImage" src="/storage/{{$product->product_image}}" alt="Product"
                  class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
              <div class="flex-grow-1">
                  <p><strong>Product:</strong> <span id="productName">{{$product->product_name}}</span></p>
                  <div class="mb-2">
                      <label for="quantity" class="form-label"><strong>Quantity:</strong></label>
                      <input type="number" id="quantity" name="quantity" class="form-control d-inline-block w-auto ms-2"
                          value="1" min="1" required>
                      <input type="hidden" id="unitPrice" value="{{$product->product_price}}" name="order_price">
                  </div>
                  <div class="alert alert-secondary py-2 px-3" role="alert">
                      <strong>Subtotal:</strong> <span id="subtotalDisplay">Rs {{$product->product_price}}</span>
                  </div>
              </div>
          </div>
        </div>

      <!-- Customer Info -->
      <div class="section">
        <h2>2. Contact Information</h2>
        <div class="form-row">
          <div class="form-group">
            <label for="name">Full Name *</label>
            <input type="text" value="{{Auth::user()->name}}" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number *</label>
            <input type="tel" id="phone" name="phone" required>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email Address *</label>
          <input type="email" value="{{Auth::user()->email}}" id="email" name="email" required>
        </div>
      </div>

      <div class="section">
        <h2>3. Shipping Address</h2>
        <div class="form-group">
          <label for="address">Address *</label>
          <textarea id="address" name="address" rows="3" required></textarea>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="city">City *</label>
            <input type="text" id="city" name="city" required>
          </div>
          <div class="form-group">
            <label for="postal">Postal Code *</label>
            <input type="text" id="postal" name="postal" required>
          </div>
        </div>
      </div>

      

      <div class="section">
        <h2>4. Payment Method</h2>
        <div class="form-group">
          <select id="payment" name="payment" required>
            <option value="Cash on Delivery">Cash on Delivery</option>
            <option value="Credit/Debit Card">Credit/Debit Card</option>
            <option value="EasyPaisa / JazzCash">EasyPaisa / JazzCash</option>
          </select>
        </div>
      </div>

      <button type="submit" class="btn">Place Order</button>
    </form>
  </div>

    @include('Homepage_Sections.footer')

    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const quantityInput = document.getElementById('quantity');
          const unitPrice = parseFloat(document.getElementById('unitPrice').value);
          const subtotalDisplay = document.getElementById('subtotalDisplay');
          const orderPriceInput = document.getElementById('unitPrice'); // hidden input
    
          function updateSubtotal() {
              const qty = parseInt(quantityInput.value) || 1;
              const subtotal = qty * unitPrice;
              subtotalDisplay.textContent = `Rs ${subtotal.toFixed(2)}`;
              orderPriceInput.value = subtotal.toFixed(2); // update hidden input value
          }
    
          quantityInput.addEventListener('input', updateSubtotal);
          updateSubtotal(); // initialize on load
      });
    </script>

</body>
</html>
