@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | User Dashboard
@endsection

@section('orders')
    current
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
       .view-message__row{
            display: flex;
        }

        .view-message__col{
            margin-left: auto;
            margin-right: auto;
        }

        .view-message{
            padding: 8rem 0;
        }

        .view-message .view-message__image {
            max-width:100%;
            object-fit: cover;
        }

        .view-message.view-message--success .view-message__image {
            filter: drop-shadow(0 5px 15px rgba(240, 196, 25, 0.3))
        }

        .view-message.view-message--error .view-message__image {
            filter: drop-shadow(0 5px 15px rgba(255, 93, 93, 0.3))
        }

        .view-message .view-message__title {
            font-size: 5rem;
            margin: 3rem 0 1rem;
        }

        .view-message.view-message--success .view-message__title {
            color: #4fba6f;
        }

        .view-message.view-message--error .view-message__title {
            color: #ff5d5d;
        }

        .view-message .view-message__title__icon {
            font-size: 3rem;
        }

        .view-message .view-message__text {
            font-size: 1.8rem;
            margin-bottom: 2rem;
        }

        .view-message__btn{
            display: inline-block;
            padding: 1rem 2rem;
            color: #fff;
            font-size: 2rem;
            background-color: #4fba6f;
            text-decoration: none;
            transition: all ease-in-out .3s;
        }
        .view-message__btn:hover,
        .view-message__btn:focus{
            text-decoration: none;
        }

        .view-message.view-message--success .view-message__btn:hover {
            color: #fff;
            background-color: #222;
        }

        .view-message.view-message--error .view-message__btn {
            color: #fff;
            background-color: #222;
        }

        .view-message.view-message--error .view-message__btn:hover {
            color: #fff;
            background-color: #01362e;
        }

        @media screen and (max-width: 667px){
            .view-message .view-message__image {
                max-width: 4rem;
            }
            .view-message .view-message__title {
                font-size: 2rem;
                margin: 1rem;
            }
            .view-message .view-message__title__icon {
                font-size: 1.3rem;
            }
            .view-message .view-message__text {
                font-size: 1.1rem;
            }
        }
   </style>
@endsection
@php
    $order = \App\Models\Order::latest()->first();
@endphp

@section('content')
    <div class="main-container">
        <div class="main container">
            <div class="row view-message__row">
                <div class="col-lg-8 view-message__col">
                    @if(session('success'))
                        <div class="view-message view-message--success text-center py-5">
                            <img src="{{asset('frontend_assets/assets/images/message/success.png')}}" alt="success" class="view-message__image">
                            <h3 class="view-message__title">
                                Order Success <i class="far fa-check-circle view-message__title__icon"></i>
                            </h3>
                            <p class="view-message__text">{{ session('success') }}</p>
                            <a target="_blank" href="{{ route('frontend.myOrders') }}" class="view-message__btn">View Orders</a>
                        </div>
                    @endif
                    @if(session('warning'))
                        <div class="view-message view-message--error text-center py-5">
                            <img src="{{asset('frontend_assets/assets/images/message/error.png')}}" alt="error" class="view-message__image">
                            <h3 class="view-message__title">
                                Payment is Not Success <i class="fas fa-exclamation-circle view-message__title__icon"></i>
                            </h3>
                            <p class="view-message__text">{{ session('warning') }}</p>
                            <a href="{{ url('/') }}" class="view-message__btn">Continue Shopping</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection