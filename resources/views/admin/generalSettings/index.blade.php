@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | General parameters
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">General parameters</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Menu Active --}}
@section('generalSettings')
    active
@endsection

{{-- Main Content --}}
@section('content')
    <div class="row justify-content-center">    
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">General parameters</h4>
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
                    <form class="form form-vertical" action="{{ route('generalSettings.update', $generalSettings->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="{{ $generalSettings->address }}">
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone">Phone number</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone" value="{{ $generalSettings->phone }}">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" value="{{ $generalSettings->email }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <p>Context of the existing header : </p>
                                    <img src="{{ asset('uploads/generalSettings') }}/{{ $generalSettings->header_background }}" style="max-width: 300px" alt="header_background">
                                </div>
                                <div class="form-group">
                                    <label for="header_background">Header Background</label>
                                    <div class="custom-file">
                                        <input type="file" name="header_background" class="custom-file-input" id="header_background">
                                        <label class="custom-file-label" for="header_background">Choose the file</label>
                                    </div>
                                    @error('header_background')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <p>Existing logo : </p>
                                    <img src="{{ asset('uploads/generalSettings') }}/{{ $generalSettings->logo }}" style="max-width: 70px" alt="logo">
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Choose the logo</label>
                                    </div>
                                    @error('logo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <p>Existing favicon : </p>
                                    <img src="{{ asset('uploads/generalSettings') }}/{{ $generalSettings->favicon }}" style="max-width: 70px" alt="favicon">
                                </div>
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <div class="custom-file">
                                        <input type="file" name="favicon" class="custom-file-input" id="favicon">
                                        <label class="custom-file-label" for="favicon">Choose the Favicon</label>
                                    </div>
                                    @error('favicon')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $generalSettings->meta_title }}">
                                    @error('meta_title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control" value="">{{ $generalSettings->meta_description }}</textarea>
                                    @error('meta_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords </label>
                                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="{{ $generalSettings->meta_keywords }}">
                                    @error('meta_keywords')
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
@endsection
