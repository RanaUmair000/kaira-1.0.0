<div class="search-popup">
    <div class="search-popup-container">

        <form role="search" method="POST" class="form-group" action="{{route('search_product')}}">
            @csrf
            <input type="search" id="search-form" class="form-control border-0 border-bottom"
                placeholder="Type and press enter" name="search" />
            <button type="submit" class="search-submit border-0 position-absolute bg-white"
                style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
                    <use xlink:href="#search"></use>
                </svg></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>

        <ul class="cat-list">
            <li class="cat-list-item">
                <a style="color: black" title="Jackets">Jackets</a>
            </li>
            <li class="cat-list-item">
                <a style="color: black" title="T-shirts">T-shirts</a>
            </li>
            <li class="cat-list-item">
                <a style="color: black" title="Handbags">Handbags</a>
            </li>
            <li class="cat-list-item">
                <a style="color: black" title="Accessories">Accessories</a>
            </li>
            <li class="cat-list-item">
                <a style="color: black" title="Cosmetics">Cosmetics</a>
            </li>
            <li class="cat-list-item">
                <a style="color: black" title="Dresses">Dresses</a>
            </li>
            <li class="cat-list-item">
                <a style="color: black" title="Jumpsuits">Jumpsuits</a>
            </li>
        </ul>

    </div>
</div>