@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Edit
@endsection

@section('couponEdit')
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
                    <li class="breadcrumb-item"><a href="{{ route('coupons.index') }}">Coupons</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edition Coupon</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('coupons.update', $coupon->id) }}"  class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ ucfirst($coupon->name) }}" id="name" class="form-control" name="name">
                                    @error('name')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="discount">Percentage discount</label>
                                    <input type="text" value="{{ ucfirst($coupon->discount) }}" id="discount" class="form-control" name="discount">
                                    @error('discount')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <div class="form-group">
                                    <label for="expired_at">Expired at</label>
                                    <input class="form-control" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" type="date" name="expired_at" id="expired_at" value="{{ $coupon->expired_at }}">
                                    @error('expired_at') 
                                        <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection