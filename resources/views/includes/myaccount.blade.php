<aside class="col-right sidebar col-sm-3 col-xs-12">
    <div class="block block-account">
      <div class="block-title">My account</div>
      <div class="block-content">
        <ul>
          <li class="@yield('accountinfo')"><a href="{{ route('frontend.userDashboard') }}">Account Information</a></li>
          <li class="@yield('orders')"><a href="{{ route('frontend.myOrders') }}">My orders</a></li>
          <li class="@yield('wishlist')"><a href="{{ route('frontend.wishList') }}">My wish list</a>
          <li class="@yield('cart')"><a href="{{ route('cart.index') }}">MY CART</a></li>
        </ul>
      </div>
    </div>
  </aside>