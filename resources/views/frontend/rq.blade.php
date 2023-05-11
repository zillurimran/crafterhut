@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | User Dashboard
@endsection

@section('orders')
    current
@endsection


@section('content')

    <div class="main-container" style="height: 200px !important;">
        <div class="main container" style="height: 200px !important;">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="card" style="">
                        <div class="card-body">
                            <h5 class="card-title">                    
                                @if(session('success'))
                                    <div> 
                                        <strong style="color:green; text-align: center;">
                                            {{ session('success') }}
                                        </strong>
                                    </div>
                                @endif  
                                @if(session('warning'))
                                <div>
                                    <strong style="color:red; text-align: center;">
                                        {{ session('warning') }}
                                    </strong>
                                </div>
                            @endif  
                            <h5 class="text-center">REQUEST A QUOTE</h5> 
                            <h6>Product : {{ ucfirst($product->name) }}</h6>
                            <p>
                                <strong>Estimated price : {{ round($product->price, 2) }}৳</strong>
                            </p>
                                <div class="col-sm-12 col-md-12 order-md-1" style="padding-top: 20px;">
                                    <form action="{{ route('quotes.store') }}" method="POST">
                                        @csrf
                                   
                                        <div class="mb-3" style="margin-bottom: 10px;">
                                            {{-- <label for="address">Nom</label> --}}
                                            <input required type="text" class="form-control" name="name" placeholder="Enter name">
                                      </div>
                                        <div class="mb-3" style="margin-bottom: 10px;">
                                            {{-- <label for="address">Email</label> --}}
                                            <input required type="text" class="form-control" name="phone" placeholder="Enter phone">
                                      </div>
                                        <div class="mb-3" style="margin-bottom: 10px;">
                                            {{-- <label for="address">Phone</label> --}} 
                                            <input type="email" required class="form-control" name="emailk" placeholder="Enter email">
                                      </div>
                                        <div class="mb-3" style="margin-bottom: 10px;">
                                            <textarea name="message" class="form-control" placeholder="Enter message (Optional)"></textarea>
                                      </div>
                                      <input type="hidden" name="product_id" value="{{ $product->id }}">
                                      
                                      <button style="margin-top:20px;" class="button btn-proceed-checkout mt-3" title="Proceed to Checkout"><span>Request a quote</span>
                                      </button> 
                                </div>
                             
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection