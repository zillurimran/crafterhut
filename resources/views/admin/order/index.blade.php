@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Orders
@endsection

{{-- Menu Active --}}
@section('order.index')
    active
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">All Order</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- Content Start From Here --}}
@section('content')

    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Order</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <p>List of all order</p>
                       <div class="table-responsive">
                        <table id="data_table" class="table table-striped table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Customer Name</th>
                                    <th>Total</th>
                                    <th>Paid Amount</th>
                                    <th>Products</th>
                                    <th>Address</th>
                                    <th>Method of payment</th>
                                    <th>Payment Number</th>
                                    <th>Transaction Number</th>
                                    <th>Order status</th>
                                    <th>Payment status</th> 
                                    <th>Order type</th>
                                    <th>Collection address</th>
                                    <th>Time of collection</th>
                                    <th>Collection date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td>{{ $loop ->index + 1 }}</td>
                                        <td>
                                            {{ ucfirst($order->name) }}
                                        </td>
                                        <td>
                                            <span class="badge badge-light-success badge-pill"> {{ round($order->total_payable, 2) }} ৳</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-success badge-pill"> {{ $order->paid_amount }} ৳</span>
                                        </td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#exampleModalCenter{{ $order->id }}"> 
                                                <i data-feather="eye"></i>
                                                See the products
                                            </a>
                                        </td>
                                        <td>
                                            {{ $order->address }} {{ $order->address_two }}, <br> {{ $order->state }} <br> {{ $order->zip }}, {{ $order->country }}
                                        </td>
                                        <td class="text-danger">
                                            {{ $order->payment_method }}
                                            {{-- @if ($order->payment_method == 'online transaction')
                                                Paypal
                                            @else
                                                Cash On Delivary
                                            @endif --}}
                                        </td>
                                        <td>{{ $order->customer_number }}</td>
                                        <td>{{ $order->transaction_number }}</td>
                                     
                                        <td>
                                            @if ($order->status == 'pending')
                                                <span class="badge badge-light-warning badge-pill">{{ ucfirst($order->status) }}</span>                                                
                                            @elseif($order->status == 'completed')
                                                <span class="badge badge-light-success badge-pill">{{ ucfirst($order->status) }}</span>   
                                            @elseif($order->status == 'cancelled')                                             
                                                <span class="badge badge-light-danger badge-pill">{{ ucfirst($order->status) }}</span>                                               
                                            @endif
                                        </td>
                                        <td>
                                            @if($order->status =='completed')
                                                    <span class="badge badge-light-success badge-pill">Completed</span> 
                                                @else
                                                    <span class="badge badge-light-danger badge-pill">{{ ucfirst($order->payment_status) }}</span>    
                                            @endif 
                                            {{-- {{ ucfirst($order->payment_status) }} --}}
                                        </td>
                                        <td>
                                            {{ ucfirst($order->order_type) }}
                                        </td>
                                        <td>
                                            {{-- @if($order->order_type == 'pickup') --}}
                                            {{ \App\Models\PickupAddress::find($order->pickup_address_id)->address ?? 'N/A' }}
                                            {{-- @else 
                                            Non Applicable
                                            @endif --}}
                                        </td>
                                        <td>
                                            {{-- @if($order->order_type == 'pickup') --}}
                                                    {{ $order->pickup_time ?? 'N/A' }}
                                                {{-- @else 
                                                    Non Applicable
                                            @endif --}}
                                        </td>
                                        <td>
                                            {{-- @if($order->order_type == 'pickup') --}}
                                                {{ \Carbon\Carbon::parse($order->pickup_date)->format('d-M-Y') }}
                                            {{-- @else 
                                                Non Applicable
                                            @endif --}}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                @if ($order->status != 'cancelled')
                                                    <div class="dropdown-menu">
                                                        @if ($order->status != 'completed')
                                                            <a class="dropdown-item" href="{{ route('order.completed', $order->id) }}">
                                                                <i class="mr-50" data-feather='check'></i>
                                                                <span>Mark as Completed</span>
                                                            </a>
                                                        @endif
                                                        <a class="dropdown-item" href="{{ route('order.cancelled', $order->id) }}">
                                                            <i class="mr-50" data-feather='trash'></i>
                                                            <span>Cancel the Order</span>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Products ordered for the order # {{ $order->id }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            @foreach ($order->get_order_list as $item)
                                              <p>
                                                Product : <strong>{{ $item->get_product_info->name ?? "The product no longer exists" }}</strong>
                                              </p>
                                              <p>
                                                Quantity : <strong>{{ $item->qty }}</strong>
                                              </p>
                                              <p>
                                                Price : <strong> {{ $item->price }} ৳</strong>
                                              </p>
                                              <div>
                                                @if ($item->get_product_info)
                                                    <img src="{{ asset('uploads/products') }}/{{ $item->get_product_info->image }}" alt="{{ $item->get_product_info->name }}" width="100px">
                                                @endif
                                              </div>
                                            @endforeach
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @empty
                                    <tr>No order to show</tr>
                                @endforelse  
                            </tbody>
                        </table>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


