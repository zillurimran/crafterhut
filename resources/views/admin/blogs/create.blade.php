@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Add a blog 
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
                <h2 class="content-header-title float-left mb-0">Administrator Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Create a blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('blogsCreate')
    active
@endsection

@section('content')
    <div class="row justify-content-center">    
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create a blog</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-success">{{ session('warning') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('blogs.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Blog title</label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="category_id">Category Blog</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">-Select-</option>
                                        @foreach ($blogcategories as $item)
                                            <option value="{{ $item->id }}">{{ ucfirst($item->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Blog description</label>
                                    <input id="description" type="hidden" name="description">
                                    <trix-editor input="description"></trix-editor>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="quote">Quote from the blog</label>
                                    <textarea name="quote" id="quote" class="form-control" placeholder="Enter Quote">{{ old('quote') }}</textarea>
                                    @error('quote')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description_2">Blog Description 2</label>
                                    <input id="description_2" type="hidden" name="content">
                                    <trix-editor input="description_2"></trix-editor>
                                    @error('description_2')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Blog image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose the file</label>
                                    </div>
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <div class="form-group">
                                    <label for="multiple_images">Blog Gallery</label>
                                    <div class="custom-file">
                                        <input type="file" name="multiple_images[]" multiple class="custom-file-input" id="multiple_images">
                                        <label class="custom-file-label" for="multiple_images">Choose File</label>
                                    </div>
                                    @error('multiple_images')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div> --}}
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

