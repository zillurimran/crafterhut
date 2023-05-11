@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Add Banner
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Create a banner</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Menu Active --}}
@section('bannersCreate')
    active
@endsection

{{-- Main Content --}}
@section('content')
    <div class="row justify-content-center">    
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create a banner</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">{{ session('warning') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('banners.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title of the banner</label>
                                    <input type="text" id="title" class="form-control" value="{{ old('title') }}" name="title" placeholder="Enter title">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subtitle">Subtitle of the banner</label>
                                    <input type="text" id="subtitle" class="form-control" value="{{ old('subtitle') }}" name="subtitle" placeholder="Enter subtitle">
                                    @error('subtitle')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description">Brief description of the banner</label>
                                    <textarea id="short_description" class="form-control" value="{{ old('short_description') }}" name="short_description" placeholder="Enter short description"></textarea>
                                    @error('short_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_url">Url of the button</label>
                                    <input type="text" id="button_url" class="form-control" value="{{ old('button_url') }}" name="button_url" placeholder="Enter button url">
                                    @error('button_url')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="customFile">Image of the banner</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose the file</label>
                                    </div>
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
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
