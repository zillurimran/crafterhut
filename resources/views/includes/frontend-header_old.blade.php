<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="assets/images/k_favicon_32x.png">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:300,300i,400,400i,500,500i&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/font-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/drift-basic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/home-default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/single-masonry-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/single-product.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/defined.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/home-electronic-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/shop.css') }}">
    {{-- <link rel="stylesheet" href="../../../public/frontend_assets/assets/plugins/simplebar/css/simplebar.min.css"> --}}
</head>

<body
    class="lazy_icons btnt4_style_2 zoom_tp_2 css_scrollbar template-collection js_search_true cart_pos_side kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_sticky_true hide_scrolld_true des_header_8 top_bar_true prs_bordered_grid_1 search_pos_full lazyload js_search_type">
    <div id="nt_wrapper">

        <!-- header -->
        <header id="ntheader" class="ntheader header_8 h_icon_la">
            <div class="ntheader_wrapper pr z_200">
                <div id="kalles-section-header_top" class="kalles-section">
                    {{-- <div class="h__top bgbl pt__10 pb__10 fs__12 flex fl_center al_center">
                    <div class="container">
                        <div class="row al_center">
                            <div class="col-lg-3 col-12 tc tl_lg col-md-12 dn_false_1024">
                                <div class="nt-social">
                                    <a href="#" class="facebook cb ttip_nt tooltip_bottom_right">
                                        <span class="tt_txt">Follow on Facebook</span><i class="facl facl-facebook"></i>
                                    </a>
                                    <a href="#" class="twitter cb ttip_nt tooltip_bottom_right">
                                        <span class="tt_txt">Follow on Twitter</span><i class="facl facl-twitter"></i>
                                    </a>
                                    <a href="#" class="instagram cb ttip_nt tooltip_bottom_right">
                                        <span class="tt_txt">Follow on Instagram</span><i class="facl facl-instagram"></i>
                                    </a>
                                    <a href="#" class="linkedin cb ttip_nt tooltip_bottom_right">
                                        <span class="tt_txt">Follow on Linkedin</span><i class="facl facl-linkedin"></i>
                                    </a>
                                    <a href="#" class="pinterest cb ttip_nt tooltip_bottom_right">
                                        <span class="tt_txt">Follow on Pinterest</span><i class="facl facl-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 tc col-md-12 dn_false_1024">
                                <div class="header-text">Summer sale discount off
                                    <span class="cr fwm">20%</span> use code “SUMMER20”!
                                    <a href="shop.html"><span class="cr fwm">Shop Now</span> </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12 tc col-md-12 tr_lg dn_false_1024">
                             
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
                <div id="kalles-section-header_8" class="kalles-section sp_header_mid">
                    <div class="header__mid">
                        <div class="container">
                            <div class="row al_center css_h_se">
                                <div class="col-md-4 col-3 dn_lg">
                                    <a href="#" data-id="#nt_menu_canvas"
                                        class="push_side push-menu-btn lh__1 flex al_center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16"
                                            viewBox="0 0 30 16">
                                            <rect width="30" height="1.5"></rect>
                                            <rect y="7" width="20" height="1.5"></rect>
                                            <rect y="14" width="30" height="1.5"></rect>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 tc tl_lg">
                                    <div class="branding ts__05 lh__1">
                                        <a class="dib" href="{{ url('/') }}">
                                            <img class="w__95 logo_normal dn db_lg"
                                                src="{{ asset('frontend_assets/assets/images/svg/kalles.svg') }}"
                                                alt="Kalles Template">
                                            <img class="w__100 logo_sticky dn"
                                                src="{{ asset('frontend_assets/assets/images/svg/kalles.svg') }}"
                                                alt="Kalles Template">
                                            <img class="w__100 logo_mobile dn_lg"
                                                src="{{ asset('frontend_assets/assets/images/svg/kalles.svg') }}"
                                                alt="Kalles Template">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 dn db_lg cl_h_search atc_opended_rs">
                                    <form action="{{ route('frontend.search') }}" method="get"
                                        class="h_search_frm js_frm_search pr" role="search">
                                        <div class="row no-gutters al_center">
                                            <div class="frm_search_cat col-auto">
                                                <select name="product_type">
                                                    <option value="*">All Categories</option>
                                                    @foreach (categories() as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ ucfirst($item->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-auto h_space_search"></div>
                                            <div class="frm_search_input pr oh col">
                                                <input class="h_search_ip js_iput_search" autocomplete="off" type="text"
                                                    name="q" placeholder="I’m shopping for...." />
                                            </div>
                                            <div class="frm_search_cat col-auto">
                                                <button class="h_search_btn js_btn_search" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- <div class="pr">
                                    <div class="mini_cart_content fixcl-scroll widget">
                                        <div class="fixcl-scroll-content product_list_widget">
                                            <div class="ld_bar_search"></div>
                                            <div class="skeleton_wrap skeleton_js dn">
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js_prs_search">
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-01-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Ysamsung Camera"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Ysamsung Camera</a>
                                                        <del>$35.00</del>
                                                        <ins>$25.00</ins>
                                                        <span class="onsale nt_label">-29%</span>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-02-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Beats Solo3 Wireless"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Beats Solo3 Wireless</a>$35.00
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-03-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Lomo Sanremo Edition"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Lomo Sanremo Edition</a>$65.00
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201000%201000%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-04-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Ygoogle Speaker"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Ygoogle Speaker</a>$65.00
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201000%201000%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-05-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Ybeoplay H9i"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Ybeoplay H9i</a>$55.00
                                                    </div>
                                                </div>
                                                <a href="#" class="btn fwsb detail_link">View All(107)
                                                    <i class="facl facl-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>

                                <div class="col-lg-3 col-md-4 col-3 tr">
                                    <div class="nt_action in_flex al_center cart_des_1">
                                        <a class="icon_search push_side cb chp" data-id="#nt_search_canvas" href="#"><i
                                                class="las la-search"></i></a>
                                        <div class="my-account ts__05 pr dn db_md">
                                            @guest
                                                <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas"><i
                                                        class="las la-user"></i></a>
                                            @endguest
                                            @auth
                                                <a class="cb chp db" href="{{ route('dashboard') }}"><i
                                                        class="las la-user"></i></a>
                                            @endauth
                                        </div>
                                        <a class="icon_like cb chp pr dn db_md js_link_wis" href="#">
                                            <i class="lar la-heart pr"><span
                                                    class="op__0 ts_op pa tcount bgb br__50 cw tc">5</span></i>
                                        </a>
                                        <div class="icon_cart pr">
                                            <a class="push_side pr cb chp db" href="#" data-id="#nt_cart_canvas">
                                                <i class="las la-shopping-cart pr">
                                                    <span id="cartCount"
                                                        class="op__0 ts_op pa tcount bgb br__50 cw tc">{{ cartCount() }}</span>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__bot border_false dn db_lg">
                        <div class="container">
                            <div class="row no-gutters al_center">
                                <div class="col-auto ha8_cat">
                                    <h5 class="mg__0 fs__14 flex al_center">
                                        <i class="las la-bars mr__5 fs__18"></i><span class="dib truncate">SHOP BY
                                            CATEGORY</span>
                                    </h5>
                                    <div class="h_cat_nav pa op__0 mh_js_cat">
                                        <ul class="lazy_menu lazy_h_cat lazyload">
                                            @foreach (categories() as $key => $value)
                                                <li class="cat_menu-0">
                                                    <a class="lh__1 flex al_center pr"
                                                        href="{{ route('frontend.productsbycategory', $value->name) }}">{{ ucfirst($value->name) }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col ha8_nav">
                                    <nav class="nt_navigation tl hover_side_up nav_arrow_false">
                                        <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">


                                            <li
                                                class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                                <a class="lh__1 flex al_center pr"
                                                    href="{{ route('frontend.products') }}">Product</a>
                                            </li>
                                            <li
                                                class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                                <a class="lh__1 flex al_center pr" href="blog-grid.html">Blog</a>
                                            </li>


                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-3 fs__12 ha8_txt tr">
                                    <a href="/cdn-cgi/l/email-protection#a0cbc1ccccc5d3e0c4cfcdc1c9ce8ec3cfcd"
                                        class="ttip_nt tooltip_top mr__10">
                                        <span class="tt_txt"><span class="__cf_email__"
                                                data-cfemail="1a717b76767f695a7e75777b737434797577">[email&#160;protected]</span></span>
                                        <i class="las la-envelope fs__14 mr__5"></i><span>contact</span>
                                    </a>
                                    <a class="ttip_nt tooltip_top mr__10">
                                        <span class="tt_txt">Time: 08:00 - 17:00</span>
                                        <i class="las la-clock fs__14 mr__5"></i><span>08:00 - 17:00</span>
                                    </a>
                                    <a href="tel:+01%2023456789" class="ttip_nt tooltip_top">
                                        <span class="tt_txt">Phone: +01 23456789</span>
                                        <i class="las la-phone fs__14 mr__5"></i><span>+01 23456789</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <div id="nt_content">
