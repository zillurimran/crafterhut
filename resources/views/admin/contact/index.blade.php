@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Contact message
@endsection

{{-- Menu Active --}}
@section('contact.index')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li> --}}
                     <li class="breadcrumb-item active">List of contact messages
                    </li> 
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">message</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body"> 
                        <table id="data_table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th> 
                                    <th>E-mail</th>
                                    <th>phone</th>
                                    <th>Message</th>
                                    <th>Registered at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($messages as $message)
                                    <tr>
                                        <td>{{ $loop ->index + 1 }}</td>
                                        <td>{{ ucfirst($message->name) }}</td>
                                        <td>{{ $message->email }}</td> 
                                        <td>{{ $message->phone }}</td> 
                                        <td>{{ $message->message }}</td> 
                                        <td>
                                            {{ $message->created_at->format('d M, Y') }}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu"> 
                                                    <form action="{{ route('contact.message.delete') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $message->id }}">
                                                        <button class="dropdown-item" type="submit">
                                                            <i class="mr-50" data-feather='trash'></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>No order to show</tr>
                                @endforelse  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
