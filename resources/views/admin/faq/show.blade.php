@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Faq
@endsection

{{-- Menu Active --}}
@section('faqList')
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
                    <li class="breadcrumb-item"><a href="{{ route('faq.index') }}">Faq</a></li> 
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
                        <h4>View</h4>
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
                                    <th>Question</th>
                                    <td>{{ ucfirst($faq->question) }}</td>
                                </tr>
                                
                                <tr>
                                    <th>Answer</th>
                                    <td>{!! ucfirst($faq->answer) !!}</td>
                                </tr> 
                            </tbody>
                        </table>
                        <a class="btn btn-primary mt-1" href="{{ route('faq.index') }}">Return Back</a>
                        <a class="btn btn-primary mt-1" href="{{ route('faq.edit', $faq->id) }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


