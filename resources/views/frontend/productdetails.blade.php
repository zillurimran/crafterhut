@extends('layouts.frontend')
@section('js')
    <script>
      document.addEventListener("DOMContentLoaded", function(event) { // <-- add this wrapper
     var element = document.querySelectorAll('.element');

    if (element) {
    
      element.forEach(function(el, key){
        
         el.addEventListener('click', function () {
            console.log(key);
         
            el.classList.add("active");
            
             element.forEach(function(ell, els){
                 if(key !== els) {
                     ell.classList.remove('active');
                 }
                  console.log(els);
             });
         });
      });
    }
});

    </script>


@endsection
@section('css')
<style>
   .active{
    border: 1px solid rgb(0, 0, 0);
   }
   .hide-input{
    position: absolute;
    pointer-events: none;
    opacity: 0;
   }
   .hide-input ~ img{
        object-fit: cover;
        border: 1px solid transparent;
        cursor: pointer;
   }
   .hide-input:checked ~ img{
    border-color: #000000;
   }
</style>
@endsection
@section('title')
    {{ config('app.name') }} | {{ ucfirst($product->name) }}
@endsection

@section('content')
    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-main">
                        <div class="product-view">
                            <div class="product-essential">

                                <div class="product-img-box col-lg-3 col-sm-3 col-xs-12">
                                    @if ($product->created_at > \Carbon\Carbon::now()->subDays(10))
                                        <div class="new-label new-top-left"> New </div>
                                    @endif
                                    <div class="product-image">
                                        <div class="product-full"><img id="product-zoom"
                                                src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                data-zoom-image="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                alt="product-image" /> </div>
                                        <div class="more-views">
                                            <div class="slider-items-products">
                                                <div id="gallery_01"
                                                    class="product-flexslider hidden-buttons product-img-thumb">
                                                    <div class="slider-items slider-width-col4 block-content">
                                                        @foreach ($product->getMultipleImages as $image)
                                                            <div class="more-views-items">
                                                                <a href="{{ route('frontend.details', $product->slug) }}" class="multiple_images"
                                                                    data-image="{{ asset('uploads/products') }}/{{ $image->multiple_image }}"
                                                                    data-zoom-image="{{ asset('uploads/products') }}/{{ $image->multiple_image }}"><img
                                                                        id="product-zoom1" class="multi_image"
                                                                        src="{{ asset('uploads/products') }}/{{ $image->multiple_image }}"
                                                                        alt="product-image" />
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                                    <div class="product-next-prev">
                                        @if ($nextP)
                                            <a class="product-next"
                                                href="{{ route('frontend.details', $nextP->slug) }}"><span></span></a>
                                        @endif
                                        @if ($previousP)
                                            <a class="product-prev"
                                                href="{{ route('frontend.details', $previousP->slug) }}"><span></span></a>
                                        @endif
                                    </div>
                                    <div class="product-name">
                                        <h1>{{ ucfirst($product->name) }}</h1>
                                    </div>
                                    <div class="price-block">
                                        <div class="price-box">
                                            @if ($product->display_as == 'sale')
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span id="product-price-48" class="price">
                                                        {{ floor(round($product->price, 2) - ($product->discount / 100) * round($product->price, 2)) }}৳</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price:</span><span
                                                        class="price">{{ number_format($product->price, 2) }}৳</span>
                                                </p>
                                            @else
                                                <p class="special-price">
                                                    <span class="price-label">Regular Price:</span><span
                                                        class="price">{{ number_format($product->price, 2) }}৳</span>
                                                </p>
                                            @endif
                                            {{-- <p class="availability in-stock pull-right"><span>In Stock</span></p> --}}
                                        </div>
                                    </div>
                                    
                                    <div class="short-description">
                                        <h2>Quick view</h2>
                                        <p>{!! ucfirst($product->short_description) !!}</p>
                                    </div>

                                    <div class="short-description">
                                        <h2 style="margin-bottom: 10px;">Available Colors</h2>
                                        <div class="d-flex " style="column-gap:5px;">
                                            @if ($product->type != 'requestquote')
                                                    <form action="{{ route('cart.store') }}" method="post"
                                                        id="product_addtocart_form">
                                                        @csrf
                                                        @if($productColors->count() > 0)
                                                            @foreach ($productColors as $color )
                                                            <label>
                                                                <input type="radio" value="{{ $color->id }}" name="color" class="hide-input">
                                                                <img src="{{ asset('uploads/productColors') }}/{{ $color->product_color_image }}" alt="color" width="50" height="50">
                                                            </label> 
                                                            @endforeach
                                                        @else
                                                        <p>No color is available</p>
                                                        @endif
                                            {{-- <img class="element" id="d_product"  src="{{ asset('uploads/products') }}/{{ $product->image }}" width="50px" height="30px" alt=""> --}}
                                            {{-- @foreach ($productColors as $color )  
                                                <a href="" data-image="{{ asset('uploads/productColors') }}/{{ $color->product_color_image }}">
                                                    <img class="element product_colors"  src="{{ asset('uploads/productColors') }}/{{ $color->product_color_image }}" width="50px" height="30px" alt="" >
                                                </a>
                                            @endforeach --}}

                                        </div>
                                    </div>
                                    
                                   
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="pull-left">
                                                
                                                        <div class="custom pull-left">

                                                            <button
                                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;"
                                                                class="reduced items-count" type="button"><i
                                                                    class="fa fa-minus">&nbsp;</i></button>


                                                            <input type="number" class="input-number qty" title="Qty" value="1"
                                                                maxlength="12" id="qty" name="qty" max="{{ $product->qty }}" min="1">

                                                            <button
                                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty < {{ $product->qty }} ) result.value++;return false;"
                                                                class="increase items-count" type="button"><i
                                                                    class="fa fa-plus">&nbsp;</i></button>

                                                            {{-- <select name="qty" id="" required class="form-control">
                                                                    <option value="">Select Quantity</option>
                                                                    <option value="1000">1kg</option>
                                                                    <option value="500">750g</option>
                                                                    <option value="500">500g</option>
                                                                    <option value="250">250g</option>
                                                                </select> --}}

                                                        </div> 

                                            </div>
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            @if ($product->display_as == 'sale')
                                                <input type="hidden" name="amount"
                                                    value="{{ floor(round($product->price, 2) - ($product->discount / 100) * round($product->price, 2)) }}">
                                            @else
                                                <input type="hidden" name="amount"
                                                    value="{{ round($product->price, 2) }}">
                                            @endif

                                            <button class="button add-cart-btn btn-cart" title="Add to Cart" type="submit">ADD TO CART</button>
                                            <a href="{{ route('buynow.index', $product->id) }}" class="button btn-cart">Buy Now</a>
                                            </form>
                                            
                                        @else
                                            <a class="button btn-cart" title="Request a quote"
                                                href="{{ route('rq', $product->id) }}">REQUEST A QUOTE</a>
                                            @endif
                                        </div>
                                        <div class="email-addto-box">
                                            <ul class="add-to-links">
                                                <li>
                                                    <form id="wishlist_form" action="{{ route('wishlists.store') }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <button myForm="wishlist_form" type="submit"
                                                            class="link-wishlist"></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="stock d-none" style="display: flex; align-items: center;">
                                        {{-- <h5>In Stock : &nbsp </h5>
                          <b style="margin:0"> 
                            @if ($product->qty)
                              {{ $product->qty }} {{ $product->qty_in }}
                            @else 
                            Stock Out  
                            @endif
                          </b> --}}
                                    </div>
                                    <div class="social">
                                        <ul class="link">
                                            <li class="fb pull-left">
                                                <a href="#">{!! socialiconssettings()->fb !!}</a>
                                            </li>
                                            <li class="fb pull-left">
                                                <a href="#">{!! socialiconssettings()->instagram !!}</a>
                                            </li>
                                            <li class="fb pull-left">
                                                <a href="#">{!! socialiconssettings()->twitter !!}</a>
                                            </li>
                                            <li class="fb pull-left">
                                                <a href="#">{!! socialiconssettings()->youtube !!}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-xs-12 mt-md-3">
                                    <div class="delivery-details">
                                        <ul class="list-group ">
                                            <li class="list-group-item "   >
                                                <div style="display: flex; align-items: center; justify-content: space-between;">
                                                    <h5 style="color:#979797;" >Delivery</h5>  <a href=""><i style="font-size: 20px; color:#d1d1d1;" class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                </div>
                                                <div style="display: flex; align-items: center; justify-content: space-between;">
                                                    <div  style="display: flex; align-items: center; width:70%; ">
                                                    <i style="font-size: 20px; color:#d1d1d1; width:20%;" class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <p style="width:80%;">{{ ucwords($deliveryPolicy->delivery_areas) ?? " " }}</p>
                                                    </div>
                                                        {{-- <a href=" ">CHANGE</a> --}}
                                                </div>
                                            </li>
                                            <li class="list-group-item "   >
                                                <div style="display: flex; align-items: center; justify-content: space-between;">
                                      <div style="display: flex; align-items: center; width:70%; ">
                                                    <i style="font-size: 20px; color:#d1d1d1; width:20%;" class="fa fa-archive" aria-hidden="true"></i>
                                                <p style="width:80%;">Standard Delivery <br> <small style="color:#d1d1d1;">{{ ucwords($deliveryPolicy->delivery_time) ?? ''  }}</small></p>
                                                </div>
                                            </div>
                                                <div  style="display: flex; align-items: center; width:70%; ">
                                                    <i style="font-size: 20px; color:#d1d1d1; width:20%;" class="fa fa-money" aria-hidden="true"></i>
                                                        <p style="width:80%;">Cash on Delivery {{ ucwords($deliveryPolicy->delivery_type) ?? ''  }}</p>
                                                </div>
                                            </li>
                                            <li class="list-group-item "   >
                                                <div style="display: flex; align-items: center; justify-content: space-between;">
                                                    <h5 style="color:#979797;" >Service</h5>  <a href=""><i style="font-size: 20px; color:#d1d1d1;" class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                </div>
                                                <div style="display: flex; align-items: center; justify-content: space-between;">
                                                    <div  style="display: flex; align-items: center; width:70%; ">
                                                    <i style="font-size: 20px; color:#d1d1d1; width:50px;" class="fa fa-hand-o-right" aria-hidden="true"></i>
                                                    <p style="width:80%;">{{ ucwords($deliveryPolicy->return_time) ?? '' }} Returns <br> <small style="color:#d1d1d1;">Change of mind is not applicable</small></p>
                                          
                                                </div>
                                                
                                            </li>
                                            <li class="list-group-item"><div style="display: flex; align-items: center; justify-content: space-between;">
                                                <div  style="display: flex; align-items: center; width:70%; ">
                                              
                                                <p style="color:red;">Warranty {{ ucwords($deliveryPolicy->warranty) ?? '' }}</p>
                                      
                                            </div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->

    <!-- Related Products Slider -->
    <div class="container">
        <!-- Related Slider -->
        <div class="related-pro">
            <div class="slider-items-products">
                <div class="related-block">
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="home-block-inner">
                            <div class="block-title">
                                <h2>Products<br>
                                    <em>associates</em>
                                </h2>
                            </div>
                            {{-- <div class="pretext">Sem vel turpis, mi vivamus wisi, velit dolor nulla vehicula elit molestie imperdiet, quo ipsum vitae fusce consequat. Amet id posuere amet, vitae vestibulum elit est maecenas sapien ut. </div> --}}
                            <a href="{{ route('frontend.products') }}" class="view_more_bnt">See all</a>
                        </div>
                        <div class="slider-items slider-width-col4 products-grid block-content">

                            @include('includes.products', ['latestProducts' => $products])

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End related products Slider -->

    </div>
    <!-- Related Products Slider End -->

    <!-- Upsell Product Slider -->
    {{-- @foreach ($productColors as $color)
    <div class="modal fade" id="productColorModal-{{ $color->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $product->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <img src="{{ asset('uploads/productColors') }}/{{ $color->product_color_image }}" alt="img not found" height="400px" width="400px">
                </div>
                <div class="modal-footer">
                        <a href="{{ route('buynow.index', $color->id) }}" class="button btn-cart">Buy Now</a>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}
@endsection
