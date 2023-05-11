@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | home
@endsection

@section('content')
    
@include('includes.banner_slider')

  <!-- End Slider --> 
  @foreach ($categories as $category)
  @if($category->name == 'BOX DE FRUITS')
    <section class="bestsell-pro">
      <div class="container">
        <div class="block-title">
          <h2>{{ $category->name }}</h2>
        </div>
    
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info">
                        <a class="product-image" title="customize box" href="{{ route('product.custom.box') }}">
                          <img alt="emptybox" src="{{ asset('uploads/products/empty-box.jpg') }}">
                        </a>  
                        <div class="box-hover">
                          <ul class="add-to-links">
                            {{-- <li><a class="link-quickview" href="{{ route('frontend.quickview',$product->id) }}">Aperçu rapide</a></li>
                            <li>
                              <form action="{{ route('wishlists.store') }}" method="POST">
                                @csrf
                                  <input type="hidden" name="product_id" value="{{$product->id }}">
                                  <a class="link-wishlist" onclick="event.preventDefault();this.closest('form').submit();">liste de souhaits</a>
                              </form>
                            </li> --}}
                          </ul>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a title="Retis lapen casen" href="{{ route('product.custom.box') }}">Your personalized box</a></div> 
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price"> 
                                10.55 ৳      
                          </span></span></div>
                          </div> 
                          <div class="action">
                            <a class="button btn-cart" href="{{ route('product.custom.box') }}"><span>Customize your box</span></a> 
                          </div>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
                @if ($category->getProducts->where('status', 'show')->count() > 0)
                  {{-- @foreach ($category->getProducts as $product)
                    @if ($product->name == 'Votre box personnalisée')
                      @if ($product->status == 'show')
                        <div class="item">
                          <div class="item-inner">
                            <div class="item-img">
                              <div class="item-img-info">
                                <a class="product-image" title="{{$product->name }}" href="{{ route('product.custom.box') }}">
                                  <img alt="{{$product->name ?? '' }}" src="{{ asset('uploads/products') }}/{{$product->image ?? '' }}">
                                </a> 
                                @if($product->created_at > \Carbon\Carbon::now()->subDays(10))
                                <div class="new-label new-top-right">Nouveau</div>
                                @endif
                                <div class="box-hover">
                                  <ul class="add-to-links">
                                    <li><a class="link-quickview" href="{{ route('frontend.quickview',$product->id) }}">Aperçu rapide</a></li>
                                    <li>
                                      <form action="{{ route('wishlists.store') }}" method="POST">
                                        @csrf
                                          <input type="hidden" name="product_id" value="{{$product->id }}">
                                          <a class="link-wishlist" onclick="event.preventDefault();this.closest('form').submit();">liste de souhaits</a>
                                      </form>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"><a title="Retis lapen casen" href="{{ route('frontend.details',$product->slug) }}">{{$product->name ?? '' }}</a></div>
                                <div class="rating">
                                </div>
                                <div class="item-content">
                                  <div class="item-price">
                                    <div class="price-box"><span class="regular-price"><span class="price">
                                      @if($product->display_as == 'sale')
                                        <del>{{ round($product->price, 2) }}৳</del>
                                        <ins>{{ floor(round($product->price, 2) - ($product->discount/100) *round($product->price, 2)) }}৳</ins>
                                      @else 
                                        {{ number_format($product->price, 2)  }}৳
                                      @endif      
                                  </span></span></div>
                                  </div>
                                  <div class="action">
                                      <form action="{{ route('cart.store') }}" method="POST">
                                          @csrf  
                                          <input type="hidden" name="product_id" value="{{$product->id }}">
                                          @if($product->display_as == 'sale')
                                          <input type="hidden" name="amount" value="{{ floor(round($product->price, 2) - ($product->discount/100) *round($product->price, 2)) }}">
                                          @else 
                                          <input type="hidden" name="amount" value="{{round($product->price, 2) }}">
                                          @endif 
                                          <input type="hidden" name="qty" value="1">
                                          <button class="button btn-cart" type="submit"><span>AJOUTER AU PANIER</span></button>
                                      </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endif  
                    @endif
                  @endforeach --}}
                  @foreach ($category->getProducts->where('custom_box_status', '!=', 'yes') as $product)
                    {{-- @if ($product->name != 'Votre box personnalisée') --}}
                      @if ($product->status == 'show')
                        <div class="item">
                          <div class="item-inner">
                            <div class="item-img">
                              <div class="item-img-info">
                                <a class="product-image" title="{{$product->name }}" href="
                                  @if ($product->custom_box_status == 'yes')
                                  {{ route('product.custom.box') }}
                                  @else
                                  {{ route('frontend.details',$product->slug ?? '') }}
                                  @endif
                                  ">
                                  
                                  <img alt="{{$product->name ?? '' }}" src="{{ asset('uploads/products') }}/{{$product->image ?? '' }}">
                                </a>
                                @if($product->created_at > \Carbon\Carbon::now()->subDays(10))
                                <div class="new-label new-top-right">New</div>
                                @endif
                                <div class="box-hover">
                                  <ul class="add-to-links">
                                    <li><a class="link-quickview" href="{{ route('frontend.quickview',$product->id) }}">Quick overview</a></li>
                                    <li>
                                      <form action="{{ route('wishlists.store') }}" method="POST">
                                        @csrf
                                          <input type="hidden" name="product_id" value="{{$product->id }}">
                                          <a class="link-wishlist" onclick="event.preventDefault();this.closest('form').submit();">Wish list</a>
                                      </form>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"><a title="Retis lapen casen" href="{{ route('frontend.details',$product->slug) }}">{{$product->name ?? '' }}</a></div>
                                <div class="rating">
                                </div>
                                <div class="item-content">
                                  <div class="item-price">
                                    <div class="price-box"><span class="regular-price"><span class="price">
                                      @if($product->display_as == 'sale')
                                        <del>{{ round($product->price, 2) }}৳</del>
                                        <ins>{{ floor(round($product->price, 2) - ($product->discount/100) *round($product->price, 2)) }}৳</ins>
                                      @else 
                                        {{ number_format($product->price, 2)  }}৳
                                      @endif      
                                  </span></span></div>
                                  </div>
                                  <div class="action">
                                      <form action="{{ route('cart.store') }}" method="POST">
                                          @csrf  
                                          <input type="hidden" name="product_id" value="{{$product->id }}">
                                          @if($product->display_as == 'sale')
                                          <input type="hidden" name="amount" value="{{ floor(round($product->price, 2) - ($product->discount/100) *round($product->price, 2)) }}">
                                          @else 
                                          <input type="hidden" name="amount" value="{{round($product->price, 2) }}">
                                          @endif 
                                          <input type="hidden" name="qty" value="1">
                                          <button class="button btn-cart" type="submit"><span>ADD TO CART</span></button>
                                      </form>
                                      {{-- <button class="button btn-cart" type="submit"><span>Buy Now</span></button> --}}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endif  
                    {{-- @endif --}}
                  @endforeach
                @else
                  <p>No products found.</p>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
  @endforeach
  <!-- Latest Section-->
  @if ($tendanceDerniers->dernier == 'yes')
    <section class="bestsell-pro">
      <div class="container">
        <div class="block-title">
          <h2>LATEST PRODUCTS</h2>
        </div>
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                @include('includes.products')
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Modal -->
  <div class="modal fade" id="productColorModal"   tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content w-100">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Select Product Color</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <div id="color_image" class="text-center">

          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
  </div>

  @endif
  <!-- End Bestsell Slider --> 

  @foreach ($categories->where('show_in_home', 'show') as $category)
  @if($category->name != 'BOX DE FRUITS')
    <section class="bestsell-pro">
      <div class="container">
        <div class="block-title">
          <h2>{{ $category->name }}</h2>
        </div>
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                @forelse ($category->getProducts as $product)
                  @if ($product->status == 'show')
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info">
                            <a class="product-image" title="{{$product->name }}" href="{{ route('frontend.details',$product->slug ?? '') }}">
                              <img alt="{{$product->name ?? '' }}" src="{{ asset('uploads/products') }}/{{$product->image ?? '' }}">
                             
                            </a>
                            @if($product->created_at > \Carbon\Carbon::now()->subDays(10))
                            <div class="new-label new-top-right">New</div>
                            @endif
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="{{ route('frontend.quickview',$product->id) }}">Quick overview</a></li>
                                <li>

                                  @php
                                     $wishlist= App\Models\Wishlist::where('product_id',$product->product_id)->first();
                                  @endphp

                                  <form action="{{ route('wishlists.store') }}" method="POST">
                                    @csrf
                                      <input type="hidden" name="product_id" value="{{$product->id }}">
                                      <a class="link-wishlist" onclick="event.preventDefault();this.closest('form').submit();">wish list</a>
                                  </form>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a title="Retis lapen casen" href="{{ route('frontend.details',$product->slug) }}">{{$product->name ?? '' }}</a></div>
                            <div class="rating">
                            </div>
                            <div class="item-content">
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price"><span class="price">
                                  @if($product->display_as == 'sale')
                                    <del>{{ round($product->price, 2) }}৳</del>
                                    <ins>{{ floor(round($product->price, 2) - ($product->discount/100) *round($product->price, 2)) }}৳</ins>
                                  @else 
                                    {{ number_format($product->price, 2)  }}৳
                                  @endif      
                              </span></span></div>
                              </div>
                              <div class="action">
                                  <form action="{{ route('cart.store') }}" method="POST">
                                      @csrf  
                                      <input type="hidden" name="product_id" value="{{$product->id }}">
                                      @if($product->display_as == 'sale')
                                      <input type="hidden" name="amount" value="{{ floor(round($product->price, 2) - ($product->discount/100) *round($product->price, 2)) }}">
                                      @else 
                                      <input type="hidden" name="amount" value="{{round($product->price, 2) }}">
                                      @endif 
                                      <input type="hidden" name="qty" value="1">
                                      <button class="button btn-cart" type="submit"><span>ADD TO CART</span></button>
                                      <a href="{{ route('buynow.index', $product->id) }}" class="button btn-cart">Buy Now</a>
                                      {{-- <a href="" class="button btn-cart" data-toggle="modal" data-target="#xyz">Buy Now</a> --}}
                                  </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                @empty 
                  <p>No products found.</p>
                @endforelse

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
  @endforeach

  <!-- Trending Section-->
  @if ($tendanceDerniers->tendance == 'yes')
  <section class="bestsell-pro">
    <div class="container">
      <div class="block-title">
        <h2>TREND</h2>
      </div>
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div id="bestsell-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid block-content">
                @include('includes.products', array('latestProducts' => $trendingProducts))
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
  <!-- End Bestsell Slider --> 

  <!-- Featured Section-->
  {{--  <section class="bestsell-pro">
    <div class="container">
      <div class="block-title">
        <h2>Featured</h2>
      </div>
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div id="bestsell-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid block-content">
              @include('includes.products', array('latestProducts' => $featuredProducts))
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  --}}
  <!-- End Bestsell Slider --> 

  <!-- Products by category start-->
  

 

  <!-- Products by category start --> 

  <!-- On Sale Section-->
  {{-- <section class="bestsell-pro">
    <div class="container">
      <div class="block-title">
        <h2>On Sale</h2>
      </div>
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div id="bestsell-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid block-content">
              @include('includes.products', array('latestProducts' => $saleProducts))
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- End Bestsell Slider --> 

  <!-- Best Sellers Section-->
  {{--  <section class="bestsell-pro">
    <div class="container">
      <div class="block-title">
        <h2>Best Sellers</h2>
      </div>
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div id="bestsell-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid block-content">
               @include('includes.bestseller')
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  --}}
  <!-- End Bestsell Slider --> 
  <!-- Featured Product Section-->

  <!-- End Featured Product Section --> 

  <!-- Blog Section -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="blog-outer-container">
          <div class="blog-inner">
            <div class="row">
                @include('includes.blog')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

@endsection