@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ ucfirst($blogCategory->name )}}
@endsection

@section('blogCategoriesList')
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
                    <li class="breadcrumb-item"><a href="{{ route('blogCategories.index') }}">Blog Category</a></li>
                    <li class="breadcrumb-item active">Edit {{ ucfirst($blogCategory->name )}}</li>
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
                    <h4 class="card-title">Change the blog category</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('blogCategories.update', $blogCategory->id) }}" enctype="multipart/form-data" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name of the category</label>
                                    <input type="text" value="{{ $blogCategory->name }}" id="name" class="form-control" name="name">
                                    @error('name')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                <a href="{{ route('blogCategories.index') }}" class="btn btn-info mr-1 waves-effect waves-float waves-light">Back to the past</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection