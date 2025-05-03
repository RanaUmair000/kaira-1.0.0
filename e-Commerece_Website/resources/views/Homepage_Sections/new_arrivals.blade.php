<section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">Our New Arrivals</h4>
            <a href="/products" class="btn-link">View All Products</a>
        </div>
        <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
            @foreach($newArrivals as $prod)
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="{{route('product_detail', $prod->id)}}">
                                <img src="{{asset('/storage/' . $prod->product_image)}}" alt="categories"
                                    class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="{{route('product_detail', $prod->id)}}">{{$prod->name}}</a>
                                </h5>
                                @can('isLogin')
                                    <form action="{{route('added_to_cart', $prod->id)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$prod->id}}">
                                        <input type="hidden" name="product_name" value="{{$prod->product_name}}">
                                        <input type="hidden" name="product_price" value="{{$prod->product_price}}">
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <button type="submit" style="background: none; border: none; outline: none; width: 50%; text-align: left;"><a class="text-decoration-none"
                                            data-after="Add to cart"><span>${{$prod->product_price}}</span></a></button>
                                    </form>
                                @else
                                    <button type="submit" style="background: none; border: none; outline: none; width: 50%; text-align: left;"><a href="/login" class="text-decoration-none"
                                    data-after="Add to cart"><span>${{$prod->product_price}}</span></a></button>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
            </svg></div>
        <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
            </svg></div>
    </div>
</section>