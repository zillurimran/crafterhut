@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Social icon settings
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Administrator's dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Social icon settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Menu Active --}}
@section('socialiconsettings')
    active
@endsection

{{-- Main Content --}}
@section('content')
    <div class="row justify-content-center">    
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Social icon settings</h4>
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
                    <form class="form form-vertical" action="{{ route('socialIconSettings.update', $socialiconsettings->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="fb"> Facbook Icon</label>
                                    <input type="text" name="fb" id="fb" class="form-control" placeholder="Enter fb icon" value="{{ $socialiconsettings->fb }}">
                                    @error('fb')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="fb_url">Facbook Url</label>
                                    <input type="text" name="fb_url" id="fb_url" class="form-control" placeholder="Enter fb url" value="{{ $socialiconsettings->fb_url }}">
                                    @error('fb_url')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="instagram"> Instagram Icon</label>
                                    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Enter instagram icon" value="{{ $socialiconsettings->instagram }}">
                                    @error('instagram')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="instagram_url"> Instagram Url</label>
                                    <input type="text" name="instagram_url" id="instagram_url" class="form-control" placeholder="Enter instagram url" value="{{ $socialiconsettings->instagram_url }}">
                                    @error('instagram_url')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="twitter"> Twitter Icon</label>
                                    <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Enter twitter icon" value="{{ $socialiconsettings->twitter }}">
                                    @error('twitter')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="twitter_url"> Twitter Url</label>
                                    <input type="text" name="twitter_url" id="twitter_url" class="form-control" placeholder="Enter twitter url" value="{{ $socialiconsettings->twitter_url }}">
                                    @error('twitter_url')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="youtube"> Youtube Icon</label>
                                    <input type="text" name="youtube" id="youtube" class="form-control" placeholder="Enter youtube icon" value="{{ $socialiconsettings->youtube }}">
                                    @error('youtube')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="youtube_url"> Youtube Url</label>
                                    <input type="text" name="youtube_url" id="youtube_url" class="form-control" placeholder="Enter youtube url" value="{{ $socialiconsettings->youtube_url }}">
                                    @error('youtube_url')
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
