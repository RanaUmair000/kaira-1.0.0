<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kaira - Bootstrap 5 Fashion Store HTML CSS Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="ecommerce,fashion,store">
    <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    @include('Components.navbar')

    <h1 class="text-center" style="font-size: 54px;">All Products</h1>

    <div class="products_grid">
        @foreach($products as $product)        
            <div class="product-item image-zoom-effect link-effect">
                <div class="image-holder position-relative">
                    <a href="/home">
                        <img src="storage{{$product->product_image}}" alt="categories"
                            class="product-image img-fluid">
                    </a>
                    <a href="index.html" class="btn-icon btn-wishlist">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#heart"></use>
                        </svg>
                    </a>
                    <div class="product-content">
                        <h5 class="element-title text-uppercase fs-5 mt-3">
                            <a href="index.html">{{$product->product_name}}</a>
                        </h5>
                        <a href="#" class="text-decoration-none"
                            data-after="Add to cart"><span>{{$product->product_price}}</span></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="products_pagination">{{$products->links()}}</div>

    @include('Homepage_Sections.footer')

    @include('Links.js')

</body>
</html>