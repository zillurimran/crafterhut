@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | wish list
@endsection

@section('wishlist')
    current
@endsection

<style>
  
.data-table td {
    vertical-align: middle !important;
  }
</style>

@section('content')
<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-9 col-xs-12">

          <div class="col-main">
            <div class="my-account">
              <div class="page-title">
                <h2>My wish list</h2> 
                
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                
              </div>
              <div class="my-wishlist">
                <div class="table-responsive">
                  {{-- <form method="post" action="#" id="wishlist-view-form"> --}}
                    <fieldset>
                      <table id="wishlist-table" class="clean-table linearize-table data-table">
                        <thead>
                          <tr class="first last">
                            <th class="customer-wishlist-item-image">Image</th>
                            <th class="customer-wishlist-item-price">Price</th>
                            <th class="customer-wishlist-item-cart">ADD TO CART</th>
                            <th class="customer-wishlist-item-remove">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($wishlists as $wishlist)
                            <tr class="first odd">
                              <td class="wishlist-cell0 customer-wishlist-item-image">
                                <a title="Retis lapen casen" href="{{ route('frontend.details', $wishlist->getProducts->slug) }}" class="product-image"> 
                                  <img width="100" alt="Retis lapen casen" src="{{ asset('uploads/products') }}/{{ $wishlist->getProducts->image }}">
                                </a>
                              </td>
                              <td data-rwd-label="Price" class="wishlist-cell3 customer-wishlist-item-price">
                                <div class="cart-cell">
                                  <div class="price-box">
                                    <span class="regular-price">
                                      <span class="price">
                                        @if($wishlist->getProducts->display_as == 'sale')
                                          <del>${{ $wishlist->getProducts->price }}</del>
                                          <ins>${{ round($wishlist->getProducts->price - ($wishlist->getProducts->discount/100) * $wishlist->getProducts->price) }}</ins>
                                        @else 
                                          ${{ $wishlist->getProducts->price  }}
                                        @endif
                                        {{-- ${{ $wishlist->getProducts->price }} --}}
                                      </span>
                                    </span>
                                  </div>
                                </div>
                              </td>
                              <td class="wishlist-cell4 customer-wishlist-item-cart">
                                <div class="cart-cell">
                                  <form action="{{ route('cart.store') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="product_id" value="{{ $wishlist->getProducts->id }}">
                                      <input type="hidden" name="qty" value="1">

                                      @if($wishlist->getProducts->display_as == 'sale')
                                        <input type="hidden" name="amount" value="{{ round($wishlist->getProducts->price - ($wishlist->getProducts->discount/100) * $wishlist->getProducts->price) }}">
                                      @else 
                                        <input type="hidden" name="amount" value="{{ $wishlist->getProducts->price }}">
                                      @endif 
                                      <button class="button btn-cart"  type="submit">
                                        <span><span>ADD TO CART</span></span>
                                      </button>
                                  </form>
                                </div>
                              </td>
                              <td class="wishlist-cell5 customer-wishlist-item-remove last">
                                <form action="{{ route('wishlists.destroy', $wishlist->id ) }}" method="POST">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                  {{-- <a class="remove-item" href="" onclick="">
                                    <span><span></span></span>
                                  </a> --}}
                                  <a class="remove-item" href="{{ route('wishlists.destroy', $wishlist->id ) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <span><span></span></span>
                                  </a>
                                </form>
                              </td>
                            </tr>

                           
                          @endforeach
                        </tbody>
                      </table>
                    </fieldset>
                  {{-- </form> --}}
                </div>
              </div>
            </div>
          </div>

        </section>
          @include('includes.myaccount')
      </div>
    </div>
</div>
@endsection