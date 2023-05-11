@php
    $cartItems = cartItems();
@endphp
@forelse ($cartItems as $item)
{{-- <div class="mini_cart_item js_cart_item flex al_center pr oh">
 <div class="ld_cart_bar"></div>
 <a href="{{ route('frontend.details', $item->getproducts->slug) }}" class="mini_cart_img">
     <img class="w__100 lazyload" data-src="{{ asset('uploads/products') }}/{{ $item->getproducts->image }}" width="120" height="153" alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTUzIiB2aWV3Qm94PSIwIDAgMTIwIDE1MyI+PC9zdmc+">
 </a>
 <div class="mini_cart_info">
     <a href="product-detail-layout-01.html" class="mini_cart_title truncate">{{ ucfirst($item->getproducts->name) }}</a>
     <div class="mini_cart_meta">
         <p class="cart_selling_plan"></p>
         <div class="cart_meta_price price">
             <div class="cart_price">
                 @if($item->getproducts->display_as == 'sale')
                 <del>${{ round($item->getproducts->price, 2) }}</del>
                 <ins>${{ round($item->getproducts->price, 2) - ($item->getproducts->discount/100) * round($item->getproducts->price, 2) }}</ins>
                 @else 
                 <span class="price dib mb__5">${{ round($item->getproducts->price, 2)  }}</span>
                 @endif
             </div>
         </div>
     </div>
     <div class="mini_cart_actions">
         <div class="quantity pr mr_10 qty_true">
             <input type="number" class="input-text qty text tc qty_cart_js" step="1" min="0" max="9999" value="{{ $item->qty }}">
             <div class="qty tc fs__14">
                 <button type="button" class="plus db cb pa pd_0 pr15 tr r_0">
                     <i class="facl facl-plus"></i>
                 </button>
                 <button type="button" class="minus db cb pa pd_0 pl15 tl l_0 qty_1">
                     <i class="facl facl-minus"></i>
                 </button>
             </div>
         </div>
         <a data-id="{{ $item->id }}" class="rm_cart cart_ac_remove js_cart_rem ttip_nt tooltip_top_right"><span class="tt_txt">Remove this item</span>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                 <polyline points="3 6 5 6 21 6"></polyline>
                 <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                 <line x1="10" y1="11" x2="10" y2="17"></line>
                 <line x1="14" y1="11" x2="14" y2="17"></line>
             </svg>
         </a>
     </div>
 </div>
</div> --}}
<li class="item">
    <div class="item-inner">
        <a class="product-image" title="Retis lapen casen" href="{{ route('frontend.details', $item->getproducts->slug) }}">
            <img alt="Retis lapen casen" src="{{ asset('uploads/products') }}/{{ $item->getproducts->image }}">
        </a>
      <div class="product-details">
        <div class="access">
            <a class="btn-remove1" title="Remove This Item" href="{{ route('cart.destroy', $item->id) }}">Delete</a></div>
        <strong>{{ $item->qty  }} </strong> x <span class="price">@if($item->getproducts->display_as == 'sale')
            <del>{{ number_format($item->getproducts->price, 2) }}৳</del>
            <ins>{{ number_format($item->getproducts->price, 2) - ($item->getproducts->discount/100) * round($item->getproducts->price, 2) }}৳</ins>
            @else 
            <span class="price dib mb__5">৳{{ number_format($item->getproducts->price, 2)  }}</span>
            @endif</span>
        <p class="product-name"><a href="{{ route('frontend.details', $item->getproducts->slug) }}">{{ $item->getproducts->name }}</a></p>
      </div>
    </div>
  </li>
@empty 
<div class="empty tc mt_40"><i class="las la-shopping-bag pr mb_10"></i>
    <li style="list-style: none; margin-bottom: 10px">Your cart is empty</li>
    <p class="return-to-shop mb__15">
        <a class="button button_primary tu js_add_ld" style="font-size: 10px" href="{{ route('frontend.products') }}">Return To Shop</a>
    </p>
</div> 

@endforelse
