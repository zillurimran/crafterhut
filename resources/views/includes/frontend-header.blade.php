<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons Icon -->

    <link rel="icon" href="{{ asset('uploads/generalSettings') }}/{{ generalsettings()->favicon }}"
        type="image/x-icon" />
    <title>@yield('title')</title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.mobile-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/plugins/simplebar/css/simplebar.min.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('frontend_assets/assets/plugins/stepper/css/bs-stepper.min.css') }}"> --}}
    @yield('css')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}"> --}}
    @include('includes.css')
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    {{-- <script type="text/javascript">
  function googleTranslateElementInit() {
   @php
            setcookie('googtrans', '/en/fr');
    @endphp
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }
  </script>
  
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script>
  </head>
  
  <style>
  body > .skiptranslate {
      //display: none;
  }
  
  .goog-te-banner-frame.skiptranslate {
      display: none !important;
      } 
  body {
      top: 0px !important; 
      }
  
  @media print {
    #google_translate_element {display: none !important;}
  }


.goog-te-gadget{
    display: none !important;
  }


  </style> --}}

  <style>
      .d-none{
          display: none !important;
      }
  </style>
</head>

<body>

    <div id="page">
        {{-- <div id="google_translate_element"></div> --}}

        <!-- Header -->
        @if (generalsettings()->header_background)
        <header style="background: url({{ asset('uploads/generalSettings') }}/{{ generalsettings()->header_background }}) repeat top left">
        @else
        <header style="background: url({{ asset('uploads/generalSettings/default.webp') }}) repeat top left"> 
        @endif
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Header Language -->
                            <div class="col-xs-12 col-sm-6">
                                <!-- End Header Language -->
                                <!-- Header Currency -->
                                <!-- End Header Currency -->
                            </div>
                            <div class="col-xs-6 hidden-xs">
                                <!-- Header Top Links -->
                                <div class="toplinks">
                                    <div class="links">

                                        @auth
                                            @if (Auth::user()->role == 'admin')
                                                <div class="myaccount">
                                                    <a href="{{ route('login') }}"><span class="hidden-xs">My account</span></a>
                                                </div>
                                            @else
                                                <div class="myaccount">
                                                    <a href="{{ route('frontend.userDashboard') }}"><span class="hidden-xs">My account</span></a>
                                                </div>
                                            @endif
                                        @endauth

                                        <div class="check">
                                            <a href="{{ route('contact.us') }}">
                                                <span class="hidden-xs">Contact us</span>
                                            </a>
                                        </div>

                                        <div class="check">
                                            <a href="{{ route('frontend.faq') }}">
                                                <span class="hidden-xs">FAQ</span>
                                            </a>
                                        </div>


                                        <div class="check"><a href="{{ route('checkout.index') }}"><span
                                                    class="hidden-xs">Payment</span></a></div>
                                        <div class="demo"><a href="{{ route('frontend.blogList') }}"><span
                                                    class="hidden-xs">Blog</span></a></div>

                                        @guest
                                            <div class="login"><a href="{{ route('login') }}"><span
                                                        class="hidden-xs">Login</span></a></div>
                                        @endguest

                                        @auth
                                            <div class="login">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              this.closest('form').submit();">
                                                        <span class="hidden-xs">Log Out</span>
                                                    </a>
                                                </form>
                                            </div>
                                        @endauth

                                    </div>
                                </div>
                                <!-- End Header Top Links -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-block">
                            <!-- Logo -->
                            <div class="logo"><a title="ZeFruit" href="{{ url('/') }}">
                                <img alt="Zefruit Logo" width="auto" height="60"
                                    src="{{ asset('uploads/generalSettings') }}/{{ generalsettings()->logo }}">
                            </a>
                        </div>
                            <!-- End Logo -->
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                            <div class="search-box">
                                <form action="{{ route('frontend.search') }}" method="GET" id="search_mini_form"
                                    name="Categories">
                                    <input type="text" placeholder="Search..." maxlength="70" name="q" id="search">
                                    <button type="submit" class="search-btn-bg"><span
                                            class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 mgk-top-cart">

                            <a style="border-left:1px rgba(255,255,255,0.5) solid"
                                href="{{ route('frontend.wishList') }}" class="top-link-wishlist hidden-xs"><i
                                    class="fa fa-heart"></i>
                            </a>
                            <div class="top-cart-contain pull-right">
                                <!-- Top Cart -->
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                        <a href="{{ route('cart.index') }}">
                                            <span class="cart_count">{{ cartCount() }}</span>
                                            <span class="cart-title hidden-xs hidden-sm">MY CART /</span>
                                            <span class="price hidden-xs"> {{ cartTotal() }}৳</span>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="top-cart-content">
                                            <button class="cart-close_btn"><i class="fa fa-times"
                                                    aria-hidden="true"></i></button>
                                            <ul class="mini-products-list" id="cart-sidebar">
                                                {{-- <li class="item">
                        <div class="item-inner"><a class="product-image" title="Retis lapen casen" href="{{ route('cart.index') }}"><img alt="Retis lapen casen" src="products-images/product4.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="fa fa-pencil"></i><span class="hidden">Edit item</span></a></div>
                            <strong>1</strong> x <span class="price">$310.99</span>
                            <p class="product-name"><a href="{{ route('cart.index') }}">Retis lapen casen</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item">
                        <div class="item-inner"><a class="product-image" title="Retis lapen casen" href="{{ route('cart.index') }}"><img alt="Retis lapen casen" src="products-images/product3.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="fa fa-pencil"></i><span class="hidden">Edit item</span></a></div>
                            <strong>1</strong> x <span class="price">$80.00</span>
                            <p class="product-name"><a href="{{ route('cart.index') }}">Retis lapen casen</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item">
                        <div class="item-inner"><a class="product-image" title="Retis lapen casen" href="{{ route('cart.index') }}"><img alt="Retis lapen casen" src="products-images/product4.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="fa fa-pencil"></i><span class="hidden">Edit item</span></a></div>
                            <strong>1</strong> x <span class="price">$51.00</span>
                            <p class="product-name"><a href="{{ route('cart.index') }}">Retis lapen casen</a></p>
                          </div>
                        </div>
                      </li> --}}
                                                @include('includes.cart_items')
                                            </ul>
                                            @if (cartCount() > 0)
                                                <div class="actions">
                                                    <button class="btn-checkout" type="button"
                                                        onclick="location.href='{{ route('checkout.index') }}';"><i
                                                            class="fa fa-check"></i><span>Checkout</span></button>
                                                    <a href="{{ route('cart.index') }}" class="view-cart"><i
                                                            class="fa fa-shopping-cart"></i><span>View Cart</span></a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- End Top Cart -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Navigation -->
            <nav>
                <div class="container">
                    <div class="mm-toggle-wrap" style="top: -58px">
                        <div class="mm-toggle"><i class="fa fa-align-justify"></i><span
                                class="mm-label">Menu</span></div>
                    </div>
                    <div class="nav-inner">
                        <ul id="nav" class="hidden-xs">
                            {{-- <li class="level0 parent drop-menu" id="nav-home"><a href="{{ url('/') }}" class="level-top"><span>Home</span></a>
            </li> --}}
                            @foreach (categories() as $category)
                            @if ($category->name == 'BOX DE FRUITS')
                                <li class="mega-menu">
                                    <a class="level-top"
                                        href="{{ route('frontend.productsbycategory', $category->name) }}"><span>{{ $category->name }}</span></a>
                                    <div class="level0-wrapper dropdown-6col simple-bar">
                                        <div class="container">
                                            <div class="level0-wrapper2">
                                                <div class="nav-block nav-block-center">
                                                    <ul class="level0"> 
                                                            <li class="level3 parent item"> 
                                                                <ul class="level1"> 
                                                                    <li> 
                                                                        <a
                                                                            href="{{ route('product.custom.box') }}">
                                                                            <span>Your personalised box</span>
                                                                        </a> 
                                                                    </li>
                                                                    @foreach ($category->getProducts->where('custom_box_status', '!=', 'yes') as $product)
                                                                        <li> 
                                                                            <a
                                                                                href="{{ route('frontend.details', $product->slug) }}">
                                                                                <span>{{ $product->name }}</span>
                                                                            </a> 
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($category->name != 'BOX DE FRUITS')
                                <li class="mega-menu">
                                    <a class="level-top"
                                        href="{{ route('frontend.productsbycategory', $category->name) }}"><span>{{ $category->name }}</span></a>
                                    <div class="level0-wrapper dropdown-6col simple-bar">
                                        <div class="container">
                                            <div class="level0-wrapper2">
                                                <div class="nav-block nav-block-center">
                                                    <ul class="level0">
                                                        {{-- @if($category->getSubCategory->count() > 0)
                                                       
                                                        <li class="level3 parent item"> 
                                                            <ul class="level1"> 
                                                                @foreach ($category->getProducts as $product)
                                                                <li> 
                                                                    <a
                                                                        href="{{ route('frontend.details', $product->slug) }}">
                                                                        <span>{{ $product->name }}</span>
                                                                    </a> 
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </li> 
                                                        @endif --}}
                                                        @foreach ($category->getSubCategory as $subcat)
                                                            <li class="level3 parent item">
                                                                <a
                                                                    href="{{ route('frontend.productsbysubcategory', ['name' => $subcat->name, 'id' => $subcat->id]) }}">
                                                                    <span>{{ $subcat->name }}</span>
                                                                </a>
                                                                <ul class="level1">
                                                                    @php
                                                                        $productSubcategory = App\Models\ProductSubcategory::get();
                                                                    @endphp

                                                                    @foreach ($productSubcategory as $item)
                                                                        @if ($item->subCategory_id == $subcat->id)
                                                                            @if ($item->getProducts->status == 'show')
                                                                                <li>
                                                                                    <a
                                                                                        href="{{ route('frontend.details', $item->getProducts->slug) }}">
                                                                                        <span>
                                                                                            {{ $item->getProducts->name }}</span>
                                                                                    </a>
                                                                                </li>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                    {{-- @foreach ($subcat->getProducts as $product)
                                                                        <li>
                                                                            <a
                                                                                href="{{ route('frontend.details', $product->slug) }}">
                                                                                <span>{{ $product->name }}</span>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach --}}
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @endforeach
                            <li class="mega-menu">
                                <a class="level-top" href="{{ route('frontend.products') }}"><span>ALL THE PRODUCTS</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End nav -->
        </header>
        <!-- Slider -->

        {{-- @if (session('success'))
    <div>
         <strong style="color:green; text-align: center;">
              {{ session('success') }}
        </strong>
    </div>
  @endif --}}
