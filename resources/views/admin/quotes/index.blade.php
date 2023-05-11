@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Coupons
@endsection

{{-- Menu Active --}}
@section('quotes.index')
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
                    <li class="breadcrumb-item active">Coupons</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- Content Start From Here --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Coupons</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            List of all coupons
                        </p>
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Email :</th>
                                        <th>Telephone</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quotes as $coupon)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">
                                                @if(\App\Models\Product::where('id', $coupon->product_id)->exists())
                                                    <a target="_blank" href="{{ route('frontend.details', \App\Models\Product::find($coupon->product_id)->slug) }}">
                                                        {{ \App\Models\Product::where('id', $coupon->product_id)->first()->name }}
                                                    </a>
                                                    @else 
                                                    {{ 'Product Deleted' }}
                                                    @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ strtoupper($coupon->name) }}</span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ $coupon->emailk }}</span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ $coupon->phone }}</span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ $coupon->message ?? 'No message' }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="mailto:{{ $coupon->emailk }}" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Send a quote</span>
                                                    </a>
                                                
                                                        <a class="dropdown-item" href="{{ route('quotes.destroy', $coupon->id) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Delete</span>
                                                        </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection