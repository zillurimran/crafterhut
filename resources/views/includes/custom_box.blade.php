@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Custom Box
@endsection

@section('content')
    <!-- Main Container End -->
    <section id="custom_box_cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 top-gap">
                    <img class="w-100 md-sm-none"
                        src="{{ asset('default_box.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 col-md-7 top-gap">
                    <div class="fruits_heading">
                        <h2 class="fruits_heading__title">YOUR FRUIT DIRECT FROM THE PRODUCER</h2>
                        {{-- <p class="fruits_heading__sub">*Etape requise</p> --}}
                        <input type="hidden" id="CategoryCount" value="{{ $categories->where('show_in_box', 'show')->count() }}">
                    </div>
                    <div class="fruit-items">
                        <ul class="nav nav-pills mb-3 w-100" id="pills-tab" role="tablist">
                            <li class="nav-item active stepper_change__tab" data-next-id="1">
                                <a class="nav-link active" id="pills-profile-tab0" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <span class="items-tab_count">1</span> Your base
                                </a>
                            </li>
                            @foreach ($categories->where('name', '!=', 'BOX DE FRUITS')->where('show_in_box', 'show') as $category)  
                                    <li class="nav-item stepper_change__tab" data-next-id="{{ $loop->index + 2 }}">
                                        <a class="nav-link" id="pills-profile-tab{{ $loop->iteration }}" data-toggle="pill"
                                            href="#pills-profile{{ $loop->iteration }}" role="tab"
                                            aria-controls="pills-profile{{ $loop->iteration }}" aria-selected="false">
                                            <span class="items-tab_count">{{ $loop->index + 2 }}</span>
                                            {{ $category->name }}
                                        </a>
                                    </li> 
                            @endforeach
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <span class="items-tab_count">2</span>
                                    Fruits de saison
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <span class="items-tab_count">3</span>
                                    Fruits exotiques
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-gourmandises-tab" data-toggle="pill"
                                    href="#pills-gourmandises" role="tab" aria-controls="pills-gourmandises"
                                    aria-selected="false">
                                    <span class="items-tab_count">4</span>
                                    Fruits secs & gourmandises
                                </a>
                            </li> --}}
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active in" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="tab-content_heading">
                                    <h3 class="tab-content_heading__title">Start by choosing a box</h3>
                                    {{-- <span class="tab-content_heading__title__star">*</span>
                                    <button class="tab-content_heading__popover" data-placement="top" type="button"
                                        class="btn btn-info" data-trigger="hover" data-toggle="popover"
                                        title="Commencez en choisissant une box"
                                        data-content="Commencez par choisir une box, Vital'été, 3kg, exotique ou personnalisez vous même votre box en choisissant la &quot;box vide&quot">
                                        Info
                                    </button> --}}
                                </div>

                                <div class="img-cart">
                                    <div class="row">
                                        @foreach (categories() as $category) 
                                            @if ($category->name == 'BOX DE FRUITS')
                                                @foreach ($category->getProducts as $product) 
                                                    @if ($product->name == 'Votre box personnalisée')
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cart-items-body">
                                                        <div class="card @if (!session('box_id') || session('box_id') == $product->id)
                                                            active
                                                        @endif custom_box_checked" data-box-id="{{ $product->id }}">
                                                            {{-- <div class="btn details_modal" data-toggle="modal"
                                                                data-target="#customBoxModal-{{ $product->id }}">
                                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                            </div> --}}
                                                            <div class="product-img">
                                                                <img class="w-100 h-100"
                                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="product-des">
                                                                <h6 class="product-des__title">{{ $product->name }}</h6>
                                                                <p class="product-des__price">+ {{ number_format($product->price,2) }} €</p>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    @endif
                                                @endforeach 
                                                @foreach ($category->getProducts->where('status', 'show')->where('custom_box_status', 'yes') as $product) 
                                                    @if ($product->name != 'Votre box personnalisée')
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cart-items-body">
                                                        <div class="card @if (getBoxSelect($product->id))
                                                            active
                                                        @endif custom_box_checked" data-box-id="{{ $product->id }}">
                                                            {{-- <div class="btn details_modal" data-toggle="modal"
                                                                data-target="#customBoxModal-{{ $product->id }}">
                                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                            </div> --}}
                                                            <div class="product-img">
                                                                <img class="w-100 h-100"
                                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="product-des">
                                                                <h6 class="product-des__title">{{ $product->name }}</h6>
                                                                <p class="product-des__price">+ {{  round($product->price,2) }} ৳</p>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    @endif
                                                @endforeach 
                                                {{-- @foreach ($category->getProducts as $product) 
                                                    <div class="modal fade bd-example-modal-xl" id="customBoxModal-{{ $product->id }}" tabindex="-1" role="dialog"
                                                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body content-center modal-content-all-p">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 center_img text-center">
                                                                            <img class="w-100 cart_propduct_image" src="{{ asset('uploads/products') }}/{{ $product->image }}" alt="">
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <h2>{{ $product->name }}</h2>  
                                                                            <p>{!! $product->short_description !!}</p> 
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach --}}
                                            @endif
                                         @endforeach  
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="stepper_btn">
                                                <button class="stepper_btn_next stepper_change_btn stepper_change__tab" data-next-id="2" data-tab="1" type="button" id="Stepper_btn-1">Suivant
                                                    <span><i class="fa fa-chevron-right"
                                                            aria-hidden="true"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($categories->where('name', '!=', 'BOX DE FRUITS')->where('show_in_box', 'show') as $category) 
                                <div class="tab-pane fade" id="pills-profile{{ $loop->iteration }}" role="tabpanel"
                                    aria-labelledby="pills-profile-tab{{ $loop->iteration }}">
                                    @foreach ($category->getSubCategory as $subcat)
                                        <div class="tab-content_heading">
                                            <h3 class="tab-content_heading__title">{{ $subcat->name }}</h3>
                                        </div>
                                        <div class="img-cart">
                                            <div class="row">
                                                @php
                                                    $productSubcategory = App\Models\ProductSubcategory::get();
                                                @endphp
                                                @foreach ($productSubcategory as $item)
                                                    @if ($item->subCategory_id == $subcat->id)
                                                        @if ($item->getProducts->status == 'show')
                                                        <div class="col-md-4 col-sm-6 col-xs-12 cart-items-body">
                                                            <div class="card-2">
                                                                {{-- <div class="btn details_modal" data-toggle="modal"
                                                                    data-target="#ProductDetailsModal{{ $item->id }}">
                                                                    <i class="fa fa-search-plus search_details"
                                                                        aria-hidden="true"></i>
                                                                </div> --}}
                                                                <div id="hovarable_cart{{ $item->product_id }}" class="hovarable @if (getSelectProduct($item->product_id))
                                                                    active
                                                                @endif custom_product_select" data-product-id="{{ $item->product_id }}">
                                                                    <div class="product-img">
                                                                        <img class="w-100"
                                                                            src="{{ asset('uploads/products') }}/{{ $item->getProducts->image }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="card_middle">
                                                                        <h6 class="product-des__title">
                                                                            {{ $item->getProducts->name }}
                                                                        </h6>
                                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                                aria-hidden="true"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <p class="product-des__price other-tab">+
                                                                        {{ number_format($item->getProducts->price,2) }} €
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="input-group update_value">
                                                                <div class="input-group-prepend">
                                                                    <button data-id="{{ $item->product_id }}" class="btn btn-outline-secondary btn-decrease qnt__decrease"
                                                                         type="button">-</button>
                                                                </div>

                                                                <input id="customProductQnt{{ $item->product_id }}" style="text-align: center" type="number" data-id="{{ $item->product_id }}" min="1"
                                                                    class="form-control value_input_field input-text custom_product_qnt"
                                                                    value="{{ getProductQuantity($item->product_id) }}" id="qty">

                                                                <div class="input-group-append">
                                                                    <button data-id="{{ $item->product_id }}" class="btn btn-outline-secondary btn-increase qnt__increase"
                                                                        type="button">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="modal fade bd-example-modal-xl" id="ProductDetailsModal{{ $item->id }}" tabindex="-1" role="dialog"
                                                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body content-center modal-content-all-p">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 center_img text-center">
                                                                                <img class="w-100 cart_propduct_image" src="{{ asset('uploads/products') }}/{{ $item->getProducts->image }}" alt="">
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <h2>{{ $item->getProducts->name }}</h2>  
                                                                                <p>{!! $item->getProducts->short_description !!}</p> 
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                                    <div class="card-2">
                                                        <div class="btn details_modal" data-toggle="modal"
                                                            data-target="#detailsModal">
                                                            <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="hovarable">
                                                            <div class="product-img">
                                                                <img class="w-100"
                                                                    src="https://www.fruitselect.com/1463-home_default/581.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="card_middle">
                                                                <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                                </h6>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <p class="product-des__price other-tab">+ 5,00 €</p>
                                                        </div>
                                                    </div>

                                                    <div class="input-group update_value">
                                                        <div class="input-group-prepend">
                                                            <button onclick="decreaseValue()"
                                                                class="btn btn-outline-secondary btn-decrease" id="decrease" ;
                                                                type="button">-</button>
                                                        </div>

                                                        <input style="text-align: center" type="number"
                                                            class="form-control value_input_field input-text" value="0" id="qty">

                                                        <div class="input-group-append">
                                                            <button onclick="increaseValue()"
                                                                class="btn btn-outline-secondary btn-increase" id="increase"
                                                                type="button">+</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                                    <div class="card-2">
                                                        <div class="btn details_modal" data-toggle="modal"
                                                            data-target="#detailsModal">
                                                            <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="hovarable">
                                                            <div class="product-img">
                                                                <img class="w-100"
                                                                    src="https://www.fruitselect.com/1464-home_default/582.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="card_middle">
                                                                <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                                </h6>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <p class="product-des__price other-tab">+ 5,00 €</p>
                                                        </div>
                                                    </div>
                                                    <div class="input-group update_value">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary btn-decrease"
                                                                type="button">-</button>
                                                        </div>
                                                        <input style="text-align: center" type="number"
                                                            class="form-control value_input_field" aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2" value="0">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary btn-increase"
                                                                type="button">+</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                                    <div class="card-2">
                                                        <div class="btn details_modal" data-toggle="modal"
                                                            data-target="#detailsModal">
                                                            <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="hovarable">
                                                            <div class="product-img">
                                                                <img class="w-100"
                                                                    src="https://www.fruitselect.com/1468-home_default/586.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="card_middle">
                                                                <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                                </h6>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <p class="product-des__price other-tab">+ 5,00 €</p>
                                                        </div>
                                                    </div>
                                                    <div class="input-group update_value">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary btn-decrease"
                                                                type="button">-</button>
                                                        </div>
                                                        <input style="text-align: center" type="number"
                                                            class="form-control value_input_field"
                                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                            value="0">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary btn-increase"
                                                                type="button">+</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                                    <div class="card-2">
                                                        <div class="btn details_modal" data-toggle="modal"
                                                            data-target="#detailsModal">
                                                            <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="hovarable">
                                                            <div class="product-img">
                                                                <img class="w-100"
                                                                    src="https://www.fruitselect.com/1471-home_default/589.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="card_middle">
                                                                <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                                </h6>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <p class="product-des__price other-tab">+ 5,00 €</p>
                                                        </div>
                                                    </div>
                                                    <div class="input-group update_value">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary btn-decrease"
                                                                type="button">-</button>
                                                        </div>
                                                        <input style="text-align: center" type="number"
                                                            class="form-control value_input_field"
                                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                            value="0">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary btn-increase"
                                                                type="button">+</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                                    <div class="card-2">
                                                        <div class="btn details_modal" data-toggle="modal"
                                                            data-target="#detailsModal">
                                                            <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="hovarable">
                                                            <div class="product-img">
                                                                <img class="w-100"
                                                                    src="https://www.fruitselect.com/1469-home_default/587.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="card_middle">
                                                                <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                                </h6>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <p class="product-des__price other-tab">+ 5,00 €</p>
                                                        </div>
                                                    </div>
                                                    <div class="input-group update_value">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary btn-decrease"
                                                                type="button">-</button>
                                                        </div>
                                                        <input style="text-align: center" type="number"
                                                            class="form-control value_input_field"
                                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                            value="0">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary btn-increase"
                                                                type="button">+</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                                    <div class="card-2">
                                                        <div class="btn details_modal" data-toggle="modal"
                                                            data-target="#detailsModal">
                                                            <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="hovarable">
                                                            <div class="product-img">
                                                                <img class="w-100"
                                                                    src="https://www.fruitselect.com/1470-home_default/588.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="card_middle">
                                                                <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                                </h6>
                                                                <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <p class="product-des__price other-tab">+ 5,00 €</p>
                                                        </div>
                                                    </div>
                                                    <div class="input-group update_value">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary btn-decrease"
                                                                type="button">-</button>
                                                        </div>
                                                        <input style="text-align: center" type="number"
                                                            class="form-control value_input_field"
                                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                            value="0">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary btn-increase"
                                                                type="button">+</button>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-lg-12">
                                        <div class="stepper_btn">
                                            <button class="stepper_previous_btn stepper_change_btn stepper_change__tab" data-next-id="{{ $loop->iteration }}" data-tab="{{ $loop->iteration -1 }}" id="preveous_btn-1"><span><i
                                                        class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                                        Previous</button>
                                            @if ($loop->last)
                                            <a href="{{ route('custombox.cart.index') }}" class="stepper_btn_next" data-next-id="{{ $loop->iteration + 2 }}" data-tab="{{ $loop->iteration +1 }}" id="Stepper_btn-2">
                                                Order
                                                <span>
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </span>
                                                </a>
                                            @else
                                            <button class="stepper_btn_next stepper_change_btn stepper_change__tab" data-next-id="{{ $loop->iteration + 2 }}" data-tab="{{ $loop->iteration +1 }}" type="button" id="Stepper_btn-2">Next
                                                <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></button>
                                            @endif
                                        </div>
                                    </div>
                                </div> 
                            @endforeach

                            {{-- <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">

                                <div class="tab-content_heading">
                                    <h3 class="tab-content_heading__title">Ajoutez des fruits exotiques EXTRA</h3>
                                </div>

                                <div class="img-cart">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1472-home_default/590.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1120-home_default/525.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1474-home_default/593.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1476-home_default/594.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1477-home_default/595.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1478-home_default/596.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1479-home_default/597.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                            <div class="card-2">
                                                <div class="btn details_modal" data-toggle="modal"
                                                    data-target="#detailsModal">
                                                    <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                                </div>
                                                <div class="hovarable">
                                                    <div class="product-img">
                                                        <img class="w-100"
                                                            src="https://www.fruitselect.com/1480-home_default/598.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="card_middle">
                                                        <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                        </h6>
                                                        <span><i class="fa fa-check-circle-o active-sign card-active"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="product-des">
                                                    <p class="product-des__price other-tab">+ 5,00 €</p>
                                                </div>
                                            </div>
                                            <div class="input-group update_value">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-decrease"
                                                        type="button">-</button>
                                                </div>
                                                <input style="text-align: center" type="number"
                                                    class="form-control value_input_field"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                    value="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-increase"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="stepper_btn">
                                                <button class="stepper_previous_btn preveous_btn-3"
                                                    id="preveous_btn-2"><span><i class="fa fa-chevron-left"
                                                            aria-hidden="true"></i></span>
                                                    Précédent</button>

                                                <button class="stepper_btn_next" type="button"
                                                    id="stepper_btn_next_3">Suivant
                                                    <span><i class="fa fa-chevron-right"
                                                            aria-hidden="true"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-gourmandises" role="tabpanel"
                                aria-labelledby="pills-gourmandises-tab">

                                <div class="tab-content_heading">
                                    <h3 class="tab-content_heading__title">Fruits secs</h3>
                                </div>

                                <div class="img-cart">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                        <div class="card-2">
                                            <div class="btn details_modal" data-toggle="modal" data-target="#detailsModal">
                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                            </div>
                                            <div class="hovarable">
                                                <div class="product-img">
                                                    <img class="w-100"
                                                        src="https://www.fruitselect.com/1329-home_default/539.jpg" alt="">
                                                </div>
                                                <div class="card_middle">
                                                    <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                    </h6>
                                                    <span><i class="fa fa-check-circle-o active-sign card-active"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="product-des">
                                                <p class="product-des__price other-tab">+ 5,00 €</p>
                                            </div>
                                        </div>
                                        <div class="input-group update_value">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary btn-decrease"
                                                    type="button">-</button>
                                            </div>
                                            <input style="text-align: center" type="number"
                                                class="form-control value_input_field" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2" value="0">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary btn-increase"
                                                    type="button">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                        <div class="card-2">
                                            <div class="btn details_modal" data-toggle="modal" data-target="#detailsModal">
                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                            </div>
                                            <div class="hovarable">
                                                <div class="product-img">
                                                    <img class="w-100"
                                                        src="https://www.fruitselect.com/1330-home_default/540.jpg" alt="">
                                                </div>
                                                <div class="card_middle">
                                                    <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                    </h6>
                                                    <span><i class="fa fa-check-circle-o active-sign card-active"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="product-des">
                                                <p class="product-des__price other-tab">+ 5,00 €</p>
                                            </div>
                                        </div>
                                        <div class="input-group update_value">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary btn-decrease"
                                                    type="button">-</button>
                                            </div>
                                            <input style="text-align: center" type="number"
                                                class="form-control value_input_field" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2" value="0">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary btn-increase"
                                                    type="button">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                        <div class="card-2">
                                            <div class="btn details_modal" data-toggle="modal" data-target="#detailsModal">
                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                            </div>
                                            <div class="hovarable">
                                                <div class="product-img">
                                                    <img class="w-100"
                                                        src="https://www.fruitselect.com/213-home_default/150.jpg" alt="">
                                                </div>
                                                <div class="card_middle">
                                                    <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                    </h6>
                                                    <span><i class="fa fa-check-circle-o active-sign card-active"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="product-des">
                                                <p class="product-des__price other-tab">+ 5,00 €</p>
                                            </div>
                                        </div>
                                        <div class="input-group update_value">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary btn-decrease"
                                                    type="button">-</button>
                                            </div>
                                            <input style="text-align: center" type="number"
                                                class="form-control value_input_field" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2" value="0">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary btn-increase"
                                                    type="button">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                        <div class="card-2">
                                            <div class="btn details_modal" data-toggle="modal" data-target="#detailsModal">
                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                            </div>
                                            <div class="hovarable">
                                                <div class="product-img">
                                                    <img class="w-100"
                                                        src="https://www.fruitselect.com/1117-home_default/524.jpg" alt="">
                                                </div>
                                                <div class="card_middle">
                                                    <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                    </h6>
                                                    <span><i class="fa fa-check-circle-o active-sign card-active"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="product-des">
                                                <p class="product-des__price other-tab">+ 5,00 €</p>
                                            </div>
                                        </div>
                                        <div class="input-group update_value">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary btn-decrease"
                                                    type="button">-</button>
                                            </div>
                                            <input style="text-align: center" type="number"
                                                class="form-control value_input_field" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2" value="0">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary btn-increase"
                                                    type="button">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                        <div class="card-2">
                                            <div class="btn details_modal" data-toggle="modal" data-target="#detailsModal">
                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                            </div>
                                            <div class="hovarable">
                                                <div class="product-img">
                                                    <img class="w-100"
                                                        src="https://www.fruitselect.com/1332-home_default/542.jpg" alt="">
                                                </div>
                                                <div class="card_middle">
                                                    <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                    </h6>
                                                    <span><i class="fa fa-check-circle-o active-sign card-active"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="product-des">
                                                <p class="product-des__price other-tab">+ 5,00 €</p>
                                            </div>
                                        </div>
                                        <div class="input-group update_value">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary btn-decrease"
                                                    type="button">-</button>
                                            </div>
                                            <input style="text-align: center" type="number"
                                                class="form-control value_input_field" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2" value="0">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary btn-increase"
                                                    type="button">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 cart-items-body">
                                        <div class="card-2">
                                            <div class="btn details_modal" data-toggle="modal" data-target="#detailsModal">
                                                <i class="fa fa-search-plus search_details" aria-hidden="true"></i>
                                            </div>
                                            <div class="hovarable">
                                                <div class="product-img">
                                                    <img class="w-100"
                                                        src="https://www.fruitselect.com/1331-home_default/541.jpg" alt="">
                                                </div>
                                                <div class="card_middle">
                                                    <h6 class="product-des__title">FRUITIBOX À PERSONNALISER
                                                    </h6>
                                                    <span><i class="fa fa-check-circle-o active-sign card-active"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="product-des">
                                                <p class="product-des__price other-tab">+ 5,00 €</p>
                                            </div>
                                        </div>
                                        <div class="input-group update_value">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary btn-decrease"
                                                    type="button">-</button>
                                            </div>
                                            <input style="text-align: center" type="number"
                                                class="form-control value_input_field" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2" value="0">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary btn-increase"
                                                    type="button">+</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="stepper_btn">
                                            <button class="stepper_previous_btn preveous_btn-3"
                                                id="preveous_btn-3"><span><i class="fa fa-chevron-left"
                                                        aria-hidden="true"></i></span>
                                                Précédent</button>

                                            <button class="stepper_btn_next" type="button" id="stepper_btn_next_4">Suivant
                                                <span><i class="fa fa-chevron-right"
                                                        aria-hidden="true"></i></span></button>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 top-gap">
                    <div class="fruits_cart">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-header__title">Your basket</h4>
                                <hr>
                            </div>
                            <div id="customBoxCart">
                                @include('includes.custom_box_cart')
                            </div>
                            {{-- <div class="form-group cart-quantity">
                                <label for="#">Quantité :</label>
                                <input type="number" class="form-control">
                            </div> --}}
                            <div class="cart-btn cart-right_btn" id="submitWithoutLink">
                                <button class="btn cart-btn__suivant cart-right stepper_change_btn_2" id="stepper_change_btn_right" data-tab="1">
                                    <a href="#" class="cart-btn_bottom">
                                        Next
                                        <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                    </a>
                                </button>
                            </div>
                            <div class="cart-btn cart-right_btn d-none" id="submitWithLink">
                                <button class="btn cart-btn__suivant cart-right" data-tab="1">
                                    <a href="{{ route('custombox.cart.index') }}" class="cart-btn_bottom">
                                        <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> 
                                        Add to basket
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" id="detailsModal" tabindex="-1" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body content-center modal-content-all-p">
                        <div class="row">
                            <div class="col-lg-12 center_img text-center">
                                <img class="w-100 cart_propduct_image"
                                    src="https://www.fruitselect.com/1663-home_default/497.jpg" alt="">
                            </div>
                            <div class="col-lg-12">
                                <p>FRUITIBOX 3 KG</p>
                                <h2>3 kg net of seasonal fruit for real fruity pleasures :</h2>
                                <p style="line-height:normal;">Clementines</p>
                                <p style="line-height:normal;">Yellow nectarines</p>
                                <p style="line-height:normal;">Organic bananas (hand of 4-5 bananas)</p>
                                <p style="line-height:normal;">Pear Conference (Hauts-de-France)</p>
                                <p style="line-height:normal;">Apple : Gala (France / Limousin)&nbsp;</p>
                                <p style="line-height:normal;">Apple Golden (France)</p>
                                <p style="line-height:normal;">Apple Granny Smith (France / Loire Valley)</p>
                                <p style="line-height:normal;">Oranges</p>
                                <p style="line-height:normal;">Kiwis</p>
                                <p style="line-height:normal;">&nbsp;</p>
                                <a href="#">https://www.youtube.com/watch?v=jD62xjCUVFM</a>
                                <p>* Photo not contractual. The fruit may vary according to seasonality. The foliage is used for presentation photos, it is not included in the FruitiBox.</p>
                                <h2>Carefully selected responsible producers.</h2>
                                <p>We are also committed to promoting our producers and our terroirs</strong>.</p>
                                <p>In our baskets, you will find a selection of <strong>seasonal fruit from sustainable or organic farming</strong>. Environmentally friendly, they have an authentic and tasty taste.</p>
                                <p>For example, our apples are harvested by hand between the end of June and September/December and preserved using a technique <strong>100% natural.</strong></p>
                                <p>Choosing our FruitiBoxes and fruit baskets means supporting rural development and rural development and <strong>respect the producer by buying at the right price</strong>.</p>
                                <p><strong>Enjoy good fruit through our boxes made by our craftsmen fruit growers.</strong></p>


                            </div>
                            <div class="col-12 text-center">
                                <img class="authore-image w-100"
                                    src="https://www.fruitselect.com/img/cms/IMG_1522-min-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Slider -->
    <div class="container">

        <!-- Related Slider -->
        <div class="related-pro">
            <div class="slider-items-products">
                <div class="related-block">
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="home-block-inner">
                            <div class="block-title">
                                <h2>Products<br>
                                    <em>associates</em>
                                </h2>
                            </div>
                            {{-- <div class="pretext">Sem vel turpis, mi vivamus wisi, velit dolor nulla vehicula elit molestie imperdiet, quo ipsum vitae fusce consequat. Amet id posuere amet, vitae vestibulum elit est maecenas sapien ut. </div> --}}
                            <a href="{{ route('frontend.products') }}" class="view_more_bnt">See all</a>
                        </div>
                        <div class="slider-items slider-width-col4 products-grid block-content">

                            @include('includes.products', ['latestProducts' => $products])

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End related products Slider -->

    </div>
    <!-- Related Products Slider End -->

    <!-- Upsell Product Slider -->
@endsection

@section('js')
    <script>
        $(document).ready(function () {   
            let product_id = []
             $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function render(){
                $.ajax({
                    url  : "{{ route('custom.box.cart.render') }}", 
                    type : "POST", 
                    success : function(data){ 
                        $('#customBoxCart').html(data.view);
                        console.log(data.data);
                    }  
                });
            }
            $('.stepper_change_btn').click(function(){ 
                $('#pills-profile-tab'+$(this).attr('data-tab')).tab('show'); 
            });
            $('.stepper_change_btn_2').click(function(){ 
                var tab_id = $(this).attr('data-tab'); 
                $('#pills-profile-tab'+tab_id).tab('show');
                 if ($('#CategoryCount').val() == parseInt(tab_id)+1){
                     $('#submitWithLink').removeClass('d-none');
                     $('#submitWithoutLink').addClass('d-none');
                 }
                 else{
                     $('#submitWithLink').addClass('d-none');
                     $('#submitWithoutLink').removeClass('d-none');
                 }
                  
                $(this).attr('data-tab', parseInt(tab_id)+1);
            });
            $('.stepper_change_btn_right').click(function(){ 
                $('#pills-profile-tab'+$(this).attr('data-tab')).tab('show'); 
            });
            $('body').on('click', '.stepper_change__tab', function(){
                $('#stepper_change_btn_right').attr('data-tab', $(this).attr('data-next-id'));
                if ($('#CategoryCount').val() == $(this).attr('data-next-id')){
                     $('#submitWithLink').removeClass('d-none');
                     $('#submitWithoutLink').addClass('d-none');
                 }
                 else{
                     $('#submitWithLink').addClass('d-none');
                     $('#submitWithoutLink').removeClass('d-none');
                 }
            });
            $('body').on('click', '.custom_box_checked', function(){
                let box_id = $(this).attr('data-box-id'); 
                  $.ajax({
                    url  : "{{ route('custom.box.change') }}", 
                    type : "POST",
                    data : {  
                        box_id : box_id,
                    },
                    success : function(data){  
                        render();
                    }  
                });
            });

            $('body').on('click', '.custom_product_select', function(){  
                let id =$(this).attr('data-product-id');
                let qnt = $('#customProductQnt'+id).val();
                if(qnt == 0){
                    $('#customProductQnt'+id).val(1);
                    qnt = 1;
                }
                $.ajax({
                    url  : "{{ route('custom.box.product.select') }}", 
                    type : "POST",
                    data : {  
                        id : id,
                        qnt : qnt,
                    },
                    success : function(data){ 
                        render();
                    } 
                });
            });
            $('body').on('click', '.qnt__increase', function(){  
                let id =$(this).attr('data-id');
                let qnt = $('#customProductQnt'+id).val();  
                $('#customProductQnt'+id).val(parseInt(qnt)+1);
                if(!$('#hovarable_cart'+id).hasClass('active')){
                    $('#hovarable_cart'+id).addClass('active');
                }
                $.ajax({
                    url  : "{{ route('custom.box.qnt.update') }}", 
                    type : "POST",
                    data : {  
                        id : id,
                        qnt : parseInt(qnt)+1,
                    },
                    success : function(data){  
                        render();
                    } 
                });
            });
            $('body').on('click', '.qnt__decrease', function(){  
                let id =$(this).attr('data-id');
                let qnt = $('#customProductQnt'+id).val(); 
                if(qnt>1){ 
                    $('#customProductQnt'+id).val(parseInt(qnt)-1); 
                    $.ajax({
                    url  : "{{ route('custom.box.qnt.update') }}", 
                    type : "POST",
                    data : {  
                        id : id,
                        qnt : parseInt(qnt)-1,
                    },
                    success : function(data){  
                        render();
                    } 
                });
                }
            });
            $('body').on('blur', '.custom_product_qnt', function(){  
                let id = $(this).attr('data-id');
                let qnt = $(this).val();
                if(qnt => 1){ 
                    if(!$('#hovarable_cart'+id).hasClass('active')){
                        $('#hovarable_cart'+id).addClass('active');
                    }
                    $.ajax({
                        url  : "{{ route('custom.box.qnt.update') }}", 
                        type : "POST",
                        data : {  
                            id : id,
                            qnt : qnt,
                        },
                        success : function(data){ 
                            render();
                        } 
                    });
                }
            });
         });
    </script>
@endsection
