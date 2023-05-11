@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Custom Box
@endsection

{{-- Menu Active --}}
@section('customBoxIndex')
    active
@endsection 


{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('custom_box.index') }}">Custom Box</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst($box->name) }}</li>
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
                        <h4>View {{ ucfirst($box->name) }}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ ucfirst($box->name) }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ ucfirst($box->title) }}</td>
                                </tr>  
                                <tr>
                                    <th>Product List</th>
                                    <td>{!! ucfirst($box->product_list) !!}</td>
                                </tr>   
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $box->price }}৳</td>
                                </tr> 
                                <tr>
                                    <th>Net weight of fruit</th>
                                    <td>{{ $box->weight }}</td>
                                </tr> 

                                <tr>
                                    <th>Youtube link</th>
                                    <td>{{ $box->youtube_link }}</td>
                                </tr> 
                                
                                <tr>
                                    <th>Quantity</th>
                                    <td>{{ $box->stock }}</td>
                                </tr> 
                                <tr>
                                    <th>Quantity In</th>
                                    <td>{{ $box->stock_in }}</td>
                                </tr>  
                                <tr>
                                    <th>Short Description</th>
                                    <td>{{ ucfirst($box->short_description) }}</td>
                                </tr>
                                <tr>
                                    <th>Long Description</th>
                                    <td>{!! ucfirst($box->short_description) !!}</td>
                                </tr> 
                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{ asset('uploads/custom_box') }}/{{ $box->image }}" width="100" alt="box-image"></td>
                                </tr>
                                <tr>
                                    <th>Feature Image</th>
                                    <td><img src="{{ asset('uploads/custom_box') }}/{{ $box->feature_image }}" width="100" alt="box-image"></td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-primary mt-1" href="{{ route('custom_box.index') }}">Return Back</a>
                        <a class="btn btn-info mt-1" href="{{ route('custom_box.edit', $box->id) }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


