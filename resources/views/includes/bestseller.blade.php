@forelse ($bestSellers as $product)
<div class="item">
    <div class="item-inner">
      <div class="item-img">
        <div class="item-img-info"><a class="product-image" title="{{ $product->get_product_info->name }}" href="{{ route('frontend.details', $product->get_product_info->slug) }}"><img alt="{{ $product->get_product_info->name }}" src="{{ asset('uploads/products') }}/{{ $product->get_product_info->image }}"></a>
          @if($product->get_product_info->created_at-> \Carbon\Carbon::now()->subDays(10))
          <div class="new-label new-top-right">New</div>
          @endif
          <div class="box-hover">
            <ul class="add-to-links">
              <li><a class="link-quickview" href="{{ route('frontend.quickview', $product->get_product_info->id) }}">Quick View</a></li>
              <li><a class="link-wishlist" href="">Wishlist</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item-info">
        <div class="info-inner">
          <div class="item-title">
            <a title="Retis lapen casen" href="{{ route('frontend.details', $product->get_product_info->slug) }}">{{ $product->get_product_info->name }}</a>
          </div>
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
                @if($product->get_product_info->display_as == 'sale')
                <del>{{ $product->get_product_info->price }}৳</del>
                <ins>{{ round($product->get_product_info->price - ($product->get_product_info->discount/100) * $product->get_product_info->price) }}৳</ins>
                @else 
                {{ $product->get_product_info->price  }}৳
                @endif      
            </span></span></div>
            </div>
            <div class="action">
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf  
                    <input type="hidden" name="product_id" value="{{ $product->get_product_info->id }}">

                    @if($product->get_product_info->display_as == 'sale')
                    <input type="hidden" name="amount" value="{{ round($product->get_product_info->price - ($product->get_product_info->discount/100) * $product->get_product_info->price) }}">
                    @else 
                    <input type="hidden" name="amount" value="{{ $product->get_product_info->price }}">
                    @endif 

                    <input type="hidden" name="qty" value="1">
                    <button class="button btn-cart" type="submit"><span>Add to Cart</span></button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@empty 
<p>No products to show.</p>
@endforelse 