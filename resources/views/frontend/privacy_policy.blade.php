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
                            <div class="row" style="display:flex;">
                                <div class="col-md-8" style="margin: auto">
                                    <p>
                                        When you sign up for or use ZEEFRUIT, you give us certain
                                        information voluntarily. This includes your name, email address,
                                        phone number, profile photo, Pins, comments, and any other
                                        information you give us. You can also choose to share with

                                        us location data or photos. If you buy something on ZEEFRUIT, we
                                        collect payment information, contact information (address and
                                        phone number) and details of what you bought. If you buy
                                        something for someone else on ZEEFRUIT, we collect their
                                        delivery details and contact information.

                                        If you link your Facebook or Google account or accounts from
                                        other third party services to ZEEFRUIT, we also get information
                                        from those accounts (such as your friends or contacts). The
                                        information we get from those services depends on your
                                        settings and their privacy policies, so please check what those
                                        are.
                                    </p>
                                </div>
                            </div>
                            <a style="margin-top:20px;" class="button btn-proceed-checkout mt-3" title="Continue Shopping" href="{{ url('/') }}"><span>Continue Shopping</span>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection