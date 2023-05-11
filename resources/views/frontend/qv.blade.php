
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicons Icon -->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<title>{{ config('app.name') }} | Quick Overview</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Style -->

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.mobile-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fancybox.css') }}">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body class="quick-view-page">
<div id="fancybox-overlay">
  <div id="fancybox-wrap">
    <div id="fancybox-outer">
      <div id="fancybox-content">
        <div class="product-view">
          <div class="product-essential">
       
              <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                <div class="product-image">
                  <div class="product-full"><img id="product-zoom" src="{{ asset('uploads/products') }}/{{ $product->image }}" data-zoom-image="{{ asset('uploads/products') }}/{{ $product->image }}" alt="product-image"/> </div>
                  <div class="more-views">
                    <div class="slider-items-products">
                      <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                        <div class="slider-items slider-width-col4 block-content">
                          @foreach ($product->getMultipleImages as $image)
                      <div class="more-views-items">
                        <a href="{{ route('frontend.details', $product->slug) }}" data-image="{{ asset('uploads/products') }}/{{ $image->multiple_image }}" data-zoom-image="{{ asset('uploads/products') }}/{{ $image->multiple_image }}">
                          <img id="product-zoom1" src="{{ asset('uploads/products') }}/{{ $image->multiple_image }}" alt="product-image"/>
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
              <div class="product-shop col-lg-7 col-sm-7 col-xs-12">
                <div class="product-name">
                  <h1>{{ ucfirst($product->name) }}</h1>
                </div>
                {{-- <div class="ratings">
                  <div class="rating-box">
                    <div class="rating width60"></div>
                  </div> --}}
                  {{-- <p class="rating-links"><a href="#">1 Review(s)</a><span class="separator">|</span> <a href="#">Add Your Review</a> </p> --}}
                {{-- </div> --}}
                <div class="price-block">
                  <div class="price-box">
                    @if($product->display_as == 'sale')
                    <p class="special-price"><span class="price-label">Special price</span> <span id="product-price-48" class="price"> {{ floor(round($product->price, 2) - ($product->discount/100) * round($product->price, 2)) }}৳</span></p>
                    <p class="old-price"><span class="price-label">Usual price:</span><span class="price">{{ round($product->price, 2) }}৳</span></p>
                    @else
                    <p class="special-price"><span class="price-label">Usual price:</span><span class="price">{{ round($product->price, 2) }}৳</span></p>
                    @endif
                    {{-- <p class="availability in-stock pull-right"><span>In Stock</span></p> --}}
                  </div>
                </div>
                <div class="short-description">
                  <h2>Quick overview</h2>
                  <p>{!! ucfirst($product->short_description) !!}</p>
                </div>
              
                @if($product->type == 'forsale')
                <form action="{{ route('cart.store') }}" method="post" id="product_addtocart_form">
                  @csrf
                <div class="add-to-box">
                  <div class="add-to-cart">
                    <div class="pull-left">
                      <div class="custom pull-left">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                        <input type="number"  class="input-number qty" title="Qty" value="1" maxlength="120000" id="qty" name="qty" min="1" max="{{ $product->qty }}" >
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                      </div>
                    </div>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    @if($product->display_as == 'sale')
                    <input type="hidden" name="amount" value="{{ floor(round($product->price, 2) - ($product->discount/100) * round($product->price, 2)) }}">
                    @else 
                    <input type="hidden" name="amount" value="{{ round($product->price, 2) }}">
                    @endif 
                    <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="submit">ADD TO CART</button>
                    <a href="{{ route('buynow.index', $product->id) }}" class="button btn-cart">Buy Now</a>
                  </form>
                  </div>
                  @else 
                  <a class="button btn-cart" title="Demander un devis" href="{{ route('rq', $product->id) }}">REQUEST A QUOTE</a>
                  <h3>{{ $product->type }}</h3>
                  @endif
                 
          
                  @if(session('success'))
                    <div style="text-align: center">
                        <p style="color:green">Product added to cart</p>
                    </div>
                  @endif
                </div>
              </div>
       
          </div>
        </div>
      </div>
      <a id="fancybox-close" href="{{ url('/') }}"></a> </div>
  </div>
</div>


<!-- JavaScript --> 
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script> 
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('frontend/js/jquery.mobile-menu.min.js') }}"></script> 
<script src="{{ asset('frontend/js/common.js') }}"></script> 
<script src="{{ asset('frontend/js/cloud-zoom.js') }}"></script>
</body>
</html>