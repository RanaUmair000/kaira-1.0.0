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

<body class="homepage">
    

    <div class="preloader text-white fs-6 text-uppercase overflow-hidden"></div>

    @include('Components.search_popup')

    @include('Components.cart_sidebar')

    @include('Components.navbar')

    @include('Homepage_Sections.hero'   )

    @include('Homepage_Sections.features')

    @include('Homepage_Sections.categories')

    @include('Homepage_Sections.new_arrivals')
    
    @include('Homepage_Sections.collections')

    @include('Homepage_Sections.best_selling')

    @include('Homepage_Sections.video')

    @include('Homepage_Sections.testimonial')
    
    @include('Homepage_Sections.related_products')

    @include('Homepage_Sections.blogs')

    @include('Homepage_Sections.brands')
    
    @include('Homepage_Sections.newsletter')

    @include('Homepage_Sections.instagram_follow')

    @include('Homepage_Sections.footer')


    @include('Links.js')

</body>

</html>