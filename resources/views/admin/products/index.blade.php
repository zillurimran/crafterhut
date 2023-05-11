@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Product
@endsection

{{-- Menu Active --}}
@section('productList')
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
                    <li class="breadcrumb-item active">Products</li>
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
                        <h4 class="card-title">Products</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <p>List of all products</p>
                        <table id="data_table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Categories</th>
                                    <th>Image</th>
                                    <th>Actions</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $item)
                                @php
                                // dd(round($item->price/(5.5/100 + 1),2));
                                    // Price with 5.5% tax1
                                    $price = round($item->price/ (5.5/100 + 1), 2);
                                    
                                @endphp
                                    <tr>
                                        <td>{{ $loop ->index + 1 }}</td>
                                        <td>{{ ucfirst($item->name) }}</td>
                                        <td>{{  $price }} ৳</td>
                                        <td>{{ $item->qty }} {{ $item->qty_in }}</td>
                                        <td>
                                            @if ($item->status == 'hide')
                                                <span class="badge badge-light-warning">Hidden</span>
                                            @else
                                                <span class="badge badge-light-primary">View</span>
                                            @endif
                                        </td>
                                        <td>{{ ucfirst($item->getCategory->name) ?? '' }}</td>
                                        <td><img src="{{ asset('uploads/products') }}/{{ $item->image }}" width="100" alt="product-image"></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"     width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('products.show', $item->id) }}">
                                                        <i class="mr-50" data-feather='eye'></i>
                                                        <span>See</span>
                                                    </a>
                                                    @if ($item->name != 'Votre box personnalisée')
                                                        @if ($item->status == 'hide')
                                                            <a class="dropdown-item" href="{{ route('products.status', $item->id) }}">
                                                                <i data-feather='eye' class="mr-50"></i>
                                                                <span>View</span>
                                                            </a>
                                                        @else 
                                                            <a class="dropdown-item" href="{{ route('products.status', $item->id) }}">
                                                                <i data-feather='eye-off' class="mr-50"></i>
                                                                <span>Hide</span>
                                                            </a>
                                                        @endif
                                                    @endif
                                                    <a class="dropdown-item" href="{{ route('add.product.color', $item->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Add Products Color</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('products.edit', $item->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Edit</span>
                                                    </a>
                                                    @if ($item->getMultipleImages->count() > 0)
                                                        <a class="dropdown-item" href="{{ route('update.multiple', $item->id) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            <span>Editing multiple images</span>
                                                        </a>
                                                    @endif
                                                    @if ($item->name != 'Votre box personnalisée')    
                                                        <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                                                            {{ method_field('DELETE') }}
                                                            @csrf 
                                                            <a class="dropdown-item" href="" onclick="event.preventDefault(); this.closest('form').submit();">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                                <span>Delete</span>
                                                            </a>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @empty
                                    <tr>No products to display</tr>
                                @endforelse  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


