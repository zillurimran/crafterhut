@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Delivery Policies
@endsection

{{-- Menu Active --}}
@section('deliveryPolicy.index')
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
                    <li class="breadcrumb-item active">Delivery Policies</li>
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
                        <h4 class="card-title">Set Delivery Terms & Conditions</h4>
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
                        <form class="form form-vertical" action="{{ route('delivery.policy.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="category">Select a category</label>
                                        <select name="category_id" id="category" class="form-control">
                                            <option>-Select category-</option>
                                             @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ ucfirst($category->name)  }}</option>
                                             @endforeach
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="delivery_time">Delivery within - day(s)</label>
                                        <input type="text" name="delivery_time" id="delivery_time" class="form-control" placeholder="Example: 2-5 days" value={{ old('delivery_time') }}>
                                        @error('delivery_time')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="delivery_type">Cash on delivery availability</label>
                                        <input type="text" name="delivery_type" id="delivery_type" class="form-control" placeholder="Example: available" value={{ old('delivery_type') }}>
                                        @error('delivery_type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="return_time">Return within - day(s)</label>
                                        <input type="text" name="return_time" id="return_time" class="form-control" placeholder="Example: 7 days" value="{{ old('return_time') }}">
                                        @error('return_time')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="warranty">Warranty availability</label>
                                        <input type="text" name="warranty" id="warranty" class="form-control" placeholder="Example: not available" value="{{ old('warranty') }}">
                                        @error('warranty')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="delivery_areas">Delivery Areas</label>
                                        <input type="text" name="delivery_areas"  class="form-control" placeholder="Example: dhaka, banani" value="{{ old('delivery_areas') }}">
                                        @error('warranty')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Add Policy</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection