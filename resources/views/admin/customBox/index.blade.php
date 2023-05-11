@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Custom Box
@endsection

{{-- Menu Active --}}
@section('customBoxIndex')
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
                    <li class="breadcrumb-item active">Custom Box</li>
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
            <div class="col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Custom Box</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <p>List of all Custom Box</p>
                        <table id="data_table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th> 
                                    <th>Image</th>
                                    <th>Actions</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($custom_boxs as $box) 
                                    <tr>
                                        <td>{{ $loop ->index + 1 }}</td>
                                        <td>{{ ucfirst($box->name) }}</td>
                                        <td>{{  $box->price }},00 ৳</td>
                                        <td>{{ $box->stock }} {{ $box->stock_in }}</td>
                                        <td>
                                            {{-- @if ($box->status == 'show')
                                            <span class="badge badge-light-primary">Show</span>
                                            @else
                                            <span class="badge badge-light-warning">Hidden</span>
                                            @endif --}}
                                            <div class="custom-control custom-switch {{ ($box->id == '1')? 'disabled__checkbox':'' }}">
                                                <input 
                                                @if ($box->status == 'show')
                                                checked
                                                @endif
                                                 type="checkbox" class="custom-control-input status_change" data-id="{{ $box->id }}" id="customSwitch{{ $box->id }}">
                                                <label class="custom-control-label" for="customSwitch{{ $box->id }}"></label>
                                            </div>
                                        </td> 
                                        <td><img src="{{ asset('uploads/custom_box') }}/{{ $box->image }}" width="100" alt="box-image"></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu"> 
                                                    <a class="dropdown-item" href="{{ route('custom_box.show', $box->id) }}">
                                                        <i class="mr-50" data-feather='eye'></i>
                                                        <span>View</span>
                                                    </a>
                                                    {{-- @if ($box->status == 'hide')
                                                        <a class="dropdown-item" href="{{ route('custom_box.status', $box->id) }}">
                                                            <i data-feather='eye' class="mr-50"></i>
                                                            <span>Show</span>
                                                        </a>
                                                    @else 
                                                        <a class="dropdown-item" href="{{ route('custom_box.status', $box->id) }}">
                                                            <i data-feather='eye-off' class="mr-50"></i>
                                                            <span>Hide</span>
                                                        </a>
                                                    @endif --}}
                                                    <a class="dropdown-item" href="{{ route('custom_box.edit', $box->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Edit</span>
                                                    </a> 
                                                    @if ($box->id  != 1)
                                                        <form action="{{ route('custom_box.destroy') }}" method="POST">
                                                            <input type="hidden" name="id" value="{{ $box->id }}">
                                                            @csrf 
                                                            <a class="dropdown-item" href="" onclick="event.preventDefault(); this.closest('form').submit();">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                                <span>Delete</span>
                                                            </a>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="7"><h3 class="text-center">No Box to show</h3></td></tr>
                                @endforelse  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('final_js')
 <script>
     $(document).ready(function(){
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });

        $('body').on('click', '.status_change', function(){
            var id =$(this).attr('data-id');
            $.ajax({
                url  : "{{ route('custom.box.status.change') }}", 
                type : "POST",
                data : {  
                    id : id,
                },
                success : function(data){ 
                    console.log(data);
                }  
            });
        });

     });
 </script>
@endsection
