  <!-- Footer -->
  <footer>
      <div class="footer-inner">
          <div class="container">
              <div class="row">
                <div class="col-md-4">
                    <div class="footer-column">
                        <h4>LINK</h4>
                        <ul class="links">
                            <li><a href="{{ route('login') }}">My account</a></li>
                            <li><a href="{{ route('login') }}">Log In</a></li>
                            <li><a href="{{ route('frontend.blogList') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column">
                        <h4>CATEGORIES</h4>
                        <ul class="links">
                            @foreach (categories() as $category)
                                <li>
                                    @if ($category->name == 'BOX DE FRUITS')
                                    <a title="Your Account" href="{{ route('product.custom.box') }}">{{ $category->name }}</a>
                                    @else
                                    <a title="Your Account" href="{{ route('frontend.productsbycategory', $category->name) }}">{{ $category->name }}</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column-last">
                        <div class="newsletter-wrap">
                            <h4>SUBSCRIBE TO THE NEWSLETTER</h4>
                            <form id="newsletter-validate-detail">
                                @csrf
                                <div id="container_form_news">
                                    <div id="container_form_news2">
                                        <input name="email" type="text" class="input-text"
                                            placeholder="Enter your email address" id="newsletter">
                                        <button type="button" class="button subscribe" id="subscribe_btn"><i
                                                class="fa fa-envelope"></i><span>SUBSCRIBE</span> </button>
                                    </div>
                                    <div id="lol" class="text-danger"></div>
                                    <div id="success" class="text-success"></div>
                                </div>
                            </form>
                        </div>
                        <div class="social">
                            <h4>FOLLOW US</h4>
                            <ul class="link d-flex flex-wrap">
                                <li class="fb pull-left">
                                    <a href="{{ socialiconssettings()->fb_url }}">{!! socialiconssettings()->fb !!}</a>
                                </li>
                                <li class="fb pull-left">
                                    <a href="{{ socialiconssettings()->instagram_url }}">{!! socialiconssettings()->instagram !!}</a>
                                </li>
                                <li class="fb pull-left">
                                    <a href="{{ socialiconssettings()->twitter_url }}">{!! socialiconssettings()->twitter !!}</a>
                                </li>
                                <li class="fb pull-left">
                                    <a href="{{ socialiconssettings()->youtube_url }}">{!! socialiconssettings()->youtube !!}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="footer-middle">
          <div class="container">
              <div class="row">
                  <div class="text-center">
                      <a href="{{ url('/') }}">

                        @if(generalsettings()->logo)
                            <img width="60"
                              src="{{ asset('uploads/generalSettings') }}/{{ generalsettings()->logo }}"
                              alt="logo">
                              @else
                            <img width="60"
                              src="{{ asset('uploads/generalSettings/logo.png') }}"
                              alt="logo">
                        @endif
                      </a>
                  </div>
                  <address>
                      <i class="fa fa-map-marker"></i> {{ generalsettings()->address }}
                      <i class="fa fa-mobile"></i><span> {{ generalsettings()->phone }}</span>
                      <i class="fa fa-envelope"></i><span> {{ generalsettings()->email }}</span>
                  </address>
                  <div class="privacy_policy text-center">
                      <span style="color: #fff; margin: 0 5px"><a
                              href="{{ route('frontend.privacy_policy') }}">Privacy Policy</a></span>
                      <span style="color: #fff; margin: 0 5px"><a
                              href="{{ route('frontend.terms_condition') }}">Terms & Condition</a></span>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom" style="background: #000">
          <div class="container">
              <div class="coppyright" style="color: #fff">&copy; <span id="year"></span> <a
                      href="https://dgtalspace.com">Dgtalspace</a>. All rights reserved.</div>
          </div>
      </div>
  </footer>
  <!-- End Footer -->
  </div>
  <!-- End page -->
  <!-- mobile menu -->
  <div id="mobile-menu" style="position: fixed">
      <ul>
          <li>
              <div class="mm-search mobile-menu-top">
                  <form id="search1" {{ route('frontend.search') }}>
                      <div class="input-group">
                          <div class="input-group-btn">
                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                          </div>1
                          <input type="text" class="form-control simple" placeholder="Search..." name="q"
                              id="srch-term">
                      </div>
                  </form>
                  <div class="mm-toggle">
                      <i class="fa fa-times " aria-hidden="true"></i>
                      <span class="mm-label">Menu</span>
                  </div>
              </div>
          </li>
          <li><a href="{{ url('/') }}">Home</a></li>

          @foreach (categories() as $category)
              <li>
                  @if ($category->name == "BOX")
                  <a href="{{ route('product.custom.box') }}">{{ $category->name }}</a>
                  @else
                  <a href="{{ route('frontend.productsbycategory', $category->name) }}">{{ $category->name }}</a>
                  @endif
                  <ul>
                      @foreach ($category->getSubCategory as $subcat)
                          <li>
                              <a
                                  href="{{ route('frontend.productsbysubcategory', ['name' => $subcat->name, 'id' => $subcat->id]) }}"><span>{{ $subcat->name }}</span></a>
                              <ul>
                                  @foreach ($subcat->getProducts->take(4) as $product)
                                      <li>
                                          <a
                                              href="{{ route('frontend.details', $product->slug) }}"><span>{{ $product->name }}</span></a>
                                      </li>
                                  @endforeach
                              </ul>
                          </li>
                      @endforeach
                  </ul>
              </li>
          @endforeach

      </ul>
      <div class="top-links">

          <ul class="links">

              @auth
                  <li>
                      @if (Auth::user()->role == 'admin')
                          <a href="{{ route('login') }}">My account</a>
                      @else
                          <a href="{{ route('frontend.userDashboard') }}">My account</a>
                      @endif
                  </li>
              @endauth

              <li>
                  <a href="{{ route('checkout.index') }}">Payment</a>
              </li>

              <li>
                  <a href="{{ route('frontend.blogList') }}"><span>Blog</span></a>
              </li>

              <li>
                  @guest
                      <a href="{{ route('login') }}"><span>Log In</span></a>
                  @endguest
                  @auth
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                this.closest('form').submit();">
                              <span class="">Disconnect</span>
                          </a>
                      </form>
                  @endauth
              </li>

          </ul>


      </div>
  </div>
  <!-- JavaScript -->

  {{-- <script src="{{ asset('frontend/js/jquery.min.js') }}"></script> --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.mobile-menu.min.js') }}"></script>
  @yield('js')
  <script src="{{ asset('frontend/js/revslider.js') }}"></script>
  <script src="{{ asset('frontend/js/countdown.js') }}"></script>
  <script src="{{ asset('frontend/js/cloud-zoom.js') }}"></script>
  <script src="{{ asset('frontend_assets/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('frontend/js/common.js') }}"></script>
  {{-- <script src="{{ asset('frontend_assets/assets/plugins/stepper/js/bs-stepper.min.js') }}"></script> --}}
  <!-- Hot Deals Timer 1-->
  <script>
      var dthen1 = new Date("12/25/19 11:59:00 PM");
      start = "08/04/18 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
          ddiff = new Date((dnow1) - (dthen1));
      else
          ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
  </script>

  <script>
      const d = new Date();
      let year = d.getFullYear();

    //   document.getElementById('year').innerHTML = year </>

          
          $(document).ready(function() {
              $('#subscribe_btn').click(function() {
                  let email = $('#newsletter').val();
                  
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  
                  $.ajax({
                      type: "POST",
                      url: "{{ route('subscriptions.store') }}",
                    //   dataType: 'JSON',
                      data: {
                          email: email,
                      },
                      success: function(data) {
                          $('#newsletter').val('');
                          $('#success').html('You are subscribed');
                          $('#lol').css('display', 'none');
                      },
                      error: function(response) {
                        
                          $('#lol').text(response.responseJSON.errors.email);
                      }

                  });

              });

          });
  </script>

  <script>
      $('.simple-bar').each((index, element) => new SimpleBar(element, {
          autoHide: true
      }));

      $(window).on("scroll", function() {
          if (window.matchMedia("(max-width: 766px)").matches) {
              var scrolling = $(this).scrollTop();

              if (scrolling > $('.logo-block').innerHeight() / 2) {
                  $("header").addClass("sticky-nav");
              } else {
                  $("header").removeClass("sticky-nav");
              }
          }
      });

      $(function() {
          $('[data-toggle="popover"]').popover()
      });

      $('.img-cart .card').click(function() {
          $('.card').removeClass('active');
          $(this).addClass('active');
      })
      $('.hovarable').click(function() {
          $(this).toggleClass('active');
      });

 


      $('#Stepper_btn-1').on("click", function() {
          $('#pills-profile-tab').tab('show');
      });

      $('#preveous_btn-1').on("click", function() {
          $('#pills-home-tab').tab('show');
      });


      $('#Stepper_btn-2').on("click", function() {
          $('#pills-contact-tab').tab('show');
      });

      $('#preveous_btn-2').on("click", function() {
          $('#pills-profile-tab').tab('show');
      });

      $('#stepper_btn_next_3').on("click", function() {
          $('#pills-gourmandises-tab').tab('show');
      });

      $('#preveous_btn-3').on("click", function() {
          $('#pills-contact-tab').tab('show');
      });

      
      
    /* Show And Hide Password function */
    $(".password-wrapper__toggler").on("click", function(){
        let currentType = $(this).closest(".password-wrapper").find(".password-wrapper__input").attr("type");
        if(currentType == "password"){
            $(this).closest(".password-wrapper").find(".password-wrapper__input").attr("type", "text");
            $(this).closest(".password-wrapper").find(".password-wrapper__toggler__icon").addClass("fa-eye-slash");
        }else{
            $(this).closest(".password-wrapper").find(".password-wrapper__input").attr("type", "password");
            $(this).closest(".password-wrapper").find(".password-wrapper__toggler__icon").removeClass("fa-eye-slash");
        }
    })


    $(function(){
        $('.delivery_options').change(function(){
            if($(this).find('option:selected').val()=='pickup'){
                $('.dependency-select').slideDown()
            }else{
                $('.dependency-select').slideUp()
            }
        })
    })
    
    // $(function(){
    //     $('#pickup_address').change(function(){
    //         if($(this).find('option:selected').val()=='test address'){
    //             $('.time-date-select').slideDown()
    //         }else{
    //             $('.time-date-select').slideUp()
    //         }
    //     })
    // })






// custom value selector
    const updateButtonValue = (exatTime) => {
  console.log(exatTime);
  let button = document.getElementById("button-value");
  button.innerHTML = exatTime;
};

document.getElementById("time-menu").addEventListener("click", (e) => {
  let container = document.getElementById("times");
  let button = document.getElementById("time-menu");
  container.classList.toggle("active");
  button.classList.toggle("show");
});

document.querySelector(".drop-items-inner").addEventListener("click", (e) => {
  let exatTime = e.target.innerHTML;
  updateButtonValue(exatTime);
});

// date pick
let dates = new Date();
let currentDate = dates.getDate();
let currentMonth = dates.getMonth();
let today = document.getElementById("today");
let tomorrow = document.getElementById("tomorrow");
let nextDay = document.getElementById("nextDay");
let button = document.getElementById('dateCurrentValue');

button.innerHTML = currentDate;
today.innerHTML = currentDate;
tomorrow.innerHTML = currentDate + 1;
nextDay.innerHTML = currentDate + 2;
const updateDate = (getValue) => {
  let button = document.getElementById("dateCurrentValue");
  button.innerHTML = getValue;
};

document.getElementById("drop-menu").addEventListener("click", (e) => {
  let value = e.target.innerHTML;
  updateDate(value);
});
  </script>
  <script>
    $('#condition').click(function () {
        //check if checkbox is checked
        if ($(this).is(':checked')) {

            $('#orderNow').removeAttr('disabled'); //enable input

        } else {
            $('#orderNow').attr('disabled', true); //disable input
        }
    });
  </script>
  <script>
    $(document).ready(function(){

        $("#state").change(function(){
       var shipping_cost = $(this).find(':selected').attr('data-cost');
      
        $('#shipping_cost').html(shipping_cost);

        
        var cartTotal = "{{ cartTotal() }}";
        
        var total = parseFloat(shipping_cost)+parseFloat(cartTotal)
        
        $('#total').html(total);

        
    })

    $('#rocketAmount').on('keyup', function(){
        var total = $('#total').html();
        
        
        var amount = parseFloat($(this).val());
        var minAmount = parseFloat((total*10)/100);
        if(minAmount>amount){
            $('.msg').removeClass('hide');
        }else{
            $('.msg').addClass('hide');
           
        }
        
    });
     
    
    $('#nagadAmount').on('keyup', function(){
        
        var total = $('#total').html();
        
        var amount = parseFloat($(this).val());
        var minAmount = parseFloat((total*10)/100);
        if(minAmount>amount){
            $('.msg').removeClass('hide');
        }else{
            $('.msg').addClass('hide');
        }
    })

    $('#bkashAmount').on('keyup', function(){
        var total = $('#total').html();
        var amount = parseFloat($(this).val());
        var minAmount = parseFloat((total*10)/100);
        if(minAmount>amount){
            $('.msg').removeClass('hide');
        }else{
            $('.msg').addClass('hide');
        }
    })
});


  </script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function(){
        $('#orderNow').on('click', function(e){
            e.preventDefault();
            // $('.btn-text').addClass('hide');
            // $('.d-none').removeClass();
            
            var paymentMethod   = $('input[name="paymentMethod"]:checked').attr('data-name');
            var order_type      = $('#type').val();
            var name            = $('#firstname').val();
            var email           = $('#email').val();
            var phone           = $('#phone').val();
            var country         = $('#country').val();
            var zip             = $('#zip').val();
            var state           = $('#state').val();
            var address         = $('#address').val();
            var address_2       = $('#address2').val();
            var total           = $('#total').html();
            var order_type      = $("#type").val();
            var pickup_address  = $("#pickup_address").val();
            var pickup_time     = $("#schedule").val();
            var pickup_date     = $("#pickUpDate").val();
            var product         = $('#product_name').html();
            var rocket_number   = $('#rocket_number').val();
            var nagad_number    = $('#nagad_number').val();
            var bkash_number    = $('#bkash_number').val();
            var rocket_transaction_number   = $('#rocket_transaction_number').val();
            var nagad_transaction_number    = $('#nagad_transaction_number').val();
            var bkash_transaction_number    = $('#bkash_transaction_number').val();
            var rocket_amount   = $('#rocketAmount').val();
            var nagad_amount   = $('#nagadAmount').val();
            var bkash_amount   = $('#bkashAmount').val();
            
            

            if(name == '')
            {
                $("#firstnameError").html('Enter your name');
            }
             if(email == '')
            {
                $("#emailError").html('Enter your email');
            }
             if(phone == '')
            {
                $("#phoneError").html('Enter your phone');
            }
            
             if(country == '')
            {
                $("#countryError").html('Enter your Country');
            }
             if(zip == '')
            {
                $("#zipError").html('Enter your postal code');
            }
             if(state == '')
            {
                $("#stateError").html('Enter Your State'); 
            } 
             if(address == '')
            {
                $("#addressError").html('Enter your address');
            }  
            if(!paymentMethod)
            {
                $("#PaymentErr").html('Payment method is required');
                $('#PaymentErr').removeClass('hide')
            }else{
                $('#PaymentErr').addClass('hide')
            }

            if(paymentMethod == 'bkash'){
                if(!bkash_number){
                    $('#bkashNumberErr').html('Bkash number is required');
                    $('#bkashNumberErr').removeClass('hide')
                }else{
                    $('#bkashNumberErr').addClass('hide')
                }
                if(!bkash_transaction_number){
                    $('#bkashTransactionNumberErr').html('Bkash transaction ID is required');
                    $('#bkashTransactionNumberErr').removeClass('hide')
                }else{
                    $('#bkashTransactionNumberErr').addClass('hide')
                }
                if(!bkash_amount){
                    $('#bkashAmountErr').html('Minimum 10% of total amount is required');
                    $('#bkashAmountErr').removeClass('hide')
                }else{
                    $('#bkashAmountErr').addClass('hide')
                }
            }

            if(paymentMethod == 'nagad'){
                if(!nagad_number){
                    $('#nagadNumberErr').html('Nagad number is required');
                    $('#nagadNumberErr').removeClass('hide')
                }else{
                    $('#nagadNumberErr').addClass('hide')
                }
                if(!nagad_transaction_number){
                    $('#nagadTransactionNumberErr').html('Nagad transaction ID is required');
                    $('#nagadTransactionNumberErr').removeClass('hide')
                }else{
                    $('#nagadTransactionNumberErr').addClass('hide')
                }
                if(!nagad_amount){
                    $('#nagadAmountErr').html('Minimum 10% of total amount is required');
                    $('#nagadAmountErr').removeClass('hide')
                }else{
                    $('#nagadAmountErr').addClass('hide')
                }
            }
            
            if(paymentMethod == 'rocket'){
                if(!rocket_number){
                    $('#rocketNumberErr').html('Rocket number is required');
                    $('#rocketNumberErr').removeClass('hide')
                }else{
                    $('#rocketNumberErr').addClass('hide')
                }
                if(!nagad_transaction_number){
                    $('#rocketTransactionNumberErr').html('Rocket transaction ID is required');
                    $('#rocketTransactionNumberErr').removeClass('hide')
                }else{
                    $('#rocketTransactionNumberErr').addClass('hide')
                }
                if(!nagad_amount){
                    $('#rocketAmountErr').html('Minimum 10% of total amount is required');
                    $('#rocketAmountErr').removeClass('hide')
                }else{
                    $('#rocketAmountErr').addClass('hide')
                }
            }
           
           if(rocket_number && rocket_transaction_number && rocket_amount){
                var customer_number = rocket_number;
                var transaction_number = rocket_transaction_number;
                var paid_amount = parseFloat(rocket_amount);
           }

           if(nagad_number && nagad_transaction_number && nagad_amount){
                var customer_number = nagad_number;
                var transaction_number = nagad_transaction_number;
                var paid_amount = parseFloat(nagad_amount);
           }

           if(bkash_number && bkash_transaction_number && bkash_amount){
                var customer_number = bkash_number;
                var transaction_number = bkash_transaction_number;
                var paid_amount = parseFloat(bkash_amount);
           }

           var total = parseFloat($('#total').html());
           var minAmount = parseFloat((total*10)/100);

           if(customer_number && transaction_number && paid_amount && (minAmount <= paid_amount)){

            $.ajax({
            url: "{{ route('order.store') }}",
            method:"POST",
            data:{
                paymentMethod: paymentMethod,
                order_type: order_type,
                name: name,
                email: email,
                phone: phone,
                country: country,
                zip: zip,
                state: state,
                address: address,
                address_2: address_2,
                total: total,
                order_type: order_type,
                pickup_address: pickup_address,
                pickup_time: pickup_time,
                pickup_date: pickup_date,
                product: product,
                customer_number: customer_number,
                transaction_number: transaction_number,
                paid_amount: paid_amount

            },success:function(res){
                if(res.status == "success"){
                    window.location.href ="{{route('pay.success')}}";
                } 
            }
         })
        }
    })
    
        var product = $('#product-zoom').attr('src');
     $('.multiple_images').on('click', function(e){
        e.preventDefault();
            
                var image = $(this).attr('data-image');
                $('#product-zoom').attr('src', image);
                $('#product-zoom1').attr('src', product); 

     })
})
</script>
<script>
    $(document).ready(function(){
        
        $('.buy_product').on('click', function(){
           var product_id = $(this).attr('data-id')
           
           $.ajax({
            url:"{{route('select.color')}}",
            method:'get',
            data:{
                product_id:product_id
            },
            success:function(res){
                
               $('#productColorModal').modal('show')
              $.each(res.colors,function(key, value){
                
                $('#color_image').append('<input type="radio" value="'+value.id+'" name="product_color">'+'<img src="{{asset('uploads/productColors')}}'+'/'+value.product_color_image+ '" height="100" width="100">')
                
              })
            }
           })
        
          
        })
    })
</script>
  </body>

  </html>
