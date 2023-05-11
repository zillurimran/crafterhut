@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Banners
@endsection

{{-- Menu Active --}}
@section('bannersIndex')
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
                    <li class="breadcrumb-item">Banners</li>
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
            <div class="col-lg-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banners</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            List of all banners
                        </p>
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Short description</th>
                                        <th>Url of the button</th>
                                        <th>Image</th>
                                        <th>Actions</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $banner)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ ucfirst($banner->title) }}</span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ ucfirst($banner->subtitle) }}</span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ ucfirst($banner->short_description) }}</span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ ucfirst($banner->button_url) }}</span>
                                        </td>
                                        <td>
                                            <img src="{{ asset('uploads/banners') }}/{{ $banner->image }}" width="160" alt="Banner">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('banners.edit', $banner->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Modifier</span>
                                                    </a>
                                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
                                                        {{-- Initiate Delete method --}}
                                                        {{ method_field('DELETE') }}
                                                        @csrf 
                                                        <a class="dropdown-item" href="{{ route('banners.destroy', $banner->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Delete</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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