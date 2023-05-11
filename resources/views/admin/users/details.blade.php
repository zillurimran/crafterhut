@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Dashboard
@endsection

{{-- Menu Active --}}
@section('user.index')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li> --}}
                     <li class="breadcrumb-item active">User details
                    </li> 
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')

    {{-- User Info --}}
    <section class="app-user-view">
        <div class="row">
            <!-- User Card starts-->
            <div class="col-xl-8 col-lg-8 col-md-7 m-auto">
                <div class="card user-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                <div class="user-avatar-section">
                                    <div class="d-flex justify-content-start align-items-center">
                                        @if ($user->profile_photo_path )
                                            <img class="img-fluid rounded" src="{{ asset('uploads/users') }}/{{ $user->profile_photo_path }}" height="104" width="104" alt="User avatar"/>
                                        @else 
                                            <img class="img-fluid rounded" src="{{ asset('uploads/users/default.png') }}" height="104" width="104" alt="User avatar"/>
                                        @endif
                                        <div class="d-flex flex-column ml-1">
                                            <div class="user-info mb-1">
                                                <h4 class="mb-0">{{ ucfirst($user->name) }}</h4>
                                                <span class="card-text">{{ $user->email }}</span>
                                            </div>
                                            {{-- <div class="d-flex flex-wrap">
                                                <a href="" class="btn btn-primary">Edit</a>
                                                <button class="btn btn-outline-danger ml-1">Delete</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                <div class="user-info-wrapper">
                                    <div class="d-flex flex-wrap my-50">
                                        <div class="user-info-title">
                                            <i data-feather="star" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Role</span>
                                        </div>
                                        <p class="card-text mb-0">: {{ ucfirst($user->role) }}</p>
                                    </div>
                                    <div class="d-flex flex-wrap my-50">
                                        <div class="user-info-title">
                                            <i data-feather="check" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Status</span>
                                        </div>
                                        @if ($user->email_verified_at != null)
                                        <p class="card-text text-success mb-0">: Checked</p>
                                        @else
                                        <p class="card-text text-danger mb-0">: Not verified</p>
                                        @endif
                                    </div>
                                    <div class="d-flex flex-wrap my-50">
                                        <div class="user-info-title">
                                            <i data-feather='arrow-up-circle' class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Total orders</span>
                                        </div>
                                        <p class="card-text mb-0">: {{ $orders->count() }}</p>
                                    </div>
                                    <div class="d-flex flex-wrap my-50">
                                        <div class="user-info-title">
                                            <i data-feather='cast' class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Registered</span>
                                        </div>
                                        <p class="card-text mb-0">: {{ $user->created_at->format('d M y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /User Card Ends-->
        </div>
    </section>

    {{-- Invoice table --}}
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-xl-11 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Invoice</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <p>List of all invoices</p>
                        <table id="data_table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Ordered by</th>
                                    <th>Total</th>
                                    <th>Products</th>
                                    <th>Address</th>
                                    <th>Method of payment</th>
                                    <th>Order status</th>
                                    <th>Order status</th> 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    @if($order->payment_status != 'not paid')
                                    <tr>
                                        <td>{{ $loop ->index + 1 }}</td>
                                        <td>
                                            {{ ucfirst($order->ordered_by->name) }}
                                        </td>
                                        <td>
                                            <span class="badge badge-light-success badge-pill"> {{ round($order->total_payable, 2) }}৳</span>
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
                                        <td>
                                            @if ($order->payment_method == 'online transaction')
                                                Paypal
                                            @endif
                                        </td>
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
                                            {{ ucfirst($order->payment_status) }}
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
                                                                <span>Mark as completed</span>
                                                            </a>
                                                        @endif
                                                        <a class="dropdown-item" href="{{ route('order.cancelled', $order->id) }}">
                                                            <i class="mr-50" data-feather='trash'></i>
                                                            <span>Cancel the order</span>
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('generatePDF', $order->id) }}">
                                                            <i class="mr-50" data-feather='trash'></i>
                                                            <span>Download the invoice</span>
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
                                                    Product : <strong>{{ $item->get_product_info->name }}</strong>
                                                </p>
                                                <p>
                                                    Quantity : <strong>{{ $item->qty }}</strong>
                                                </p>
                                                <p>
                                                    Price : <strong> {{ $item->price }}৳</strong>
                                                </p>
                                            @endforeach
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @empty
                                    <tr>No order to show</tr>
                                @endforelse  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection