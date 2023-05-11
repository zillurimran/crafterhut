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
                     <li class="breadcrumb-item active">List of users
                    </li> 
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        {{-- <p>List of all orders</p> --}}
                        <div class="table-responsive">
                            <table id="data_table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Total orders</th>
                                        <th>Total amount spent</th>
                                        <th>Registered at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr> 
                                           
                                            <td>{{ $loop ->index + 1 }}</td>
                                            <td>{{ ucfirst($user->name) }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                {{ \App\Models\Order::where('user_id', $user->id)->where('payment_status', 'paid')->get()->count() }}
                                            </td>
                                            <td>
                                                 {{ round(\App\Models\Order::where('user_id', $user->id)->where('payment_status', 'paid')->sum('total_payable'), 2) }} ৳
                                            </td>
                                            <td>
                                                {{ $user->created_at->format('d M, Y') }}
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('user.details', $user->id) }}">
                                                            <i data-feather='eye' class="mr-50"></i>
                                                            <span>Details</span>
                                                        </a>
                                                        <a class="dropdown-item" onclick="alert('Are you sure? All the informations of this user will be permanantly deleted!')" href="{{ route('user.delete', $user->id) }}">
                                                            <i class="mr-50" data-feather='trash'></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
