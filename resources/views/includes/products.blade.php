@forelse ($latestProducts as $product)
    @if ($product->status == 'show')
        <div class="item">
          <div class="item-inner">
            <div class="item-img">
              <div class="item-img-info"><a class="product-image" title="{{ $product->name }}" href="{{ route('frontend.details', $product->slug) }}"><img alt="{{ $product->name }}" src="{{ asset('uploads/products') }}/{{ $product->image }}"></a>
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
                    @if($product->type == 'forsale')
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

                      {{-- <button onclick="location.href='{{ route('buynow.index', $product->id) }}';"
                         class="button btn-cart" title="Proceed to Checkout"
                     type="button"><span>Buy Now</span></button> --}}
            
                  </form>
                  {{-- data-toggle="modal" data-target="#productColorModal" --}}
                  {{-- <button type="button" id="buy_product" class="button btn-cart buy_product" data-id="{{$product->id}}">
                    Buy Now
                  </button> --}}
                  
                  <a href="{{ route('buynow.index', $product->id) }}" class="button btn-cart">Buy Now</a>
                  {{-- <button onclick="location.href='{{ route('buynow.index') }}';"
                         class="button btn-cart" title="Proceed to Checkout"
                     type="button"><span>Buy Now</span></button>
                   --}}
                     
                     @else
                    
                  <a class="button btn-cart" title="Demander un devis" href="{{ route('rq', $product->id) }}">REQUEST A QUOTE</a>
                    @endif
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    @endif
@empty 
<p>No product to display.</p>
@endforelse 