@extends('layouts.frontend')
@section('title')
    {{ config('app.name') }} | Payment 
@endsection
@section('js')
    <script>
      $(window).on("load", function(){
        $(".paymentDetailsBlock").hide();
        $(`#${$(".paymentMethodTogglerInput:checked").attr('data-target')}`).show();
      })

      $(document).ready(function () {
        $(".paymentMethodTogglerInput").on('change',function(){
          let currentVisibleBlockId = $(this).attr('data-target');
          $(".paymentDetailsBlock").hide();
          $(`#${currentVisibleBlockId}`).show();
        })
      });
    </script>
@endsection
@section('content')
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <!-- ====== -->

      <style>
          .checkout_form a:focus,
          .checkout_form .btn:focus,
          .checkout_form .button:focus,
          .checkout_form select:focus {
              text-decoration: none;
              outline: 0;
              box-shadow: none;
          }

          .checkout_form .btn {
            font-size: 16px;
              outline: 0;
              border:none;
              backgfloor: #60be74;
          }

          .checkout_form button:focus {
              outline: 0;
          }

          .checkout_form .form-control:focus {
              outline: 0;
              box-shadow: none;
              border-color: #60be74;
          }
          .checkout_form form .form-control.zip {
              padding: 15px 15px;

          }

          .checkout_form form label {
              margin-right: 8px;
              margin-bottom: 7px;
          }

          .mb-3 {
              margin-bottom: 15px;
          }
          .mt-3 {
              margin-top: 15px;
          }
          .hide{
            display: none;
          }
      </style>

      <div class="checkout_form" style="margin-bottom: 20px;">
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif
        <div class="page-title">
          <h1 style="text-align: center; padding-top: 10px; padding-bottom: 15px;">Payment</h1>
        </div>
        <div class="row">
          <div class="col-md-7 order-md-1" style="padding-top: 20px;">
            <h4 class="mb-3 checkout_form_heading">Billing address</h4>
            
            <form method="POST">
              @csrf
  
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="delivery_options">Delivery Options *</label>
                    <select name="order_type" id="type" class="form-control delivery_options" required>
                      <option selected value="Cash on Delivery">Delivery</option>
                      <option value="pickup">Pickup</option>
                    </select>
                </div>
              </div>

              <div class="dependency-select">
                {{-- <div class="row"> --}}
                  <div class="col-md-6 mb-3">
                      <label for="pickupTime">Choose address *</label>
                      <select name="pickup_address_id" id="pickup_address" class="form-control" required>
                        <option value="">Select address</option>
                        @foreach (slot() as $address)
                            <option value="{{ $address->id }}">{{ $address->address }}</option>
                        @endforeach
                      </select>
                      <small id="pickup_address_error" style="color:red; text-transform:capitalize"></small>
                  </div>
                  {{-- <div class="col-md-7 mb-3">
                    <label for="pickupTime">heure de ramassage *</label>
                      <select name="schedule" id="schedule"  class="form-control select-time" required>
                      </select>
                  </div>
                  <div class="col-md-5 mb-3">
                    <label for="pickUpDate">date de retrait *</label>
                      <select name="order_type" id="pickUpDate" class="form-control" required>
                        <option selected value="today">Today 18</option>
                        <option value="tomorrow">Tommorow 19</option>
                      </select>
                  </div> --}}
                {{-- </div> --}}
                <div class="time-date-select">
                  {{-- <div class="row"> --}}
                    <div class="col-md-6 mb-3">
                      <label for="pickupTime">Pick-up time *</label>
                        <select name="pickup_time" id="schedule"  class="form-control select-time" required>
                          <option selected value="{{ \Carbon\Carbon::today()->addDay() }}">{{ \Carbon\Carbon::today()->addDay()->format('d-M-Y') }}</option>
                          <option value="{{ \Carbon\Carbon::today()->addDays(2) }}">{{ \Carbon\Carbon::today()->addDays(2)->format('d-M-Y') }}</option>
                          <option value="{{ \Carbon\Carbon::today()->addDays(3) }}">{{ \Carbon\Carbon::today()->addDays(3)->format('d-M-Y') }}</option>
                        </select>
                        <small id="pickup_time_error" style="color:red; text-transform:capitalize"></small>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="pickUpDate">Withdrawal date *</label>
                        <select name="pickup_date" id="pickUpDate" class="form-control" required>
                          {{-- <option selected value="{{ \Carbon\Carbon::today() }}">{{ \Carbon\Carbon::today()->format('d-M-Y') }}</option> --}}
                          <option selected value="{{ \Carbon\Carbon::today()->addDay() }}">{{ \Carbon\Carbon::today()->addDay()->format('d-M-Y') }}</option>
                          <option value="{{ \Carbon\Carbon::today()->addDays(2) }}">{{ \Carbon\Carbon::today()->addDays(2)->format('d-M-Y') }}</option>
                          <option value="{{ \Carbon\Carbon::today()->addDays(3) }}">{{ \Carbon\Carbon::today()->addDays(3)->format('d-M-Y') }}</option>             
                        </select>
                        <small id="pickup_date_error" style="color:red; text-transform:capitalize"></small>
                    </div>
                  {{-- </div> --}}
                </div>
              </div> 
                <div class="col-md-6 mb-3">
                  <label for="firstName">First and last name *</label>
                  <input type="text" class="form-control" name="name" value="{{ ucfirst(Auth::user()->name) }}" id="firstname" placeholder="Full name" value="">
                  <small id="firstnameError" style="color:red; text-transform:capitalize"></small>
                </div> 
  
              <div class="col-md-6 mb-3">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="">
                <small id="emailError" style="color:red; text-transform:capitalize"></small>
              </div>
  
              <div class="col-md-6 mb-3">
                <label for="phone">Phone *</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                <small id="phoneError" style="color:red; text-transform:capitalize"></small>
              </div>
              <div class="col-md-6 mb-3">
                <label for="country">Country *</label>
                <input id="country" type="text" name="country" value="{{ old('country') }}" placeholder="Country" class="form-control">
                <small id="countryError" style="color:red; text-transform:capitalize"></small>
              </div>
              <div class="col-md-6 zip_hide mb-3" >
                <label for="zip">Zip Code *</label>
                <input type="text" name="zip" class="form-control zip" id="zip" value="{{ old('zip') }}" placeholder=""> 
                <small id="zipError" style="color:red; text-transform:capitalize"></small>
              </div>
              <div class="col-md-6 state_hide mb-3">
                <label for="state">Area *</label>
                <select name="state" id="state" class="form-control p-0">
                    <option value="">Select Area</option>  
                    @foreach ($shipping as $item)
                        <option class="data_cost" id="data_cost" data-cost="{{ $item->cost }}" value="{{ $item->city }}">{{ ucfirst($item->city) }}</option>
                    @endforeach
                </select>
                <small id="stateError" style="color:red; text-transform:capitalize"></small>
              </div>
              <div class="col-md-6 mb-3 address_hide">
                <label for="address">Address *</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Address" >
                <small id="addressError" style="color:red; text-transform:capitalize"></small>
              </div> 
              <div class="col-md-6 mb-3 address_hide2">
                <label for="address2">Address 2<span class="text-muted"> ( Optional )</span></label>
                <input type="text" class="form-control" name="address_two" id="address2" value="{{ old('address2') }}" placeholder="Apartment or Holding">
              </div> 
  
              <hr>
              
              {{-- <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
              </div> --}}
              {{-- <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
              </div> --}}

              
  
              {{-- <h4 class="mb-3">Payment</h4>
  
              <div class="d-block mb-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentmethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="">
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="">
                </div>
              </div> --}}
               {{-- <button id="checkout" class="button btn-proceed-checkout mt-3" title="Proceed to Checkout"><span>Continue to checkout</span>
              </button>  --}}
              
            </form>    
           
            {{-- <a href="{{ route('checkout.monetico') }}">Try</a> --}}

               <div  id="paypal-button-container" style="text-align:center;"></div>
                {{-- <div id="monetico" style="margin:auto">
                  <form method="post" action="{{ $url }}">
                    <input type="hidden" name="TPE" value="{{ $fields['TPE'] }}" />
                    <input type="hidden" name="societe" value="ZeFruit" />
                    <input type="hidden" name="lgue" value="FR" />
                    <input type="hidden" name="version" value="3.0" />
                    <input type="hidden" name="reference" value="{{ $fields['reference'] }}" />
                    <input type="hidden" name="date" value="{{ \Carbon\Carbon::now()->format("d/m/Y:H:i:s") }}" />
                    <input type="hidden" name="montant" value="123.45EUR" />
                    <input type="hidden" name="contexte_commande" value="{{ $fields['contexte_commande'] }}" />
                    <input type="hidden" name="texte-libre" value="sadf" />
                    <input type="hidden" name="MAC" value="{{ $fields['MAC'] }}" />
                      <button type="submit"  class="button btn-proceed-checkout mt-3" value="Try it!">Pay With Monitico Payment <img src="{{ asset('monetico.png') }}" style="width: 100px; display:block; margin:auto;"></button>
                  </form>
                </div> --}}
               {{-- <script
                src="https://www.paypal.com/sdk/js?client-id={{ paypalAPI()->client_id }}">
                </script> --}}
               {{-- <script>
                paypal.Buttons({
                createOrder: function(data, actions) {
                  return actions.order.create({
                    application_context: {
                      brand_name : 'Ze Fruit',
                      user_action : 'PAY_NOW',
                    },
                    purchase_units: [{
                      amount: {
                        value: '{{ (cartTotal() > $shipping->city) ? cartTotal() : cartTotal() + $shipping->cost }}',
                        value: '0.01'
                      }
                    }],
                  });
                },
      
                onApprove: function(data, actions) {
      
                  let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      
                  return actions.order.capture().then(function(details) {
                      if(details.status == 'COMPLETED'){
                        return fetch('/api/paypal-capture-payment', {
                                  method: 'post',
                                  headers: {
                                      'content-type': 'application/json',
                                      "Accept": "application/json, text-plain, */*",
                                      "X-Requested-With": "XMLHttpRequest",
                                      "X-CSRF-TOKEN": token
                                  },
                                  body: JSON.stringify({
                                      orderId     : data.orderID,
                                      id : details.id,
                                      status: details.status,
                                      payerEmail: details.payer.email_address,
                                  })
                              })
                              .then(status)
                              .then(function(response){
                                  window.location.href = '/pay-success/';
                              })
                              .catch(function(error) {
                                  window.location.href = '/pay-failed?reason=internalFailure';
                              });
                      }else{
                          window.location.href = '/pay-failed?reason=failedToCapture';
                      }
                  });
                },
      
                onCancel: function (data) {
                    window.location.href = '/pay-failed?reason=userCancelled';
                }
      
                }).render('#paypal-button-container');
      
                function status(res) {
                  if (!res.ok) {
                      throw new Error(res.statusText);
                  }
                  return res;
                } 
              </script> --}}
            
          </div>
          <div class="col-md-5 order-md-2 mb-4" style="padding-top: 20px;">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your Basket &nbsp; </span>
              <span class="badge badge-secondary badge-pill">{{ cartItems()->count() }}</span>
            </h4>

            <ul class="list-group mb-5">

            @foreach (cartItems() as $item)
              <li class="list-group-item" >
                <div class="cart_top_list-align cart_product_details" >
                  <div style="margin-left: 5px; order: 1;">
                    <h6 style="margin-bottom:5px; color: #60be74;" id='product_name'>{{ $item->getproducts->name }}</h6>
                    <div style="padding-bottom:5px; display: block">{!! Str::limit($item->getproducts->short_description, 20) !!}</div>
                    <div style="color: #60be74; font-weight: bold">
                      @if($item->getproducts->display_as == 'sale')
                    {{ floor(round($item->getproducts->price, 2) - ($item->getproducts->discount/100) * round($item->getproducts->price, 2)) }} x {{ $item->qty }}
                    @else 
                    {{ round($item->getproducts->price, 2)  }} x {{ $item->qty }}
                    @endif
                    </div>
                  </div>
                </div>
                <div>
                  <img src="{{ asset('uploads/products') }}/{{ $item->getproducts->image }}" width="50" alt="" style="max-width: 50px;">
                </div>
              </li>
            @endforeach

            <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
              <span>Shipping Cost (BDT)</span>
              <strong> <span id="shipping_cost"></span> ৳</strong>
            </li>

              <li class="list-group-item mb-5" style="display: flex; align-items: center; justify-content: space-between; ">
                <span>Total (BDT)</span>
                <span>
                  <strong id="total">{{ cartTotal() }}</strong><strong> ৳</strong>
                </span>
                {{-- {{ number_format(cartTotal(), 2) }} --}}
              </li>
              {{-- <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                <span>Total (Euro)</span>
                <strong id="totalxx"> {{ (cartTotal() > $shipping->city) ? number_format(cartTotal(), 2) : number_format(cartTotal() + $shipping->cost ?? 0, 2) }}৳</strong>
              </li> --}}
            </ul>

            {{-- <div class="delpi-part">
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle delpi-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Delivery
                  <i class="fa fa-chevron-down delpi-icon" aria-hidden="true"></i>
                </button>
                 <ul class="dropdown-menu delpi-list" aria-labelledby="dropdownMenu2">
                  <li>
                    Delivery
                  </li>
                  <li>
                    Pickup
                  </li>
                </ul> 
              </div>
            </div> --}}
            {{-- <div>
              <select name="order_type" id="type" class="form-control ">
                <option value="delivery">Delivery</option>
                <option value="pickup">Pickup</option>
              </select>
            </div> --}}
            <div>
              {{-- <select name="pickup_address" id="pickup_address" class="form-control" required>
                <option value="">Select address</option>
                @foreach (slot() as $address)
                    <option value="{{ $address->id }}">{{ $address->address }}</option>
                @endforeach
            </select> --}}
            </div>

            <div>
              {{-- <select name="schedule" id="schedule">
                   
              </select> --}}
            </div>


            <div>
              {{-- <select name="time" id="time" class="form-control "">
                @foreach (slot() as $date) 
                   <option value="">{{ \Carbon\Carbon::parse($date->opening_hour)->format('h:i') }} - {{ \Carbon\Carbon::parse($date->opening_hour)->format('h:i') }}</option>
                @endforeach
              </select> --}}
            </div>
  
            {{-- <div class="custom-date-pick">
              <div class="dropdown custom-date-two">
                <button class="btn btn-default dropdown-toggle date-btn" type="button" id="buttonValue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span id="dateCurrentValue"></span>
                  <i class="fa fa-chevron-down date-arrow" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu date-drop" id='drop-menu' aria-labelledby="dropdownMenu2">
                  <li id='today'>
                      g
                  </li>
                  <li id='tomorrow'>
                      w
                  </li>
                  <li id='nextDay'>
                      m
                  </li>
                </ul>
              </div>
  
              <div class="dropDown custom-date-one">
                <button class='value-btn' id="time-menu">
                  <span id='button-value'>8:00 AM - 9:00 AM</span> <span class='button-arrow'><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </button>
                <div class="drop-items" id='times'>
                  <div class="drop-items-inner">
                    <div class="left-item">
                      <div class="arrow"></div>
                      <ul>
                        <li>8:00 AM - 9:00 AM</li>
                        <li>9:00 AM - 10:00 AM</li>
                        <li>10:00 AM - 11:00 AM</li>
                        <li>11:00 AM - 12:00 AM</li>
                        <li>12:00 AM - 1:00 AM</li>
                        <li>1:00 AM - 2:00 AM</li>
                        <li>2:00 AM - 3:00 AM</li>
                        <li>3:00 AM - 4:00 AM</li>
                      </ul>
                    </div>
                    <div class="right-items">
                      <ul>
                        <li>4:00 AM - 5:00 AM</li>
                        <li>5:00 PM - 6:00 PM</li>
                        <li>6:00 PM - 7:00 PM</li>
                        <li>7:00 PM - 8:00 PM</li>
                        <li>8:00 PM - 9:00 PM</li>
                        <li>9:00 PM - 10:00 PM</li>
                        <li>10:00 PM - 11:00 PM</li>
                        <li>11:00 PM - 12:00 PM</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}

            <!-- <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <div class="input-group-append">
                  <button value="Apply Coupon" onclick="discountForm.submit(false)" class="button coupon mt-3" title="Apply Coupon" type="button">
                    <span>Redeem</span>
                  </button>
                </div>
              </div>
            </form> -->
            <h4 class="d-flex justify-content-between align-items-center mb-3 mt-5">
              <span class="text-muted">Payment Information &nbsp; </span>
            </h4>
            <ul class="list-group mb-3">
            
                <li class="list-group-item paymentMethod " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" style="display: flex; align-items: center; justify-content: space-between;">
                  <span><label for="bkash"><input class="paymentMethodTogglerInput" data-target="bkash-block" id="bkash" name="paymentMethod" data-name='bkash' type="radio">&nbsp; bKash</label></span> <img src="https://i.postimg.cc/PqGrtBsz/bkash-logo-835789094-A-seeklogo-com.png" style="width: 50px; height:auto" alt="">
                </li>
                <li class="list-group-item paymentMethod" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile" style="display: flex; align-items: center; justify-content: space-between;">
                  <span><label for="nagad"><input class="paymentMethodTogglerInput"  data-target="nagad-block" id="nagad"  name="paymentMethod" data-name='nagad' type="radio">&nbsp; Nagad</label></span> <img src="https://i.postimg.cc/hjNfdhN6/images.png" style="width: 50px; height:auto" alt="">
                </li>
                <li class="list-group-item paymentMethod"  id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages" style="display: flex; align-items: center; justify-content: space-between;">
                  <span><label for="rocket"><input  class="paymentMethodTogglerInput" data-target="rocket-block"  id="rocket" name="paymentMethod" data-name='rocket' type="radio">&nbsp; Rocket</label></span> <img src="https://i.postimg.cc/C5LSd0xX/dutch-bangla-rocket-logo-B4-D1-CC458-D-seeklogo-com.png" style="width: 50px; height:auto" alt="">
                </li>      
          <div>
            <div id='PaymentErr' class="alert alert-danger hide text-center" role="alert" style="margin-top: 5px;"></div>
            <div class="paymentDetailsBlock" id='bkash-block'>
              <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
              <p>
                Please complete your Rocket Payment at first, then fill up
                the form below. Also note that 1.8% Rocket "SEND MONEY"
                cost will be added with net price. Total amount you need to
                send us at t 1090 <br> <br>
                <span>
                  bKash Personal Number:<span style="font-weight:bold;"> {{ paymentNumber()->bkash }} </span>
                </span>
               </p>
                 
                </li>
                <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                   <span style="font-weight:bold;">bKash Number</span> 
                   <input id="bkash_number" name="bkash_number" value="{{ old('bkash_number') }}" placeholder="017XXXXXXXX" style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text" >
                </li>
                <div id="bkashNumberErr" class="alert alert-danger hide text-center"></div>
                
                <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                  <span style="font-weight:bold;">bKash Transaction ID</span> <input id="bkash_transaction_number" name="bkash_transaction_number" value="{{ old('bkash_transaction_number') }}"  style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text">           
               </li>
               <div id="bkashTransactionNumberErr" class="alert alert-danger hide text-center"></div>

               <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                <span style="font-weight:bold;">Amount</span><input  style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text" id="bkashAmount" name="bkashAmount" value="{{ old('bkashAmount') }}">         
             </li>
             <div id="bkashAmountErr" class="alert alert-danger hide text-center"></div>
            </div>



            <div class="paymentDetailsBlock" id='nagad-block'>
              <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
              <p>
                Please complete your Rocket Payment at first, then fill up
                the form below. Also note that 1.8% Rocket "SEND MONEY"
                cost will be added with net price. Total amount you need to
                send us at t 1090 <br> <br>
                <span>
                  Nagad Personal Number:<span style="font-weight:bold;"> {{ paymentNumber()->nagad }} </span>
                </span>
               </p>
                 
                </li>
                <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                   <span style="font-weight:bold;">Nagad Number</span> <input id="nagad_number" name="nagad_number" value="{{ old('nagad_number') }}" placeholder="017XXXXXXXX" style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text" >
                </li>
                <div id="nagadNumberErr" class="alert alert-danger hide text-center"></div>

                <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                  <span style="font-weight:bold;">Nagad Transaction ID</span> <input id="nagad_transaction_number" name="nagad_transaction_number" value="{{ old('nagad_transaction_number') }}" style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text">
               </li>
               <div id="nagadTransactionNumberErr" class="alert alert-danger hide text-center"></div>

               <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                <span style="font-weight:bold;">Amount</span> <input  style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text" id="nagadAmount" name="nagadAmount" value="{{ old('nagadAmount') }}">
             </li>
             <div id="nagadAmountErr" class="alert alert-danger hide text-center"></div>
            </div>



            <div class="paymentDetailsBlock" id='rocket-block'>
              <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
              <p>
                Please complete your Rocket Payment at first, then fill up
                the form below. Also note that 1.8% Rocket "SEND MONEY"
                cost will be added with net price. Total amount you need to
                send us at t 1090 <br> <br>
                <span>
                  Rocket Personal Number:<span style="font-weight:bold;"> {{ paymentNumber()->rocket }} </span>
                </span>
               </p>
                 
                </li>
                <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                   <span style="font-weight:bold;">Rocket Number</span><input id="rocket_number" name="rocket_number" value="{{ old('rocket_number') }}" placeholder="017XXXXXXXX" style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text">
                </li>
                <div id="rocketNumberErr" class="alert alert-danger hide text-center"></div>

                <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                  <span style="font-weight:bold;">Rocket Transaction ID</span> <input id="rocket_transaction_number" name="rocket_transaction_number" value="{{ old('rocket_transaction_number') }}" style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text">
               </li>
               <div id="rocketTransactionNumberErr" class="alert alert-danger hide text-center"></div>

               <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
                <span style="font-weight:bold;">Amount</span> <input  style="border-radius:10px;outline:none;border:1px solid #d1d1d1; padding:5px " type="text" id="rocketAmount" name="rocketAmount" value="{{ old('rocketAmount') }}">
             </li>
             <div id="rocketAmountErr" class="alert alert-danger hide text-center"></div>

            </div>
            <div class="msg hide" style="text-align: right; color:red; margin:5px"><strong>* </strong>You have to pay minimum 10% of total amount</div>
          </div>
          

 
           <li class="list-group-item" style="display: flex; align-items: center; justify-content: space-between;">
            <span>Your personal data will be used to process your order,
              support your experience throughout this website, and for
              other purposes described in our <a href="">privacy policy.</a></span>
             
         </li>
         <li  class="list-group-item  " style="display: flex; align-items: center; justify-content: space-between;"> 
          <span>
            <input id="condition" class="ms-1" type="checkbox" >
          </span>&nbsp;&nbsp;
            <span>
              I have read and agree to the website terms and conditions *
            </span><br>
            
        </li>
        <li  class="list-group-item  " style="display: flex; align-items: center; justify-content: space-between;"> 
          {{-- <button class="button btn-cart" id="orderNow" style="background-color: black; color:white;" type="submit">Place Order</button> --}}
          
          <button class="btn btn-primary" id="orderNow" disabled>
            <span class="btn-text">Place Order</span>
           {{-- <span id="loader" class="loader d-none">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              Please wait...
           </span> --}}
          </button>
          
        </li>
       
            </ul>
          </div>
          
        </div>
      </div>
      <!-- ===== -->
    </div>
   
  </div>
  <!--End main-container --><!-- Brand Logo Section -->
  
  <!-- Footer -->
@endsection

@section('js')
<script src="../../../js/bootstrap.js">
</script>
<script>
  
  // var shipping_cost;
    // $("#schedule").hide();
    // $("#pickup_address").hide();
  $(document).ready(function(){ 
    
    $("#state").change(function(){
       var shipping_cost = $(this).find(':selected').attr('data-cost');
      
        $('#shipping_cost').html(shipping_cost);
      });
     let cartTotal = "{{ cartTotal() }}";
  
    $("#state").change(function(e){
      // alert(cartTotal);
        $("#shipping").html($(this).find(':selected').attr('data-cost') + ' ৳');
          let shipping = $(this).find(':selected').attr('data-cost');
          let total = parseFloat(cartTotal) + parseFloat(shipping);
          // alert(total);
          if(total){
            $("#total").html(total + '৳');
          }else{
            $("#shipping_cost").html("");
            $("#total").html(cartTotal);
            

          }
          
    });

    $("#paypal-button-container").hide();
    $("#monetico").hide();
    $("#checkout").on('click', function(e){
      e.preventDefault();
      let name = $("#firstname").val();
      let email = $("#email").val();
      let phone = $("#phone").val();
      let address = $("#address").val();
      let address_two = $("#address2").val();
      let country = $("#country").val();
      let state = $("#state").val();
      let zip = $("#zip").val();
      let order_type = $("#type").val();
      let pickup_address = $("#pickup_address").val();
      let pickup_time = $("#schedule").val();
      let pickup_date = $("#pickUpDate").val();

      if(order_type == 'pickup'){
        if(pickup_address == ''){
          $("#pickup_address_error").html('Please select a pickup address');
          return false;
        }

        if(pickup_time == ''){
          $("#pickup_time_error").html('Please select a time');
          return false;
        }
        if(pickup_date == '')
        {
          $("#pickup_date_error").html('Please select a date');
          return false;
        }
      }

      if(name == '')
      {
        $("#firstnameError").html('Enter your name');
      }
      else if(email == '')
      {
        $("#emailError").html('Enter your email');
      }
      else if(phone == '')
      {
        $("#phoneError").html('Enter your phone');
      }
    
      else if(country == '')
      {
        $("#countryError").html('Enter your Country');
      }
      else if(zip == '')
      {
        $("#zipError").html('Enter your postal code');
      }
      else if(state == '')
      {
        $("#stateError").html('Enter Your State'); 
      } 
      else if(address == '')
      {
        $("#addressError").html('Enter your address');
      }   
      else 
      {
        $("#firstname").attr('readonly', true);
        $("#email").attr('readonly', true);
        $("#phone").attr('readonly', true);
        $("#address").attr('readonly', true);
        $("#address2").attr('readonly', true);
        $("#country").attr('readonly', true);
        $("#state").attr('readonly', true);
        $("#zip").attr('readonly', true);
        // $("#checkout").hide(700);
        // $('#paypal-button-container').fadeIn(1000);
        // $('#monetico').fadeIn(1000);

        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

        $.ajax({
          url: "{{ route('order.store') }}", 
          type : "POST", 
          data: {
            shipping_cost : shipping_cost ,
            name : name ,
            email : email, 
            phone : phone, 
            address : address, 
            address_two : address_two, 
            country : country, 
            state:state, 
            zip : zip,
            order_type : order_type,
            pickup_address : pickup_address,
            pickup_time : pickup_time,
            pickup_date   : pickup_date,

          },
          success : function(data)
          {
            let urlId = data;
            let name = $("#firstname").val();

            // after checkout input fields need to be clean
            // $("#email").val('');
            // $("#phone").val('');
            // $("#address").val('');
            // $("#address2").val('');
            // $("#country").val('');
            // $("#state").val('');
            // $("#zip").val('');
            // $("#type").val('');
            // $("#pickup_address").val('');
            // $("#schedule").val('');
            // $("#pickUpDate").val('');

            // $("#checkout").html('<p>Thanks for Checkout</p>');

            // window.location.href = "{{URL::to('/')}}";
            window.location.href = "{{route('pay.success')}}";

          }
        });
      }
    });

      $("#type").change(function(){
        var type = $("#type").val(); 

        if(type == 'pickup')
        {
          // $("#time").show();
          $("#pickup_address").show();

          $(".zip_hide").hide();
          $(".state_hide").hide();
          $(".address_hide").hide();
          $(".address_hide2").hide();
        }else{
          $(".zip_hide").show();
          $(".state_hide").show();
          $(".address_hide").show();
          $(".address_hide2").show();

        }
      })

      $("#pickup_address").change(function(){
        var pickup_address = $("#pickup_address").val();

        if(pickup_address == ""){
          $(".time-date-select").slideUp();
        } else{
          $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
          }); 
  
          $.ajax({
                url: "{{ route('schedule.pickup') }}", 
                type : "POST", 
                data: {
                  pickup_address : pickup_address, 
                },
                success : function(data)
                {
                  $("#schedule").html(data);
                  $(".time-date-select").slideDown();
                  console.log(data);
                }
          });
        }
      });   
  });
</script>

@endsection
