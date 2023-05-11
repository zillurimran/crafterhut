@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | User Dashboard
@endsection

@section('orders')
    current
@endsection

@section('css')
    <style>
        .table-fix-size{
            max-height: 500px;
            margin-bottom: 6rem;
        }
    </style>
@endsection


@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
            <section class="col-sm-9 col-xs-12">
                <div class="col-main">
                    <div class="dashboard">
                        <div class="welcome-msg"> <strong>Hello, {{ Auth::user()->name }}</strong>
                        </div>
                        <div class="recent-orders">
                            <div class="title-buttons"><strong>Recent order</strong> <a href="#" style="opacity: 0">View All</a></div>
                            <div class="table-responsive table-fix-size">
                                <table class="data-table" id="my-orders-table">
                                    <thead>
                                        <tr class="first last">
                                        <th>ORDER #</th>
                                        <th>Date</th>
                                        <th>ADRESSE</th>
                                        <th><span class="nobr">PRICE</span></th>
                                        <th>STATUS</th>
                                        {{-- <th>&nbsp;</th> --}}
                                        <th>Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr class="first odd">
                                                <td>#{{ $order->id }}</td>
                                                <td>{{ $order->created_at->format('d M, y') }}</td>

                                                @if($order->address=='N/A' ||$order->address_two=='N/A')
                                                    <td>{{ \App\Models\PickupAddress::find($order->pickup_address_id)->address ?? 'N/A' }}</td>
                                                @else
                                                    <td>{{ ucfirst($order->address) }}, {{ ucfirst($order->address_two) }}</td>
                                                @endif
                                                
                                                <td><span class="price">{{ $order->total_payable }}৳</span></td>
                                                <td><em>{{ $order->status }}</em></td>
                                                <td>
                                                    <a target="_blank" href="{{ route('generatePDF', $order->id) }}" class="button subscribe">Download</a>
                                                </td>
                                                {{-- <td class="a-center last">
                                                    <span class="nobr">
                                                        <a href="#">View Order</a>
                                                        <span class="separator">|</span>
                                                        <a href="#">Reorder</a>
                                                    </span>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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