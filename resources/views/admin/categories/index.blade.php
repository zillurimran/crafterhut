@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Category
@endsection

{{-- Menu Active --}}
@section('category')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Category</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category</h4>
                        <div class="alert alert-success d-none" id="successAlert"></div>
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                        <button type="button" class="btn btn-primary mr-1 waves-effect waves-float waves-light" data-toggle="modal" data-target="#addNewCard">Latest/Trend Status</button>  
                    </div>
                    
                    <div class="card-body">
                        <p class="card-text">
                            List of all categories
                        </p>
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Subcategory</th>
                                        <th>Added by</th>
                                        <th>Status</th>
                                        <th>Status of the reception</th>
                                        <th>Status of the box</th>
                                        <th>Order from</th>
                                        <th>Actions</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ ucfirst($category->name) }}</span>
                                        </td>
                                        <td>
                                            <img src="{{ asset('uploads/categories') }}/{{ $category->image }}" width="100" alt="category">
                                        </td>
                                        <td>
                                            {{ ucfirst( $category->getSubCategory->count() ) }}
                                        </td>
                                        <td>{{ ucfirst($category->getUser->name) }}</td>
                                        <td>
                                            @if ($category->status == 'hide')
                                                <span class="badge badge-light-warning">Hide</span>
                                            @else
                                            <span class="badge badge-light-primary">Show</span>
                                            @endif
                                        </td>
                                        <td>
                                        <div class="custom-control custom-switch {{ ($category->name == 'BOX DE FRUITS')? 'disabled__checkbox':'' }}">
                                            <input 
                                            @if ($category->show_in_home == 'show')
                                            checked
                                            @endif
                                             type="checkbox" class="custom-control-input status_change_switch" data-column="show_in_home" data-id="{{ $category->id }}" id="customSwitch{{ $category->id }}">
                                            <label class="custom-control-label" for="customSwitch{{ $category->id }}"></label>
                                        </div>
                                        </td>
                                        <td>
                                        <div class="custom-control custom-switch {{ ($category->name == 'BOX DE FRUITS')? 'disabled__checkbox':'' }}">
                                            <input 
                                            @if ($category->show_in_box == 'show')
                                            checked
                                            @endif
                                             type="checkbox" class="custom-control-input status_change_switch" data-column="show_in_box" data-id="{{ $category->id }}" id="customSwitch2{{ $category->id }}">
                                            <label class="custom-control-label" for="customSwitch2{{ $category->id }}"></label>
                                        </div>
                                        </td>
                                        <td>
                                            <div class="form-group"> 
                                                <input type="number" data-id="{{ $category->id }}" class="form-control category_order_change" value="{{ $category->orderby }}" @if ($category->name == 'BOX DE FRUITS')
                                                readonly
                                            @endif> 
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Edit</span>
                                                    </a>
                                                    @if ($category->name != 'BOX DE FRUITS')
                                                        @if ($category->status == 'hide')
                                                            <a class="dropdown-item" href="{{ route('categories.status', $category->id) }}">
                                                                <i data-feather='eye' class="mr-50"></i>
                                                                <span>View</span>
                                                            </a>
                                                        @else 
                                                            <a class="dropdown-item" href="{{ route('categories.status', $category->id) }}">
                                                                <i data-feather='eye-off' class="mr-50"></i>
                                                                <span>Hide</span>
                                                            </a>
                                                        @endif
                                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                            {{-- Initiate Delete method --}}
                                                            {{ method_field('DELETE') }}
                                                            @csrf 
                                                            <a class="dropdown-item" href="{{ route('categories.destroy', $category->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                                <span>Delete</span>
                                                            </a>
                                                        </form> 
                                                    @endif
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
    <div class="modal fade modal-secondary text-left show" id="addNewCard" tabindex="-1" aria-labelledby="myModalLabel1660" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1660">Latest/Trend</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="custom-control custom-switch custom-control-inline">
                        <input {{ ($options->dernier  == 'yes')? 'checked':'' }} type="checkbox" class="custom-control-input tendanceDernierChange" data-name="dernier" id="derniaersHideShow">
                        <label class="custom-control-label" for="derniaersHideShow">Latest</label>
                    </div>
                    <br>
                    <br>
                    <div class="custom-control custom-switch custom-control-inline">
                        <input {{ ($options->tendance  == 'yes')? 'checked':'' }} type="checkbox" class="custom-control-input tendanceDernierChange" data-name="tendance"  id="tendanceHideShow">
                        <label class="custom-control-label" for="tendanceHideShow">Trend</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect waves-float waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
 <script>
     $(document).ready(function(){ 
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         }); 

        $('body').on('blur', '.category_order_change', function(){ 
            var id =$(this).attr('data-id');
            var value = $(this).val();
            $.ajax({
                url  : "{{ route('category.order.change') }}", 
                type : "POST",
                data : {  
                    id : id,
                    order : value,
                },
                success : function(data){ 
                    $('#successAlert').removeClass('d-none');
                    $('#successAlert').text(data);
                }  
            });
        });
        $('body').on('click', '.status_change_switch', function(){ 
            if($(this).is(':checked')){
                var value = 'show';
            }else{
                var value = 'hide';
            }
            var id =$(this).attr('data-id');
            var column =$(this).attr('data-column'); 
            $.ajax({
                url  : "{{ route('category.status.change') }}", 
                type : "POST",
                data : {  
                    id : id,
                    value : value,
                    column : column,
                },
                success : function(data){ 
                    $('#successAlert').removeClass('d-none');
                        $('#successAlert').text(data);    
                }  
            });
        });
        $('body').on('click', '.tendanceDernierChange', function(){ 
            if($(this).is(':checked')){
                var value = 'yes';
            }else{
                var value = 'no';
            } 
            var column =$(this).attr('data-name'); 
            $.ajax({
                url  : "{{ route('tendance.derniers.change') }}", 
                type : "POST",
                data : {   
                    value : value,
                    column : column,
                },
                success : function(data){ 
                    $('#successAlert').removeClass('d-none');
                    $('#successAlert').text(data);
                    console.log(data);
                }  
            });
        });

     });
 </script>
@endsection
