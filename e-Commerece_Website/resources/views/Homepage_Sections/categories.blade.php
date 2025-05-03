<section class="categories overflow-hidden">
    <div class="container">
        <div class="open-up" data-aos="zoom-out">
            <div class="row">
                @foreach($allCategories as $cate)
                    <div class="col-md-4">
                        <div class="cat-item image-zoom-effect">
                            <div class="image-holder">
                                <a href="{{route('category_products', $cate->slug)}}">
                                    <img src="{{asset('storage/' . $cate->category_image)}}" alt="categories" class="product-image img-fluid">
                                </a>
                            </div>
                            <div class="category-content">
                                <div class="product-button">
                                    <a href="index.html" class="btn btn-common text-uppercase">{{$cate->category_name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>