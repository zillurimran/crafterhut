@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Edit
@endsection

@section('subcategory')
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
                    <li class="breadcrumb-item"><a href="{{ route('subCategories.index') }}">Subcategory</a></li>
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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change the subcategory</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('subCategories.update', $subCategory->id) }}" enctype="multipart/form-data" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ ucfirst($subCategory->name) }}" id="name" class="form-control" name="name">
                                    @error('name')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <div class="form-group">
                                    <label for="category_id">Select a category</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="{{ $subCategory->category_id }}">{{ $subCategory->getCategory->name }}</option>
                                        @foreach ($categories as $category)
                                            @if($category->name != $subCategory->getCategory->name)
                                                <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_id') 
                                        <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection