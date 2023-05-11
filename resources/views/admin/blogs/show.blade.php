@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Blog
@endsection

{{-- Menu Active --}}
@section('blogsList')
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
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst($blog->title) }}</li>
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
            <div class="col-lg-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>View {{ ucfirst($blog->title) }}</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ ucfirst($blog->title) }}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{ ucfirst($blog->getBlogCategory->name) }}</td>
                                </tr>
                                <tr>
                                    <th>Blog Image</th>
                                    <td><img src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" width="100" alt="blog-image"></td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{!! ucfirst($blog->description) !!}</td>
                                </tr>
                                @if ($blog->quote)
                                    <tr>
                                        <th>Quote</th>
                                        <td>{{ ucfirst($blog->quote) }}</td>
                                    </tr>
                                @endif
                                @if ($blog->description_2)
                                    <tr>
                                        <th>Description 2</th>
                                        <td>{!! ucfirst($blog->description_2) !!}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <a class="btn btn-primary mt-1" href="{{ route('blogs.index') }}">Return Back</a>
                        <a class="btn btn-primary mt-1" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


