@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ ucfirst($category->name )}}
@endsection

@section('categoryCreate')
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
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Category</a></li>
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
                    <h4 class="card-title">Publishing category</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name @if ($category->name == 'BOX DE FRUITS') (This category name is not editable) @endif </label>
                                    <input type="text" value="{{ $category->name }}" @if ($category->name == 'BOX DE FRUITS')
                                        readonly
                                    @endif id="name" class="form-control" name="name">
                                    @error('name')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Existing image :</label>
                                    <br>
                                    <img src="{{ asset('uploads/categories/') }}/{{ $category->image }}" width="100" alt="No Image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose the file</label>
                                        @error('image')
                                            <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
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