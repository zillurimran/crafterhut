@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Color settings
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Administrator Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Color settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Menu Active --}}
@section('colorSettings')
    active
@endsection

{{-- Main Content --}}
@section('content')
    <div class="row justify-content-center">    
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Color settings</h4>
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
                    <form class="form form-vertical" action="{{ route('colorSettings.update', $colorSettings->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="brand_color">Theme color</label>
                                    <input type="color" name="brand_color" id="brand_color" class="form-control" value="{{ $colorSettings->brand_color }}">
                                    @error('brand_color')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="sub_color">Sub-theme color</label>
                                    <input type="color" name="sub_color" id="sub_color" class="form-control" value="{{ $colorSettings->sub_color }}">
                                    @error('sub_color')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="footer_background">Background of the footer section</label>
                                    <input type="color" name="footer_background" id="footer_background" class="form-control" value="{{ $colorSettings->footer_background }}">
                                    @error('footer_background')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light m-auto">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
