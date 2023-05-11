@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Payment Numbers
@endsection

{{-- Menu Active --}}
@section('paymentNumbers.index')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator's dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Payment Numbers</li>
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
                        <h4 class="card-title">Update Bkash/ Nagad/ Rocket number</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
        
                        {{-- @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach --}}
        
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('update.payment.numbers', $number->id) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Bkash Number</label>
                                        <input type="text" name="bkash" id="bkash" class="form-control" placeholder="Enter bkash number" value="{{ $number->bkash }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Nagad Number</label>
                                        <input type="text" name="nagad" id="nagad" class="form-control" placeholder="Enter nagad number" value="{{ $number->nagad }}"">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Rocket Number</label>
                                        <input type="text" name="rocket" id="rocket" class="form-control" placeholder="Enter rocket number" value="{{ $number->rocket }}"">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection