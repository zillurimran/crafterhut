@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Delivery Policy
@endsection

{{-- Menu Active --}}
@section('deliveryPolicy.list')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">All Policies</li>
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
                        <h4 class="card-title">Delivery Policy</h4>
                        <div class="alert alert-success d-none" id="successAlert"></div>
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                         
                    </div>
                    
                    <div class="card-body">
                        <p class="card-text">
                            List of all delivery policies
                        </p>
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Category Name</th>
                                        <th>Delivery Time within</th>
                                        <th>Cash on Delivery</th>
                                        <th>Return Time within</th>
                                        <th>Warranty</th>
                                        <th>Delivery Areas</th>
                                        <th>Actions</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allPolicies as $policy)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            {{ $policy->name }}
                                        </td>
                                        <td>
                                            {{ $policy->delivery_time }}
                                        </td>
                                        <td>
                                            @if($policy->delivery_type == 'available')
                                                <span class="badge badge-light-primary">{{ ucwords($policy->delivery_type) }}</span>
                                            @else
                                                <span class="badge badge-light-warning">{{ ucwords($policy->delivery_type) }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $policy->return_time }}
                                        </td>
                                        <td>
                                            @if($policy->warranty == 'available')
                                                <span class="badge badge-light-primary"> {{ ucwords($policy->warranty) }}</span>
                                            @else
                                                <span class="badge badge-light-warning"> {{ ucwords($policy->warranty) }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ ucwords($policy->delivery_areas) }}
                                        </td>
   
                                         <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#updateDeliveryPolicyModal{{ $policy->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Edit</span>
                                                    </a>
                                                </div>
                                            </div> 
                                         </td> 
                                    </tr>

                                    {{-- Modal --}}
                                    <div class="modal fade" id="updateDeliveryPolicyModal{{ $policy->id }}" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title">Update delivery policy</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                
                                                <form action="{{ route('deliveryPolicy.update', $policy->id) }}" method="POST" class="form-group">
                                                    
                                                    @csrf 
                                                    
                                                    <div class="row">
                                                        {{-- <div class="col-12">
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
                                                            </div> --}}
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="delivery_time">Delivery within - day(s)</label>
                                                                <input type="text" name="delivery_time" id="delivery_time" class="form-control" placeholder="Example: 2-5 days" value='{{ $policy->delivery_time }}'>
                                                                @error('delivery_time')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="delivery_type">Cash on delivery availability</label>
                                                                <input type="text" name="delivery_type" id="delivery_type" class="form-control" placeholder="Example: available/ not avilable" value='{{ $policy->delivery_type }}'>
                                                                @error('delivery_type')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="return_time">Return within - day(s)</label>
                                                                <input type="text" name="return_time" id="return_time" class="form-control" placeholder="Example: 7 days" value="{{ $policy->return_time }}">
                                                                @error('return_time')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="warranty">Warranty availability</label>
                                                                <input type="text" name="warranty" id="warranty" class="form-control" placeholder="Example: not available" value="{{ $policy->warranty }}">
                                                                @error('warranty')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="delivery_areas">Delivery Areas</label>
                                                                <input type="text" name="delivery_areas"  class="form-control" placeholder="Example: dhaka, banani" value="{{ $policy->delivery_areas }}">
                                                                @error('warranty')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Update Policy</button>
                                                        </div>
                                                    </div>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
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

