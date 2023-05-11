@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | {{ $product->name }} 
@endsection

@section('content')
<div class="sp-single sp-single-4 des_pr_layout_1 mb__60">

    <!-- breadcrumb -->
    <div class="bgbl pt__20 pb__20 lh__1">
        <div class="container">
            <div class="row al_center">
                <div class="col">
                    <nav class="sp-breadcrumb">
                        <a href="{{ url('/') }}">Home</a>
                        <i class="facl facl-angle-right"></i>
                        <a href="{{ route('frontend.productsbycategory', $product->getCategory->name) }}">{{ ucfirst($product->getCategory->name) }}</a><i class="facl facl-angle-right"></i>
                        <a href="{{ route('frontend.productsbysubcategory', ['name' => $product->getSubCategory->name, 'id' => $product->getSubCategory->id]) }}">
                            {{ ucfirst($product->getSubCategory->name) }}
                        </a>
                    </nav>
                </div>
                {{--  <div class="col-auto flex al_center">
                    <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-left"></i><span class="tt_txt">Cream women pants</span></a>
                    <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__20 cd chp ttip_nt tooltip_bottom_left"><i class="fwb iccl iccl-grid fs__15"></i><span class="tt_txt">Back to New Arrival</span></a>
                    <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-right"></i><span class="tt_txt">Short Sleeved Hoodie</span></a>
                </div>  --}}
            </div>
        </div>
    </div>
    <!-- end breadcrumb -->

    <div class="container container_cat cat_default">
        <div class="row product mt__40">
            <div class="col-md-12 col-12 thumb_bottom">
                <div class="row mb__50 pr_sticky_content">

                    <!-- product thumbnails -->
                    <div class="col-md-6 col-12 pr product-images img_action_zoom pr_sticky_img kalles_product_thumnb_slide">
                        <div class="row theiaStickySidebar">
                            <div class="col-12 col_thumb">
                                <div class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel" data-flickity='{"initialIndex": ".media_id_001","fade":true,"draggable":">1","cellSelector": ".p-item:not(.is_varhide)","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>
                                    <div
                                            data-grname="not4"
                                            data-grpvl="ntt4"
                                            class="img_ptw p_ptw js-sl-item p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload media_id_001 padding-top__127_571"
                                            data-mdid="001"
                                            data-mdtype="image"
                                            data-bgset="{{ asset('uploads/products') }}/{{ $product->image }}"
                                            data-src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                            data-ratio="0.7838776928422516"
                                            data-width="1128"
                                            data-height="1439" 
                                            data-cap="{{ $product->name }}"
                                    >
                                        <img class="op_0 dn" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="{{ $product->name }}"/>
                                    </div>
                                   @foreach ($product->getMultipleImages as $image)
                                   <div
                                   data-grname="not4"
                                   data-grpvl="ntt4"
                                   class="img_ptw p_ptw js-sl-item p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload media_id_002 padding-top__127_571"
                                   data-mdid="002"
                                   data-mdtype="image"
                                   data-bgset="{{ asset('uploads/products') }}/{{ $image->multiple_image }}"
                                   data-src="{{ asset('uploads/products') }}/{{ $image->multiple_image }}"
                                   data-ratio="0.7838776928422516"
                                   data-width="1128"
                                   data-height="1439"
                                   data-cap="{{ $product->name }}"
                           >
                               <img class="op_0 dn" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="{{ $product->name }}"/>
                           </div>
                                   @endforeach
                                </div>
                                <span class="tc nt_labels pa pe_none cw"></span>
                                <div class="p_group_btns pa flex">
                                    <button class="br__40 tc flex al_center fl_center bghp show_btn_pr_gallery ttip_nt tooltip_top_left">
                                        <i class="las la-expand-arrows-alt"></i><span class="tt_txt">Click to enlarge</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col_nav nav_medium">
                                <div class="p-nav ratio_imgtrue row equal_nt nt_cover position_8 nt_slider pr_carousel" data-flickityjs='{"cellSelector": ".n-item:not(.is_varhide)","cellAlign": "left","asNavFor": ".p-thumb","wrapAround": true,"draggable": ">1","autoPlay": 0,"prevNextButtons": 0,"percentPosition": 1,"imagesLoaded": 0,"pageDots": 0,"groupCells": true,"rightToLeft": false,"contain":  1,"freeScroll": 0}'></div>
                            </div>
                            <div class="dt_img_zoom pa t__0 r__0 dib"></div>
                        </div>
                    </div>
                    <!-- end product thumbnails -->

                    <!-- product info -->
                    <div class="col-md-6 col-12 product-infors pr_sticky_su">
                        <div class="theiaStickySidebar">
                            <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                                <h1 class="product_title entry-title fs__16">{{ $product->name }}</h1>
                                <div class="flex wrap fl_between al_center price-review">
                                     {{--  <p class="price_range" id="price_ppr">${{ $product->price }}</p>  --}}
                                    @if($product->display_as == 'sale')
                                    <p class="price_range"><del>${{ $product->price }}.00</del> ৳{{ $product->price - ($product->discount/100) * $product->price }}.00</p>
                                    @else 
                                    <p class="price_range">${{ $product->price  }}.00</p>
                                    @endif
                                    <a href="#tab_reviews_product" class="rating_sp_kl dib">
                                        <div class="kalles-rating-result">
                                            <span class="kalles-rating-result__pipe">
                                                <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                            </span>
                                            <span class="kalles-rating-result__number">(06 reviews)</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="pr_short_des">
                                    <p class="mg__0">{{ $product->short_description }}</p>
                                </div>
                                <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                    {{-- Size Color Css Start --}}
                                    <style>
                                        .size_color ul li {
                                            list-style: none;
                                            margin-right: 15px;
                                        }
                                        .size_color [type="radio"]:checked,
                                        .size_color [type="radio"]:not(:checked) {
                                            position: absolute;
                                            left: -9999px;
                                        }
                                        .size_color [type="radio"]:checked + label,
                                        .size_color [type="radio"]:not(:checked) + label
                                        {
                                            position: relative;
                                            padding-left: 31px;
                                            cursor: pointer;
                                            line-height: 25px;
                                            display: inline-block;
                                            color: #666;
                                        }
                                        .size_color [type="radio"]:checked + label:before,
                                        .size_color [type="radio"]:not(:checked) + label:before {
                                            content: '';
                                            position: absolute;
                                            left: 0;
                                            top: 0;
                                            width: 26px;
                                            height: 26px;
                                            border: 1px solid #ddd;
                                            border-radius: 100%;
                                            background: #fff;
                                        }
                                        .size_color [type="radio"]:checked + label:after,
                                        .size_color [type="radio"]:not(:checked) + label:after {
                                            content: '';
                                            width: 18px;
                                            height: 18px;
                                            background: #56cfe1;
                                            position: absolute;
                                            top: 4px;
                                            left: 4px;
                                            border-radius: 100%;
                                            -webkit-transition: all 0.2s ease;
                                            transition: all 0.2s ease;
                                        }
                                        .size_color [type="radio"]:not(:checked) + label:after {
                                            opacity: 0;
                                            -webkit-transform: scale(0);
                                            transform: scale(0);
                                        }
                                        .size_color [type="radio"]:checked + label:after {
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            transform: scale(1);
                                        }
                                       
                                    </style>
                                     {{-- Size Color Css End --}}
                                    <form action="">
                                        <div id="callBackVariant_ppr" class="size_color">
                                            <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                                               @if ($product->getColors)
                                                <div class="align-items-center" style="margin-bottom: 15px">
                                                    <h4 class="swatch__title" style="margin-right: 10px">Colors:</h4>
                                                    <ul class="d-flex">
                                                        @foreach ($product->getColors as $color)
                                                        <li style="list-style: none;">
                                                            <input value="{{ $color->id }}" type="radio" id="test1{{ $color->id }}" name="radio-group">
                                                            <label for="test1{{ $color->id }}">
                                                                <div style="height: 25px; width:25px; border-radius:50%; background:{{ $color->color }}">

                                                                </div>
                                                            </label>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                               @endif
                                               
                                               @if ($product->getSizes)
                                                <div class="align-items-center product_size">
                                                    <h4 class="swatch__title">Sizes:</h4>
                                                    <ul class="d-flex align-items-center">      
                                                        @foreach ($product->getSizes as $size)
                                                            <li>
                                                                <input value="{{ $size->id }}" type="radio" id="test1{{ $size->id }}" name="radio-group">
                                                                <label for="test1{{ $size->id }}">{{ $size->size }}</label>
                                                            </li>   
                                                        @endforeach
                                                    </ul>
                                                </div>
                                               @endif
                                           </div> 
                                           <div class="nt_cart_form variations_form variations_form_ppr">
                                               <div class="variations_button in_flex column w__100 buy_qv_false">
                                                   <div class="flex wrap">
                                                       <div class="quantity pr mr__10 order-1 qty__true d-inline-block" id="sp_qty_ppr">
                                                           <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" name="quantity" value="1">
                                                           <div class="qty tc fs__14">
                                                               <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                                   <i class="facl facl-plus"></i></button>
                                                               <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                                                   <i class="facl facl-minus"></i></button>
                                                           </div>
                                                       </div>
                                                       <div class="nt_add_w ts__03 pa order-3">
                                                           <a href="#" class="wishlistadd cb chp ttip_nt tooltip_top_left">
                                                               <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                                           </a>
                                                       </div>
                                                       <button type="submit" data-time="6000" data-ani="shake" class="single_add_to_cart_button button truncate w__100 mt__20 order-4 d-inline-block animated">
                                                           <span class="txt_add ">Add to cart</span>
                                                       </button>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                    </form>
                                </div>
                                <div id="trust_seal_ppr" class="pr_trust_seal tl_md tc">

                                    <img class="img_tr_s1 lazyload w__100 max-width__330px" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%202244%20285%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="" data-srcset="{{ asset('frontend_assets/assets/images/single-product/trust_img2.png') }}"/>
                                </div>
                     
                                <div class="product_meta">
                                    <span class="sku_wrapper"><span class="cb">SKU:</span> <span class="sku value cg d-inline-block">{{ $product->sku }}</span></span>
                                    <span class="posted_in"><span class="cb">Categories:</span> <a href="{{ route('frontend.products') }}" class="cg">All</a>, <a href="{{ route('frontend.productsbycategory', $product->getCategory->name) }}" class="cg">{{ ucfirst($product->getCategory->name) }}</a>, <a href="{{ route('frontend.productsbysubcategory', ['name' => $product->getSubCategory->name, 'id' => $product->getSubCategory->id]) }}" class="cg">{{ ucfirst($product->getSubCategory->name) }}</a>, <a href="#" class="cg">{{ ucfirst($product->display_as) }}</a>, <a href="shop-filter-options.html" class="cg">New Arrival</a>, <a href="shop-filter-options.html" class="cg">Women</a></span>
                                </span>
                                </div>
                                <div class="social-share tc">
                                    <div class="at-share-btn-elements kalles-social-media d-block text-left fs__0 lh__1">
                                        <a href="https://www.facebook.com/" class="at-icon-wrapper at-share-btn at-svc-facebook bg-white kalles-social-media__btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-facebook">
                                                <g>
                                                    <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/" class="at-icon-wrapper at-share-btn at-svc-twitter bg-white kalles-social-media__btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-twitter">
                                                <g>
                                                    <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="https://www.google.com/gmail/about" class="at-icon-wrapper at-share-btn at-svc-email bg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-email kalles-social-media__btn">
                                                <g>
                                                    <g fill-rule="evenodd"></g>
                                                    <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                                                    <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="https://www.pinterest.com/" class="at-icon-wrapper at-share-btn at-svc-pinterest_share bg-white kalles-social-media__btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-pinterest_share">
                                                <g>
                                                    <path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="https://www.messenger.com" class="at-icon-wrapper at-share-btn at-svc-messenger bg-white kalles-social-media__btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-messenger">
                                                <g>
                                                    <path d="M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end product info -->

                </div>
            </div>
        </div>
    </div>

    <!-- description and review -->
    <div id="wrap_des_pr">
        <div class="container container_des">
            <div class="kalles-section-pr_description kalles-section kalles-tabs sp-tabs nt_section">

                <!-- tab buttons -->
                <ul class="ul_none ul_tabs is-flex fl_center fs__16 des_mb_2 des_style_1">
                    <li class="tab_title_block active">
                        <a class="db cg truncate pr" href="#tab_product_description">Description</a>
                    </li>
                    {{-- <li class="tab_title_block">
                        <a class="db cg truncate pr" href="#tab_wash_and_care">Wash &amp; Care</a>
                    </li> --}}
                    <li class="tab_title_block">
                        <a class="db cg truncate pr" href="#tab_reviews_product">Reviews</a>
                    </li>
                </ul>
                <!-- end tab buttons -->

                <!-- tab contents -->
                <div class="panel entry-content sp-tab des_mb_2 des_style_1 active" id="tab_product_description">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_product_description"><span class="txt_h_tab">Description</span><span class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <div class="row al_center">
                            <div class="col-12 col-md-6 mt__10 mb__20">
                                <p class="cb">
                                    {{ $product->long_description }}
                                </p> 

                              
                            </div>
                            <div class="col-12 col-md-6 mt__10 mb__20">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb__30">
                                        <div class="tc">
                                            <i class="pegk pe-7s-car fs__40"></i>
                                            <div class="info-box-content">
                                                <h4 class="box-title">FREE SHIPPING</h4>
                                                <span class="box-inner cb">Free shipping on all BD order or order above ৳100</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb__30">
                                        <div class="tc">
                                            <i class="pegk pe-7s-help2 fs__40"></i>
                                            <div class="info-box-content">
                                                <h4 class="box-title">SUPPORT 24/7</h4>
                                                <span class="box-inner cb">Contact us 24 hours a day, 7 days a week</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="tc">
                                            <i class="pegk pe-7s-refresh fs__40"></i>
                                            <div class="info-box-content">
                                                <h4 class="box-title">30 DAYS RETURN</h4>
                                                <span class="box-inner cb">Simply return it within 30 days for an exchange</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="tc">
                                            <i class="pegk pe-7s-door-lock fs__40"></i>
                                            <div class="info-box-content">
                                                <h4 class="box-title">100% PAYMENT SECURE</h4>
                                                <span class="box-inner cb">We ensure secure payment with PEV</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_wash_and_care">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_wash_and_care"><span class="txt_h_tab"></span><span class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <ul class="flex ul_none fl_center">
                            <li class="l_custom_svg">
                                <svg viewBox="0 0 40 40">
                                    <path fill="currentColor" d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z"></path>
                                </svg>
                            </li>
                            <li class="l_custom_svg">
                                <svg viewBox="0 0 40 40">
                                    <path fill="currentColor" d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z"></path>
                                </svg>
                            </li>
                            <li class="l_custom_svg">
                                <svg viewBox="0 0 40 40">
                                    <path fill="currentColor" d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z"></path>
                                </svg>
                            </li>
                            <li class="l_custom_svg">
                                <svg viewBox="0 0 40 40">
                                    <path fill="currentColor" d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z"></path>
                                </svg>
                            </li>
                            <li class="l_custom_svg">
                                <svg viewBox="0 0 40 40">
                                    <path fill="currentColor" d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z"></path>
                                </svg>
                            </li>
                            <li class="l_custom_svg">
                                <svg viewBox="0 0 40 40">
                                    <path fill="currentColor" d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z"></path>
                                </svg>
                            </li>
                            <li class="l_custom_svg">
                                <svg viewBox="0 0 40 40">
                                    <path fill="currentColor" d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z"></path>
                                </svg>
                            </li>
                        </ul>
                        <p class="tc cb">LT01: 70% wool, 15% polyester, 10% polyamide, 5% acrylic 900 Grms/mt</p>
                    </div>
                </div> --}}
                <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_reviews_product">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_reviews_product"><span class="txt_h_tab">Reviews</span><span class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <div class="lt-block-reviews">
                            <div class="r--desktop r--tablet w__100">
                                <div id="r--masonry-theme" class="r--show-part-preview">
                                    <div class="r--masonry-theme">
                                        <div class="header-v1 masonry-header">
                                            <div class="r--header">
                                                <div class="r--overview">
                                                    <div class="r--overview-left">
                                                        <div class="r--star-block r--star-850">
                                                            <span class="r--title-average">Average</span>
                                                            <span class="r--stars_average">4.8</span>
                                                            <div class="r--stars cpl">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    </span>
                                                                </div>
                                                                <span class="r--total-view">13 <span>Reviews</span></span>
                                                            </div>
                                                        </div>
                                                        <table class="r--rateList r--rate-850">
                                                            <tr class="">
                                                                <td class="r--rate-name">
                                                                    <div>Excellent</div>
                                                                </td>
                                                                <td class="r--rate-numeral">
                                                                    <span class="r--total-bar-default">
                                                                        <span class="r--bar_bak_gray width__93">
                                                                            <span class="r--bar-active">
                                                                                <span class="r--rate-percent-default">12
                                                                                    <span class="r--rate-after"></span> <span class="r--rate-before"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="r--disable">
                                                                <td class="r--rate-name">
                                                                    <div>Very Good</div>
                                                                </td>
                                                                <td class="r--rate-numeral">
                                                                    <span class="r--total-bar-default">
                                                                        <span class="r--bar_bak_gray">
                                                                            <span class="r--bar-active r--noneBack">
                                                                                <span class="r--rate-percent-default">0
                                                                                    <span class="r--rate-after"></span> <span class="r--rate-before"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td class="r--rate-name">
                                                                    <div>Average</div>
                                                                </td>
                                                                <td class="r--rate-numeral">
                                                                    <span class="r--total-bar-default">
                                                                        <span class="r--bar_bak_gray width__7">
                                                                            <span class="r--bar-active">
                                                                                <span class="r--rate-percent-default">1
                                                                                    <span class="r--rate-after"></span> <span class="r--rate-before"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="r--disable">
                                                                <td class="r--rate-name">
                                                                    <div>Poor</div>
                                                                </td>
                                                                <td class="r--rate-numeral">
                                                                    <span class="r--total-bar-default">
                                                                        <span class="r--bar_bak_gray">
                                                                            <span class="r--bar-active r--noneBack">
                                                                                <span class="r--rate-percent-default">0
                                                                                    <span class="r--rate-after"></span> <span class="r--rate-before"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="r--disable">
                                                                <td class="r--rate-name">
                                                                    <div>Terrible</div>
                                                                </td>
                                                                <td class="r--rate-numeral">
                                                                    <span class="r--total-bar-default">
                                                                        <span class="r--bar_bak_gray">
                                                                            <span class="r--bar-active r--noneBack">
                                                                                <span class="r--rate-percent-default">0
                                                                                    <span class="r--rate-after"></span> <span class="r--rate-before"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="r--overview-right">
                                                        <div class="show-modal-mobile">
                                                            <a class="r--button r--flex-center bg-yellow text-white ajax_pp_js" href="#" data-id="#popup-leave-review">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.37" height="17.8" viewBox="0 0 21.682 21.602">
                                                                    <g id="Symbol_32_2" data-name="Symbol 32 – 2" transform="translate(-961.98 -374.155)">
                                                                        <path d="M0,0H4V11.2L1.937,14h0L0,11.2Z" transform="translate(979.891 381.756) rotate(40)" fill="none" stroke="#ffffff" stroke-linejoin="round" stroke-width="1"></path>
                                                                        <path d="M0,0H4" transform="translate(972.692 390.335) rotate(40)" fill="none" stroke="#ffffff" stroke-width="1"></path>
                                                                        <g transform="translate(981.126 380.964) rotate(40)" fill="none" stroke="#ffffff" stroke-width="1">
                                                                            <rect width="3.128" height="1.4" stroke="none"></rect>
                                                                            <rect x="0.5" y="0.5" width="2.128" height="0.4" fill="none"></rect>
                                                                        </g>
                                                                        <path d="M2858.324,3384.6h7.412" transform="translate(-1891.1 -3003.987)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                                        <path d="M2858.324,3384.6h7.412" transform="translate(-1891.1 -2999.611)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-width="1"></path>
                                                                        <path d="M8.952,0H15a2,2,0,0,1,2,2V15a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V12.162" transform="translate(979.48 391.655) rotate(180)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                                    </g>
                                                                </svg>
                                                                <span class="r--text-write">Write a review</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="r--filter-review">
                                                    <div class="r--filter-wrapper">
                                                        <div class="r--sortBy">
                                                            <div class="r--unset-select r--sort-button r--filter-link r--flex-center el-popover__reference">
                                                                <span class="r--select">Sort by: Latest </span>
                                                                <img src="assets/images/single-product/icon-down.svg" width="8" height="4" class="r--select r--icon-down" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="r--filter">
                                                            <div class="r--unset-select r--sort-button r--filter-link r--flex-center el-popover__reference">
                                                                <span class="r--select">Filter</span>
                                                                <img src="assets/images/single-product/icon-down.svg" width="8" height="4" class="r--select r--icon-down" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="r--showing r--f-left">
                                                        <span class="r--text-showing">Showing 1 - 6 of 13 reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="r--grid">
                                            <div class="r--grid-item">
                                                <div class="r--author r--text-limit">
                                                    <div class="r--avatar-default text-center text-white">P</div>
                                                    <span class="r--author-review">Peter</span>
                                                </div>
                                                <div class="r--item-body">
                                                    <div class="r--item-body-top">
                                                        <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                            <div class="kalles-rating-result">
                                                                <span class="kalles-rating-result__pipe">
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                    <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                    <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    <ul class="r--reply-helpul r--body-item r--flex-center">
                                                        <li class="r--helpul-item">
                                                            <div class="r--like">
                                                                <div class="r--like-icon like r--flex-center">
                                                                    <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.939" class="r--icon-like">
                                                                        <g transform="translate(-926.048 -414.43)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(929.463 415.021)" class="cls-1"></path>
                                                                            <path d="M945.558,421.769v11.039l-2.9-.279V422.22Z" transform="translate(-16.112 -0.939)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">12</span>
                                                                </div>
                                                                <div class="r--like-icon dislike r--flex-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.659" class="r--icon-dislike">
                                                                        <g transform="translate(956.922 435.325) rotate(180)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(944.575 418.257)" class="cls-1"></path>
                                                                            <path d="M945.558,421.946v10.321l-2.9.261V421.777Z" transform="translate(-1 2.296)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">08</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="r--helpul-item r--reply-review r--flex-center ajax_pp_js" data-id="#popup-reply-review">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.125 17.584" class="r--icon-reply">
                                                                <defs>
                                                                    <clipPath>
                                                                        <rect width="14.094" height="3.924" class="cls-1"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(-784.909 -833.715)">
                                                                    <path d="M4.01,12.938H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H18.125a2,2,0,0,1,2,2v8.937a2,2,0,0,1-2,2H8.78l-.667.923L6.4,16.232Z" transform="translate(785.409 834.215)" class="cls-2"></path>
                                                                    <g transform="translate(788.554 839.127)" class="cls-3">
                                                                        <g transform="translate(-739 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-734 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-729 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <span>02</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="r--grid-item">
                                                <div class="r--author r--text-limit">
                                                    <div class="r--avatar-default text-center text-white avatar--bg-red">K</div>
                                                    <span class="r--author-review">Kodeman</span>
                                                </div>
                                                <div class="r--item-body">
                                                    <div class="r--item-body-top">
                                                        <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                            <div class="kalles-rating-result">
                                                                <span class="kalles-rating-result__pipe">
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                    <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                    <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    <ul class="r--reply-helpul r--body-item r--flex-center">
                                                        <li class="r--helpul-item">
                                                            <div class="r--like">
                                                                <div class="r--like-icon like r--flex-center">
                                                                    <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.939" class="r--icon-like">
                                                                        <g transform="translate(-926.048 -414.43)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(929.463 415.021)" class="cls-1"></path>
                                                                            <path d="M945.558,421.769v11.039l-2.9-.279V422.22Z" transform="translate(-16.112 -0.939)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">12</span>
                                                                </div>
                                                                <div class="r--like-icon dislike r--flex-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.659" class="r--icon-dislike">
                                                                        <g transform="translate(956.922 435.325) rotate(180)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(944.575 418.257)" class="cls-1"></path>
                                                                            <path d="M945.558,421.946v10.321l-2.9.261V421.777Z" transform="translate(-1 2.296)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">08</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="r--helpul-item r--reply-review r--flex-center ajax_pp_js" data-id="#popup-reply-review">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.125 17.584" class="r--icon-reply">
                                                                <defs>
                                                                    <clipPath>
                                                                        <rect width="14.094" height="3.924" class="cls-1"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(-784.909 -833.715)">
                                                                    <path d="M4.01,12.938H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H18.125a2,2,0,0,1,2,2v8.937a2,2,0,0,1-2,2H8.78l-.667.923L6.4,16.232Z" transform="translate(785.409 834.215)" class="cls-2"></path>
                                                                    <g transform="translate(788.554 839.127)" class="cls-3">
                                                                        <g transform="translate(-739 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-734 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-729 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <span>02</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="r--grid-item">
                                                <div class="r--author r--text-limit">
                                                    <div class="r--avatar-default text-center text-white avatar--bg-purple">G</div>
                                                    <span class="r--author-review">Glager</span>
                                                </div>
                                                <div class="r--item-body">
                                                    <div class="r--item-body-top">
                                                        <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                            <div class="kalles-rating-result">
                                                                <span class="kalles-rating-result__pipe">
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                    <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                    <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    <ul class="r--reply-helpul r--body-item r--flex-center">
                                                        <li class="r--helpul-item">
                                                            <div class="r--like">
                                                                <div class="r--like-icon like r--flex-center">
                                                                    <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.939" class="r--icon-like">
                                                                        <g transform="translate(-926.048 -414.43)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(929.463 415.021)" class="cls-1"></path>
                                                                            <path d="M945.558,421.769v11.039l-2.9-.279V422.22Z" transform="translate(-16.112 -0.939)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">12</span>
                                                                </div>
                                                                <div class="r--like-icon dislike r--flex-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.659" class="r--icon-dislike">
                                                                        <g transform="translate(956.922 435.325) rotate(180)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(944.575 418.257)" class="cls-1"></path>
                                                                            <path d="M945.558,421.946v10.321l-2.9.261V421.777Z" transform="translate(-1 2.296)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">08</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="r--helpul-item r--reply-review r--flex-center ajax_pp_js" data-id="#popup-reply-review">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.125 17.584" class="r--icon-reply">
                                                                <defs>
                                                                    <clipPath>
                                                                        <rect width="14.094" height="3.924" class="cls-1"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(-784.909 -833.715)">
                                                                    <path d="M4.01,12.938H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H18.125a2,2,0,0,1,2,2v8.937a2,2,0,0,1-2,2H8.78l-.667.923L6.4,16.232Z" transform="translate(785.409 834.215)" class="cls-2"></path>
                                                                    <g transform="translate(788.554 839.127)" class="cls-3">
                                                                        <g transform="translate(-739 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-734 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-729 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <span>02</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="r--grid-item">
                                                <div class="r--author r--text-limit">
                                                    <div class="r--avatar-default text-center text-white  avatar--bg-blue">C</div>
                                                    <span class="r--author-review">Chaos</span>
                                                </div>
                                                <div class="r--item-body">
                                                    <div class="r--item-body-top">
                                                        <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                            <div class="kalles-rating-result">
                                                                <span class="kalles-rating-result__pipe">
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                    <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                    <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    <ul class="r--reply-helpul r--body-item r--flex-center">
                                                        <li class="r--helpul-item">
                                                            <div class="r--like">
                                                                <div class="r--like-icon like r--flex-center">
                                                                    <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.939" class="r--icon-like">
                                                                        <g transform="translate(-926.048 -414.43)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(929.463 415.021)" class="cls-1"></path>
                                                                            <path d="M945.558,421.769v11.039l-2.9-.279V422.22Z" transform="translate(-16.112 -0.939)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">12</span>
                                                                </div>
                                                                <div class="r--like-icon dislike r--flex-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.659" class="r--icon-dislike">
                                                                        <g transform="translate(956.922 435.325) rotate(180)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(944.575 418.257)" class="cls-1"></path>
                                                                            <path d="M945.558,421.946v10.321l-2.9.261V421.777Z" transform="translate(-1 2.296)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">08</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="r--helpul-item r--reply-review r--flex-center ajax_pp_js" data-id="#popup-reply-review">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.125 17.584" class="r--icon-reply">
                                                                <defs>
                                                                    <clipPath>
                                                                        <rect width="14.094" height="3.924" class="cls-1"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(-784.909 -833.715)">
                                                                    <path d="M4.01,12.938H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H18.125a2,2,0,0,1,2,2v8.937a2,2,0,0,1-2,2H8.78l-.667.923L6.4,16.232Z" transform="translate(785.409 834.215)" class="cls-2"></path>
                                                                    <g transform="translate(788.554 839.127)" class="cls-3">
                                                                        <g transform="translate(-739 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-734 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-729 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <span>02</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="r--grid-item">
                                                <div class="r--author r--text-limit">
                                                    <div class="r--avatar-default text-center text-white">S</div>
                                                    <span class="r--author-review">Sevenor</span>
                                                </div>
                                                <div class="r--item-body">
                                                    <div class="r--item-body-top">
                                                        <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                            <div class="kalles-rating-result">
                                                                <span class="kalles-rating-result__pipe">
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                    <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                    <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    <ul class="r--reply-helpul r--body-item r--flex-center">
                                                        <li class="r--helpul-item">
                                                            <div class="r--like">
                                                                <div class="r--like-icon like r--flex-center">
                                                                    <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.939" class="r--icon-like">
                                                                        <g transform="translate(-926.048 -414.43)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(929.463 415.021)" class="cls-1"></path>
                                                                            <path d="M945.558,421.769v11.039l-2.9-.279V422.22Z" transform="translate(-16.112 -0.939)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">12</span>
                                                                </div>
                                                                <div class="r--like-icon dislike r--flex-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.659" class="r--icon-dislike">
                                                                        <g transform="translate(956.922 435.325) rotate(180)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(944.575 418.257)" class="cls-1"></path>
                                                                            <path d="M945.558,421.946v10.321l-2.9.261V421.777Z" transform="translate(-1 2.296)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">08</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="r--helpul-item r--reply-review r--flex-center ajax_pp_js" data-id="#popup-reply-review">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.125 17.584" class="r--icon-reply">
                                                                <defs>
                                                                    <clipPath>
                                                                        <rect width="14.094" height="3.924" class="cls-1"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(-784.909 -833.715)">
                                                                    <path d="M4.01,12.938H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H18.125a2,2,0,0,1,2,2v8.937a2,2,0,0,1-2,2H8.78l-.667.923L6.4,16.232Z" transform="translate(785.409 834.215)" class="cls-2"></path>
                                                                    <g transform="translate(788.554 839.127)" class="cls-3">
                                                                        <g transform="translate(-739 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-734 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-729 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <span>02</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="r--grid-item">
                                                <div class="r--author r--text-limit">
                                                    <div class="r--avatar-default text-center text-white avatar--bg-purple">D</div>
                                                    <span class="r--author-review">Dranking</span>
                                                </div>
                                                <div class="r--item-body">
                                                    <div class="r--item-body-top">
                                                        <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                            <div class="kalles-rating-result">
                                                                <span class="kalles-rating-result__pipe">
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                    <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                    <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    <ul class="r--reply-helpul r--body-item r--flex-center">
                                                        <li class="r--helpul-item">
                                                            <div class="r--like">
                                                                <div class="r--like-icon like r--flex-center">
                                                                    <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.939" class="r--icon-like">
                                                                        <g transform="translate(-926.048 -414.43)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(929.463 415.021)" class="cls-1"></path>
                                                                            <path d="M945.558,421.769v11.039l-2.9-.279V422.22Z" transform="translate(-16.112 -0.939)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">12</span>
                                                                </div>
                                                                <div class="r--like-icon dislike r--flex-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.762 17.659" class="r--icon-dislike">
                                                                        <g transform="translate(956.922 435.325) rotate(180)">
                                                                            <path d="M0,14.842V6.033l.266.709S3.779,4.692,3.9,1.674s2.5-1.661,2.624.45-.095,2.192.517,3.909c1.392-.021,2.211-.013,2.59-.006H9.71q.06,0,.119,0l.056,0v0A1.532,1.532,0,0,1,10.923,8.5a1.533,1.533,0,0,1,.45,2.515,1.533,1.533,0,0,1-.387,2.485,1.859,1.859,0,0,1,.257.966c0,.847-.515,1.584-1.15,1.584L9.237,16c-.7.042-2.286.125-2.717.131H6.448A31.646,31.646,0,0,1,0,14.842Z" transform="translate(944.575 418.257)" class="cls-1"></path>
                                                                            <path d="M945.558,421.946v10.321l-2.9.261V421.777Z" transform="translate(-1 2.296)" class="cls-2"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--like-count like_0">08</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="r--helpul-item r--reply-review r--flex-center ajax_pp_js" data-id="#popup-reply-review">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.125 17.584" class="r--icon-reply">
                                                                <defs>
                                                                    <clipPath>
                                                                        <rect width="14.094" height="3.924" class="cls-1"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(-784.909 -833.715)">
                                                                    <path d="M4.01,12.938H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H18.125a2,2,0,0,1,2,2v8.937a2,2,0,0,1-2,2H8.78l-.667.923L6.4,16.232Z" transform="translate(785.409 834.215)" class="cls-2"></path>
                                                                    <g transform="translate(788.554 839.127)" class="cls-3">
                                                                        <g transform="translate(-739 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-734 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g transform="translate(-729 -839)">
                                                                            <g transform="translate(739 839)" class="cls-4">
                                                                                <circle cx="1.75" cy="1.75" r="1.75" class="cls-5"></circle>
                                                                                <circle cx="1.75" cy="1.75" r="1.25" class="cls-1"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <span>02</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="r--load-more">
                                            <a href="#" class="r--text-load-more">Load more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab contents -->
            </div>
        </div>
    </div>
    <!-- end description and review -->

    <div class="clearfix"></div>

    <!--product recommendations section-->
    <div class="kalles-section tp_se_cdt">
        <div class="related product-extra mt__60 lazyload">
            <div class="container">
                <div class="wrap_title des_title_1">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                        <span class="mr__10 ml__10">You may also like</span></h3>
                    <span class="dn tt_divider"><span></span><i class="dn clprfalse title_1 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title"></span>
                </div>
                <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                    @include('includes.products', array('latestProducts' => $products))
                </div>
            </div>
        </div>
    </div>
    <!--end product recommendations section-->

    <!--product recently viewed section-->
    {{-- <div class="kalles-section tp_se_cdt">
        <div class="related product-extra mt__60 lazyload">
            <div class="container">
                <div class="wrap_title des_title_1">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                        <span class="mr__10 ml__10">Recently viewed products</span></h3>
                    <span class="dn tt_divider"><span></span><i class="dn clprfalse title_1 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title"></span>
                </div>
                <div class="sortby_3 products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <span class="tc nt_labels pa pe_none cw">
                                    <span class="onsale nt_label"><span>-34%</span></span>
                                </span>
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-11.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-12.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">La Bohème Rose Gold</a></h3>
                                <span class="price dib mb__5"><del>$60.00</del><ins>$40.00</ins></span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="assets/images/products/pr-27.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink"></span></span>
                                    <span data-bgset="assets/images/products/pr-35.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-37.png"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-38.png"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Simple Skin T-shirt</a>
                                </h3>
                                <span class="price dib mb__5">$56.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-01.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-02.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">XS, S, M, L, XL</p></div>
                            </div>
                            <div class="product-info mt__15"><h3 class="product-title pr fs__14 mg__0 fwm">
                                <a class="cd chp" href="product-detail-layout-01.html">Analogue Resin Strap</a>
                            </h3>
                                <span class="price dib mb__5">$30.00</span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-lookbook-collection/pr-pin-51.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-lookbook-collection/pr-pin-52.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                        <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                    </a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                        <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                                    </a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                        <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Stripe Long Sleeve Top</a>
                                </h3>
                                <span class="price dib mb__5">$15.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="db" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-01.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-02.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                        <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                    </a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                        <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                                    </a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                        <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Felt Cowboy Hat</a></h3>
                                <span class="price dib mb__5">$22.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="db" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-03.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-04.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                        <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                    </a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                        <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                                    </a>
                                    <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                        <span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span>
                                    </a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">S, M, L</p></div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Blue Jean</a></h3>
                                <span class="price dib mb__5">$25.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--end product recently viewed section-->

</div>
@endsection