@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Pickup
@endsection

{{-- Menu Active --}}
@section('addressList')
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
                    <li class="breadcrumb-item">Collection address</li>
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
                        <h4 class="card-title">Collection address</h4>
                        <div class="alert alert-success d-none" id="successAlert"></div>
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                           @foreach ($errors->all() as $item)
                           <div class="alert alert-danger">{{ $item }}</div>
                           @endforeach
                        <button type="button" class="btn btn-primary mr-1 waves-effect waves-float waves-light" data-toggle="modal" data-target="#addNewCard">+ Collection address</button>  
                    </div>
                    
                    <div class="card-body">
                        <p class="card-text">
                            List of all collection addresses
                        </p>
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Address</th>
                                        <th>Opening hours</th>
                                        <th>Closing time</th>
                                        <th>Actions</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pickupAddresses as $address)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ ucfirst($address->address) }}</span>
                                        </td>
                                      
                                        <td>{{ \Carbon\Carbon::parse($address->opening_hour)->format('h:i a') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($address->closing_hour)->format('h:i a') }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter{{ $address->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        <span>Edit</span>
                                                    </a>
                                                  
                                                        <form action="{{ route('pickups.destroy', $address->id) }}" method="POST">
                                                            {{ method_field('DELETE') }}
                                                            @csrf 
                                                            <input type="hidden" name="id" value="{{ $address->id }}">
                                                            <a class="dropdown-item" href="{{ route('pickups.destroy', $address->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                                <span>Submit</span>
                                                            </a>
                                                        </form> 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $address->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ route('pickups.update', $address->id) }}" method="POST" class="form-group">
                                                {{ method_field('PUT') }}
                                                @csrf 
                                                <input type="hidden" name="id" value="{{ $address->id }}">
                                                <div class="py-1">
                                                    <label for="address">Address *</label>
                                                    <textarea type="text" class="form-control" id="address" name="address" placeholder="Address">{{ $address->address }}</textarea>
                                                </div>
                                                <div class="py-1">
                                                    <label for="opening">Opening hours *</label>
                                                    <input type="time" id="opening" class="form-control" name="opening_hour" value="{{ $address->opening_hour }}">
                            
                                                </div>
                                                <div class="pt-1">
                                                    <label for="closing">Closing time *</label>
                                                    <input type="time" id="closing" class="form-control" name="closing_hour" value="{{ $address->closing_hour }}">
                                                </div>
                                         
                                            {{-- <div class="custom-control custom-switch custom-control-inline">
                                                <input {{ ($options->tendance  == 'yes')? 'checked':'' }} type="checkbox" class="custom-control-input tendanceDernierChange" data-name="tendance"  id="tendanceHideShow">
                                                <label class="custom-control-label" for="tendanceHideShow">Tendance</label>
                                            </div> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success waves-effect waves-float waves-light" type="submit">Submit</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-float waves-light" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
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
    <div class="modal fade modal-secondary text-left show" id="addNewCard" tabindex="-1" aria-labelledby="myModalLabel1660" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1660">Collection address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('pickups.store') }}" method="POST" class="form-group">
                        @csrf 
                        <div class="py-1">
                            <label for="address">Address*</label>
                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Address"></textarea>
                        </div>
                        <div class="py-1">
                            <label for="opening">Opening hours*</label>
                            <input type="time" id="opening" class="form-control" name="opening_hour">
    
                        </div>
                        <div class="pt-1">
                            <label for="closing">Closing Time*</label>
                            <input type="time" id="closing" class="form-control" name="closing_hour">
                        </div>
                 
                    {{-- <div class="custom-control custom-switch custom-control-inline">
                        <input {{ ($options->tendance  == 'yes')? 'checked':'' }} type="checkbox" class="custom-control-input tendanceDernierChange" data-name="tendance"  id="tendanceHideShow">
                        <label class="custom-control-label" for="tendanceHideShow">Tendance</label>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success waves-effect waves-float waves-light" type="submit">Submit</button>
                    <button type="button" class="btn btn-secondary waves-effect waves-float waves-light" data-dismiss="modal">Close</button>
                </div>
            </form>
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
                    console.log(data);
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
