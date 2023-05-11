@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Dashboard
@endsection

{{-- Menu Active --}}
@section('admin.index')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li> --}}
                     <li class="breadcrumb-item active">List of Admins
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
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Admin</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addAdmin">Add Admin</a>
                        <!-- Modal -->
                        <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{route('add.admin')}}" method="post" class="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Enter name">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" name="email" value="{{ old('email')}}" placeholder="Enter email">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="text" class="form-control" name="password" value="" placeholder="Enter password">
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Confirm Password</label>
                                                <input type="text" class="form-control" name="confirm_password" value="" placeholder="Enter password">
                                                @error('confirm_password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Select Roles</label>
                                                <input type="text" class="form-control" name="confirm_password" value="" placeholder="Enter password">
                                                @error('confirm_password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Profile Photo</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="profile_photo" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>List of all orders</p>
                        <table id="data_table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr> 
                                        <td>{{ $loop ->index + 1 }}</td>
                                        <td>{{ ucfirst($user->name) }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            {{ $user->created_at->format('d M, Y') }}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#permissionModal{{$user->id}}">
                                                        <i data-feather='eye' class="mr-50"></i>
                                                        <span>Permission</span>
                                                    </a>
                                                    <a class="dropdown-item" onclick="alert('Are you sure? All the informations of this user will be permanantly deleted!')" href="{{ route('user.delete', $user->id) }}">
                                                        <i class="mr-50" data-feather='trash'></i>
                                                        <span>Delete</span>
                                                    </a>             
                                                </div>
                                            </div>
                                        </td>
                                        @push('all-modals')    
                                        <div class="modal fade" id="permissionModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered modal-xs">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLabel">Give Permission</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                               </button>
                                               </div>
                                               <form action="{{ route('add.permission')}}" method="post">
                                                   @csrf
                                                   <div class="modal-body">
                                                           <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-1" name="module[]" value="Dashboard" {{!empty(permissionCheck($user->id,'Dashboard')->module) == "Dashboard" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-1">Dashboard</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-2" name="module[]" value="Products" {{!empty(permissionCheck($user->id,'Products')->module) == "Products" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-2">Products</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-3" name="module[]" value="Banners" {{!empty(permissionCheck($user->id,'Banners')->module) == "Banners" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-3">Banners</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-4" name="module[]" value="Categories" {{!empty(permissionCheck($user->id,'Categories')->module) == "Categories" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-4">Categories</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-5" name="module[]" value="SubCategories" {{!empty(permissionCheck($user->id,'SubCategories')->module) == "Subcategories" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-5">Sub-Categories</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-6" name="module[]" value="Subscriptions" {{!empty(permissionCheck($user->id,'Subscriptions')->module) == "Subscriptions" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-6">Subscriptions</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-7" name="module[]" value="MyOrders" {{!empty(permissionCheck($user->id,'MyOrders')->module) == "MyOrders" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-7">My Orders</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-8" name="module[]" value="Users" {{!empty(permissionCheck($user->id,'Users')->module) == "Users" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-8">Users</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-9" name="module[]" value="Admins" {{!empty(permissionCheck($user->id,'Admins')->module) == "Admins" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-9">Admins</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox"> 
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-10" name="module[]" value="BlogCategories" {{!empty(permissionCheck($user->id,'BlogCategories')->module) == "BlogCategories" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-10">Blog-Categories</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-11" name="module[]" value="Blogs" {{!empty(permissionCheck($user->id,'Blogs')->module) == "Blogs" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-11">Blogs</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-12" name="module[]" value="Faq" {{!empty(permissionCheck($user->id,'Faq')->module) == "Faq" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-12">Faq</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-13" name="module[]" value="CollectionAddress" {{!empty(permissionCheck($user->id,'CollectionAddress')->module) == "CollectionAddress" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-13">Collection Address</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-14" name="module[]" value="ContactMessage" {{!empty(permissionCheck($user->id,'ContactMessage')->module) == "ContactMessage" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-14">Contact Message</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-15" name="module[]" value="DeliveryPolicy" {{!empty(permissionCheck($user->id,'DeliveryPolicy')->module) == "DeliveryPolicy" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-15">Delivery Policy</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-16" name="module[]" value="PaymentNumbers" {{!empty(permissionCheck($user->id,'PaymentNumbers')->module) == "PaymentNumbers" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-16">Payment Numbers</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-17" name="module[]" value="ShippingParameters" {{!empty(permissionCheck($user->id,'ShippingParameters')->module) == "ShippingParameters" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-17">Shipping Parameters</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-18" name="module[]" value="GeneralParameters" {{!empty(permissionCheck($user->id,'GeneralParameters')->module) == "GeneralParameters" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-18">General Parameters</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-19" name="module[]" value="SocialIconSettings" {{!empty(permissionCheck($user->id,'SocialIconSettings')->module) == "SocialIconSettings" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-19">Social Icon Settings</label>
                                                           </div>
                                                           <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="module-{{$user->id}}-modal-{{$loop->iteration}}-20" name="module[]" value="ColorSettings" {{!empty(permissionCheck($user->id,'ColorSettings')->module) == "ColorSettings" ? 'checked':''}}>
                                                               <label class="custom-control-label" for="module-{{$user->id}}-modal-{{$loop->iteration}}-20">Color Settings</label>
                                                           </div>
                                                   </div>
                                                   <div class="modal-footer">
                                                       <button type="submit" class="btn btn-primary">Give Access</button>
                                                   </div>
                                               </form>
                                           </div>
                                           </div>
                                        </div>
                                        @endpush
                                    </tr>
                                @empty
                                    <tr>Nothing to show</tr>
                                @endforelse  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
