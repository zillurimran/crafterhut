@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ ucfirst($box->name )}}
@endsection
 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .trix-button-group.trix-button-group--file-tools {
            display: none
        }
    </style>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


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
                    <li class="breadcrumb-item"><a href="{{ route('custom_box.index') }}">Custom Box</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Box</small></h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('custom_box.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Box Name <span class="text-danger">*</span></label>
                                    <input type="hidden" name="id" value="{{ $box->id }}">
                                    <input type="text" id="name" class="form-control" value="{{ $box->name }}" name="name" placeholder="Enter Box name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Box Title <span class="text-danger">*</span></label>
                                    <input type="text" id="title" class="form-control" value="{{ $box->title }}" name="title" placeholder="Enter Box title">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="product_list">Product List</label>
                                    <input id="product_list" value="{{ $box->product_list }}" type="hidden" name="product_list">
                                    <trix-editor input="product_list"></trix-editor>
                                    @error('product_list')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price">Box Price (৳) <span class="text-danger">*</span></label>
                                    <input type="number" id="price" class="form-control" name="price" value="{{ $box->price }}" placeholder="Enter Box price">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="weight">Poids net de fruits</label>
                                    <input type="text" id="weight" class="form-control" name="weight" value="{{ $box->weight }}" placeholder="Enter Net weight of fruit">
                                    @error('weight')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="youtube_link">Youtube link</label>
                                    <input type="text" id="youtube_link" class="form-control" name="youtube_link" value="{{ $box->youtube_link }}" placeholder="Enter youtube link">
                                    @error('youtube_link')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description">Box Short description</label> 
                                    <textarea name="short_description" id="short_description" class="form-control"> {{ $box->short_description }}</textarea>
                                    @error('short_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="long_description">Box long description</label>
                                    <input id="long_description" value="{{ $box->long_description }}" type="hidden" name="long_description">
                                    <trix-editor input="long_description"></trix-editor>
                                    @error('long_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="stock">Quantity <span class="text-danger">*</span></label>
                                    <input type="number" id="stock" class="form-control" name="stock" value="{{ $box->stock }}" placeholder="Enter Box quantity">
                                    @error('stock')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="stock_in">Quantity In</label>
                                    <select name="stock_in" id="stock_in" class="form-control">
                                        <option {{ ($box->stock_in == 'kg')? 'selected': ''  }} value="kg">Kg</option>
                                        <option {{ ($box->stock_in == 'piece')? 'selected': ''  }} value="piece">piece</option>
                                    </select>
                                    @error('stock_in')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Existing Box Image:</label>
                                    <br>
                                    <img src="{{ asset('uploads/custom_box') }}/{{ $box->image }}" width="100" alt="box-image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Box Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose File</label>
                                    </div>
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            @if ($box->feature_image)
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Existing Box Feature Image:</label>
                                        <br>
                                        <img src="{{ asset('uploads/custom_box') }}/{{ $box->feature_image }}" width="100" alt="box-image">
                                    </div>
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="feature_image">Box Feature Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="feature_image" class="custom-file-input" id="feature_image">
                                        <label class="custom-file-label" for="feature_image">Choose File</label>
                                    </div>
                                    @error('feature_image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('final_js')
 
@endsection