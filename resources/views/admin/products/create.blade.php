@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Add a product
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


{{-- Breadcrumb --}}
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Create a Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('productCreate')
    active
@endsection

@section('content')
    <div class="row justify-content-center">    
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create a Product</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-success">{{ session('warning') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Product name</label>
                                    <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter Product name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="category">Select a category</label>
                                    <select name="category_id" id="category" class="form-control">
                                        <option value="category_id">-Select category-</option>
                                         @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                                         @endforeach
                                    </select>
                                    @error('category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-1" data-select2-id="52">
                                <label>Select a sub-category</label>
                                <div class="position-relative" data-select2-id="51">
                                    <select name="subCategory_id[]" id="subcategory" class="select2 form-control select2-hidden-accessible" multiple="" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        <option value="subCategory_id">-Select Subcategory-</option>
                                    </select>
                                </div>
                                @error('subCategory_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description">Short description of the product</label>
                                    <input id="short_description" type="hidden" name="short_description">
                                    <trix-editor input="short_description"></trix-editor>
                                    @error('short_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price">Product price</label>
                                    <input type="text" id="price" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter Product price">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="qty">Quantity</label>
                                    <input type="text" id="qty" class="form-control" name="qty" value="{{ old('qty') }}" placeholder="Enter Product quantity">
                                    @error('qty')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="qty_in">Quantity</label>
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
                                    <label for="sku">Product SKU</label>
                                    <input type="text" id="sku" class="form-control" name="sku" value="{{ old('sku') }}" placeholder="Enter Product sku">
                                    @error('sku')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="display_as">Display the product as</label>
                                    <select class="form-control" name="display_as" id="display_as">
                                        <option value="normal">Normal</option>
                                        <option value="featured">In the spotlight :</option>
                                        <option value="trending">Trend</option>
                                        {{-- <option value="sale">Sale</option> --}}
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
                                        <option value="forsale">For sale</option>
                                        <option value="requestquote">Request a quote</option>
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
                                        <option selected value="no">No</option>
                                        <option value="yes">Yes</option> 
                                    </select> 
                                </div>
                            </div>
                           <div id="disc" class="d-none">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="discount">Percentage discount</label>
                                        <input type="text" id="discount" class="form-control" name="discount" value="{{ old('discount') }}" placeholder="Enter Product discount in percentage. (Do not use the % symbol)">
                                        @error('discount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="discount_till">Discount Bank (optional)</label>
                                        <input type="date" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ old('discount_till') }}" id="discount_till" class="form-control" name="discount_till" placeholder="Enter Product discount in percentage. (Do not use the % symbol)">
                                        @error('discount_till')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                           </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Product image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose the file</label>
                                    </div>
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="multiple_image">Multiple product images</label>
                                    <div class="custom-file">
                                        <input type="file" name="multiple_image[]" multiple class="custom-file-input" id="multiple_image">
                                        <label class="custom-file-label" for="multiple_image">Choose the file</label>
                                    </div>
                                    @error('multiple_image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
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

    <script>
        $(document).ready(function () {
            $("#category").on("change", function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let category = $("#category").val(); 

                $.ajax({

                  url  : "{{ route('getsub') }}",
                  type : "POST", 
                  data : {
                      category : category
                  },
                  success : function(data)
                  {
                      $("#subcategory").html(data.success);
                  }

                });


            });
        });
    </script>
@endsection