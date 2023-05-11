{{-- <li class="item {{ (Route::is('cart.index')) ? 'col-lg-3 col-md-3' : 'col-lg-4 col-md-4' }} col-sm-4 col-xs-6">
  <div class="item-inner">
    <div class="item-img">
      <div class="item-img-info"><a class="product-image" title="Votre box personnalisée" href="{{ route('product.custom.box') }}"><img alt="Votre box personnalisée" src="{{ asset('uploads/products/empty-box.jpg') }}"></a> 
      </div>
    </div>
    <div class="item-info">
      <div class="info-inner">
        <div class="item-title"><a title="Retis lapen casen" href="{{ route('product.custom.box') }}">Your personalised box</a></div>
        <div class="rating">
        
        </div>
        <div class="item-content">
          <div class="item-price">
            <div class="price-box"><span class="regular-price"><span class="price">
              10.55 ৳
          </span></span></div>
          </div> 
          <div class="action">
            <a class="button btn-cart" href="{{ route('product.custom.box') }}"><span>Customise your box</span></a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</li> --}}
@forelse ($products->where('custom_box_status', '!=', 'yes') as $product)
<li class="item {{ (Route::is('cart.index')) ? 'col-lg-3 col-md-3' : 'col-lg-4 col-md-4' }} col-sm-4 col-xs-6">
    <div class="item-inner">
      <div class="item-img">
        <div class="item-img-info"><a class="product-image" title="{{ $product->name }}" href=" 
          {{ route('frontend.details', $product->slug ?? '') }} 
          "><img alt="{{ $product->name }}" src="{{ asset('uploads/products') }}/{{ $product->image }}"></a>
          @if($product->created_at > \Carbon\Carbon::now()->subDays(10))
          <div class="new-label new-top-right">New</div>
          @endif
          <div class="box-hover">
            <ul class="add-to-links">
              <li><a class="link-quickview" href="{{ route('frontend.quickview', $product->id) }}">Quick overview</a></li>
              <li>
                <form action="{{ route('wishlists.store') }}" method="POST">
                  @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <a class="link-wishlist" onclick="event.preventDefault();this.closest('form').submit();">wish list</a>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item-info">
        <div class="info-inner">
          <div class="item-title"><a title="Retis lapen casen" href="{{ route('frontend.details', $product->slug) }}">{{ $product->name }}</a></div>
          <div class="rating">
            {{-- <div class="ratings">
              <div class="rating-box">
                <div class="rating width80"></div>
              </div>
              <p class="rating-links"><a href="#">1 Review(s)</a><span class="separator">|</span><a href="#">Add Review</a></p>
            </div> --}}
          </div>
          <div class="item-content">
            <div class="item-price">
              <div class="price-box"><span class="regular-price"><span class="price">
                @if($product->display_as == 'sale')
                <del>{{ round($product->price, 2) }}৳</del>
                <ins>{{ floor(round($product->price, 2) - ($product->discount/100) * round($product->price, 2)) }}৳</ins>
                @else 
                {{ number_format($product->price, 2)  }}৳
                @endif      
            </span></span></div>
            </div>
            <div class="action">
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf  
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    @if($product->display_as == 'sale')
                    <input type="hidden" name="amount" value="{{ floor(round($product->price, 2) - ($product->discount/100) * round($product->price, 2)) }}">
                    @else 
                    <input type="hidden" name="amount" value="{{ round($product->price, 2) }}">
                    @endif 
                    <input type="hidden" name="qty" value="1">
                    <button class="button btn-cart" type="submit"><span>ADD TO CART</span></button>
                </form>
                <a href="{{ route('buynow.index', $product->id) }}" class="button btn-cart">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</li>
@empty 
<li>no product to display.</li>
@endforelse 