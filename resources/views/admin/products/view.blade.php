@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Product
@endsection

{{-- Menu Active --}}
@section('productList')
    active
@endsection

@php
                                    
// Price with 5.5% tax1
$price = round($product->price/ (5.5/100 + 1), 2);
@endphp


{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Product</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst($product->name) }}</li>
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
            <div class="col-lg-11 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>See {{ ucfirst($product->name) }}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ ucfirst($product->name) }}</td>
                                </tr>
                                <tr>
                                    <th>SKU</th>
                                    <td>{{ ucfirst($product->sku) }}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{ ucfirst($product->getCategory->name) }}</td>
                                </tr>
                                <tr>
                                    <th>Subcategory</th>
                                    <td>
                                        
                                        @foreach ($product->getSubCategories as $subcategory)
                                            {{ $subcategory->getSubcategoryName->name }},
                                        @endforeach

                                    </td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{ asset('uploads/products') }}/{{ $product->image }}" width="100" alt="product-image"></td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $price }}৳</td>
                                </tr>
                                @if ($product->qty)
                                    <tr>
                                        <th>Quantity</th>
                                        <td>{{ $product->qty }}</td>
                                    </tr>
                                @endif
                                @if ($product->qty_in)
                                    <tr>
                                        <th>Quantity in</th>
                                        <td>{{ $product->qty_in }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>View as</th>
                                    <td>{{ ucfirst($product->display_as) }}</td>
                                </tr>

                                @if ($product->display_as == 'sale')
                                    <tr>
                                        <th>Discount</th>
                                        <td>{{ $product->discount ?? 0 }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Till Shed</th>
                                        <td>{{ $product->discount_till ?? 'null' }}</td>
                                    </tr>
                                @endif

                                <tr>
                                    <th>Brief Description</th>
                                    <td>{!! ucfirst($product->short_description) !!}</td>
                                </tr>
                                <tr>
                                    <th>Multiple Images </th>
                                    <td>
                                        @forelse ($product->getMultipleImages as $item)
                                            <img src="{{ asset('uploads/products') }}/{{ $item->multiple_image }}" style="margin-right: 8px;" width="100" alt="product-image">
                                        @empty
                                        No multiple images 
                                        @endforelse
                                    </td>
                                </tr>
                                <tr>
                                    <th>Type of product</th>
                                    <td>
                                        @if ($product->type == 'forsale')
                                            For sale
                                        @elseif ($product->type == 'requestquote')
                                        Request a quote
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-primary mt-1" href="{{ route('products.index') }}">Going backwards</a>
                        <a class="btn btn-info mt-1" href="{{ route('products.edit', $product->id) }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


