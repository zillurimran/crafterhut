@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ ucfirst($product->name )}}
@endsection

@php
                                    
// Price with 5.5% tax1
$price = round($product->price/ (5.5/100 + 1), 2);
@endphp

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


@section('productCreate')
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
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Product</a></li>
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
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit product</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name @if ($product->name == 'Votre box personnalisée') (This product name not editable) @endif</label>
                                    <input type="text" value="{{ $product->name }}" @if ($product->name == 'Votre box personnalisée') readonly @endif id="name" class="form-control" name="name">
                                    @error('name')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="category_id">Select a category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="{{ $product->getCategory->id }}" >{{ $product->getCategory->name }}</option>
                                        @foreach($categories as $category)
                                        @if($category->id != $product->getCategory->id)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        @endforeach

                                    </select>
                                    @error('category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-1" data-select2-id="52">
                                <div class="form-group">
                                    <label>Select a sub-category</label>
                                    <div class="position-relative" data-select2-id="51">
                                        <select name="subCategory_id[]" id="sub_cat_id" class="select2 form-control select2-hidden-accessible" multiple="" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        @foreach ($subCategories as $subcategory)
                                            <option selected value=" {{ $subcategory->getSubcategoryName->id }}">{{ $subcategory->getSubcategoryName->name }}</option>
                                        @endforeach
                                        @foreach ($product->getCategory->getSubCategory as $item)
                                            @if (checkSub($product->id, $item->id)->doesntExist())
                                                <option value=" {{ $item->id }}"> {{ $item->name }}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                    </div>
                                    @error('subCategory_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" id="price" class="form-control" name="price" value="{{ $price }}" placeholder="Enter Product price">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="qty">Quantity (if 1 unit is 250g and you have a stock of 1 kg, please enter 4 units)</label>
                                    <input type="text" id="qty" class="form-control" name="qty" value="{{ $product->qty }}" placeholder="Enter Product quantity">
                                    @error('qty')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="qty_in">Quantity (if 1 unit is 250g and you have a stock of 1 kg, please enter 4 units)</label>
                                    <select name="qty_in" id="qty_in" class="form-control">
                                        <option selected value="piece">units</option>
                                    </select>
                                    @error('qty_in')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Existing image :</label>
                                    <br>
                                    <img src="{{ asset('uploads/products') }}/{{ $product->image }}" width="100" alt="product-image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Download image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose the file</label>
                                        @error('image')
                                            <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description">Brief description</label>
                                    <input id="short_description" type="hidden" name="short_description" value="{!! $product->short_description !!}">
                                    <trix-editor input="short_description"></trix-editor>
                                    @error('short_description')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="sku">Product Sku</label>
                                    <input type="text" value="{{ $product->sku }}" id="sku" class="form-control" name="sku">
                                    @error('sku')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="display_as">Display the product as</label>
                                    <select class="form-control" name="display_as" id="display_as">
                                        <option selected value="{{ $product->display_as }}">{{ ucfirst($product->display_as) }}</option>            
                                        @if($product->display_as == 'normal')
                                        <option value="featured">In the spotlight :</option>
                                        <option value="trending">Trend</option>
                                        {{-- <option value="sale">Sale</option> --}}
                                        @endif
                                        @if($product->display_as == 'featured')
                                        {{-- <option selected value="featured">Featured</option>     --}}
                                        <option value="normal">Normal</option>
                                        <option value="trending">Trend</option>
                                        {{-- <option value="sale">Sale</option> --}}
                                        @endif
                                        @if($product->display_as == 'trending')
                                        {{-- <option selected value="trending">Trending</option> --}}
                                        <option value="normal">Normal</option>
                                        <option value="featured">In the spotlight :</option>
                                        {{-- <option value="sale">Sale</option> --}}
                                        @endif
                                        @if($product->display_as == 'sale')
                                        {{-- <option selected value="sale">Sale</option> --}}
                                        <option value="normal">Normal</option>
                                        <option value="featured">In the spotlight :</option>
                                        <option value="trending">Trend</option>
                                        @endif 
                                      

                                    </select>
                                    @error('display_as')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="display_as">Type of product</label>
                                    <select class="form-control" name="type">
                                        <option value="{{ $product->type }}">{{ ($product->type == 'forsale') ? 'For Sale' : 'Request Quote' }}</option>
                                        @if($product->type == 'forsale')
                                        <option value="requestquote">Request a quote</option>
                                        @endif
                                        @if($product->type == 'requestquote')
                                        <option value="forsale">For sale</option>
                                        @endif
                                        {{-- <option value="sale">Sale</option> --}}
                                    </select>
                                    @error('type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Display in a custom box</label>
                                    <select class="form-control" name="custom_box_status">
                                        <option {{ ($product->custom_box_status == 'no') ? 'selected' : '' }} value="no">No</option>
                                        <option {{ ($product->custom_box_status == 'yes') ? 'selected' : '' }} value="yes">Yes</option> 
                                    </select> 
                                </div>
                            </div>
                            <div id="disc" class="d-none">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="discount">Percentage discount</label>
                                        <input type="text" id="discount" class="form-control" name="discount" value="{{ $product->discount ?? old('discount') }}" placeholder="Enter Product discount in percentage. (Do not use the % symbol)">
                                        @error('discount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="discount_till">Discount Bank (optional)</label>
                                        <input type="date" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $product->discount_till }}" id="discount_till" class="form-control" name="discount_till" placeholder="Enter Product discount in percentage. (Do not use the % symbol)">
                                        @error('discount_till')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary waves-effect">Back to</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('final_js')

    <script>
       $(document).ready(function(){

          $('#category_id').change(function(){
                let category_id = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('getSubCategories') }}",
                    method: "POST",
                    data: {category_id:category_id},
                    success: function(data){
                        $('#sub_cat_id').html(data);
                        // console.log(data);
                    }
                });
          });

       });
    </script>



    <script>
        $(document).ready(function(){
            let sale = "{{ $product->display_as }}";

            // console.log(sale); 
            
            if(sale == 'sale')
            {
                $("#disc").removeClass('d-none');
            }
           
            $("#display_as").change(function(e){
                e.preventDefault(); 
                let sale = $("#display_as").val();  

 
                if(sale == 'sale')
                {
                    $("#disc").removeClass('d-none');
                }
                else 
                {
                    $("#disc").addClass('d-none');
                }
                 
            });
        });
    </script>
@endsection