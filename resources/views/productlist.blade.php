@extends('layout.app')

@section('content')
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Category</h4>
                            <ul>
                            @foreach ($cat_data as $category)
                                <li><input type="checkbox" class="category-checkbox" value="{{ $category }}">{{ $category }}</li>
                            @endforeach

                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="min_amount" value="10">
                                        <input type="text" id="max_amount" value="2000">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="sidebar__item">
                           <button class="btn btn-success" onclick="filterProducts()">Apply Filter</button>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                   
                  
                    <div class="row">
                    @foreach ($products['products'] as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 productitem" data-price="{{ $product['price'] }}" data-category="{{ $product['category'] }}">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ $product['thumbnail'] }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Product Name:- {{ $product['title'] }}</a></h6>
                                    <h6><a href="#">Product Category:- {{ $product['category'] }}</a></h6>
                                    <h6><a href="#">Product Brand:- {{ $product['brand'] }}</a></h6>
                                    <h5>Price : ${{ $product['price'] }}</h5>
                                    <a href="{{ route('products.productdetail', $product['id']) }}" class="btn btn-success">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                       <div class="product__pagination">
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    @endsection 

    <script>
    
    function filterProducts() {
        var selectedCategories = $('.category-checkbox:checked').map(function () {
            return $(this).val();
        }).get();

        var minPrice = parseFloat($('#min_amount').val()) || 0;
        var maxPrice = parseFloat($('#max_amount').val()) || Number.MAX_VALUE;

        $('.productitem').each(function () {
            var category = $(this).data('category');
            var price = parseFloat($(this).data('price'));

            var categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(category);
            var priceMatch = price >= minPrice && price <= maxPrice;

            $(this).toggle(categoryMatch && priceMatch);
        });
    }

    // Handle filter button click
    $('#category-filter, .range-slider').on('change', '.category-checkbox, #min_amount, #max_amount', function () {
        filterProducts();
    });


</script>