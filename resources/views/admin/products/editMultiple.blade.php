@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ ucfirst($product->name )}}'s Multiple images
@endsection

{{-- Menu Active --}}
@section('productList')
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
                    <li class="breadcrumb-item active">{{ ucfirst($product->name )}}</li>
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
            <div class="col-lg-10 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ ucfirst($product->name )}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            List of {{ ucfirst($product->name )}}'s Multiple images
                        </p>
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered text-center">
                                <thead class="">
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Image</th>
                                        <th>Actions</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->getMultipleImages as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/products') }}/{{ $item->multiple_image }}" width="90" alt="multiple-image">
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter{{ $item->id }}" }}>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            <span>Edit</span>
                                                        </a>
                                                        <form action="{{ route('delete.multiple', $item->id) }}" method="POST">
                                                            {{-- Initiate Delete method --}}
                                                            
                                                            @csrf 
                                                            <a class="dropdown-item" href="{{ route('delete.multiple', $item->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                </svg>
                                                                <span>Submit</span>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLongTitle">Editing multiple images</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{ route('replace.multiple') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf 
                                                    <div class="">
                                                        <label for="multiple_image">Image</label>
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                        <input type="file" name="multiple_image" id="" class="form-control">
                                                        @error('multiple_image')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
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

@section('js')
    <script>
        @foreach($product->getMultipleImages as $item)
        $(document).ready(function() {
            @if(count($errors) > 0)
            $("#exampleModalCenter{{ $item->id }}").modal('show');
            @endif
        });
        @endforeach
    </script>
@endsection