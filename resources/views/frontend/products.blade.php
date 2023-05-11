@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Products
@endsection

@section('content')
    
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"><a href="{{ url('/') }}">Menu</a><span>/</span></li>
            <li><a href="{{ route('frontend.products') }}">Products</a><span>/</span></li>
            {{-- <li><strong>Regular Fruits</strong></li> --}}
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-xs-12 col-sm-push-3">
        {{-- <!-- category slider -->
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                 <div class="item"> <a href="#"><img alt="Fresh Vegetables" src="images/category-img1.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Alive Fresh</div>
                      <h2 class="cat-heading">Fresh Vegetables</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="item"> <a href="#"><img alt="Healthy Eating" src="images/category-img2.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Season Sale</div>
                      <h2 class="cat-heading">Healthy Eating</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End category slider -->  --}}
          
        <!-- Col- Main -->   
          <article class="col-main">
            <h2 class="page-heading"> <span class="page-heading-title">Regular Furniture</span> </h2>
            <div class="display-product-option">
              <div class="pager hidden-xs">
                 @include('includes.pagination')
              </div>
              {{-- <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid"><i class="fa fa-th" aria-hidden="true"></i></span><a href="list.html" title="List" class="button-list"><i class="fa fa-list-ul" aria-hidden="true"></i></a></div>
              </div> --}}
            </div>
            <div class="category-products">
              <ul id="prod" class="products-grid">
               @include('includes.productpage')
              </ul>
            </div>
            <div class="toolbar">
              <div class="row">
                {{-- <div class="col-lg-3 col-md-4">
                  <div id="sort-by">
                    <label class="left">Trier par: </label>
                    <ul>
                      <li><a href="#">Position<span class="right-arrow"></span></a>
                        <ul>
                          <li><a href="#">Nom</a></li>
                          <li><a href="#">Prix</a></li>
                          <li><a href="#">Position</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div> --}}
                <div class="col-lg-6 col-sm-7 col-md-5">
                  <div class="pager">
                    @include('includes.pagination')
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!--	End col Main  --> 
        </div>
        
        <!-- Sidebar  --> 
        <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="col-left sidebar">
          <!-- Categories --> 
            <div class="side-nav-categories">
              <div class="block-title">CATEGORIES</div>
              
             <div class="box-content box-category">
                <ul>
                  @foreach (categories() as $item)
                  <li><a href="{{ route('frontend.productsbycategory', $item->name) }}">{{ ucfirst($item->name) }}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- My Cart --> 
            <div class="block block-cart">
              <div class="block-title ">MY CART</div>
              <div class="block-content">
                <div class="summary">
                  <p class="amount">There are <a href="{{ route('cart.index') }}">{{ cartCount() }} elements</a> in your shopping cart.</p>
                  <p class="subtotal"> <span class="label">Subtotal of the Cart </span><span class="price"> {{ cartTotal() }}৳</span> </p>
                </div>
                <div class="ajax-checkout">
                  <button class="button button-checkout" title="Submit" type="submit"><span>Payment</span></button>
                </div>
                <p class="block-subtitle">Recently added items</p>
                <ul>
                  @include('includes.cart_items')
                </ul>
              </div>
            </div>
            <!-- Shop by --> 
            <div class="block block-layered-nav">
              <div class="block-title">SORT BY</div>
              <div class="block-content">
                <p class="block-subtitle">Call options</p>
                <div class="price-filter">
                  <label><strong>Price</strong></label>
                  <ul>
                    <li>
                      <input type="checkbox" class="custom-control-input" value="$5-$50" id="below-50">
                      <label class="custom-control-label" for="below-50">5৳-50৳</label>
                    </li>
                    <li>
                      <input type="checkbox" class="custom-control-input" value="$51-$100" id="51-100">
                      <label class="custom-control-label" for="51-100">15৳-100৳</label>
                    </li>
                    <li>
                      <input type="checkbox" class="custom-control-input" value="$101-$200" id="101-200">
                      <label class="custom-control-label" for="101-200">101৳-200৳</label>
                    </li>
                    <li>
                      <input type="checkbox" class="custom-control-input" value="$201-$350" id="201-350">
                      <label class="custom-control-label" for="201-350">201৳-350৳</label>
                    </li>
                    <li>
                      <input type="checkbox" class="custom-control-input" value="$351-$500" id="above-350">
                      <label class="custom-control-label" for="above-350">351৳-500৳</label>
                    </li>
                    <li>
                      <input type="checkbox" class="custom-control-input" value="$501-$5000" id="30-50">
                      <label class="custom-control-label" for="30-50">501৳-5000৳</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>

@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $(".custom-control-input").click(function(e){
                e.preventDefault();

                let price = $(this).val();
                let id = "{{ request()->product_type }}"; 

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Ajax Call 
                $.ajax({
                    url  : "{{ route('frontend.searchbyprice') }}", 
                    type : "POST",
                    data : {
                        price : price, 
                        id : id,
                    },
                    success : function(data){
                      $('input[type="checkbox"]').not(this).prop('checked', false);
                      // $('input[type="checkbox"]').(this).prop('checked', true);
                        $("#prod").html(data.response);
                        
                        //  $(this).attr("checked", false ); 
                    } 

                });

            });

        });
    </script>
@endsection