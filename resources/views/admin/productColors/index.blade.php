@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ ucfirst($product->name )}}'s Colours
@endsection

{{-- Menu Active --}}
@section('productList')
    active
@endsection

@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">{{ ucfirst($product->name )}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section id="basic-vertical-layouts">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add {{ ucfirst($product->name."'s" )}} color</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Add {{ ucfirst($product->name )}}'s Colors
                    </p>

                    <form action="{{ route('productColorImage.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="product_id" value={{ $product->id }}>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="customFile">Product image</label>
                                    <div class="custom-file">
                                        <input type="file" name="product_color_image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose the file</label>
                                    </div>
                                    @error('product_color_image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection