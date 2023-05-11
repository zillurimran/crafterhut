<!DOCTYPE html>
<html class="loading {{ theme(Auth::id())->mode ?? '' }}" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('dashboard_assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/generalSettings') }}/{{  generalsettings()->favicon }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/forms/select/select2.min.css')}}">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/semi-dark-layout.css') }}">
    <!-- BEGIN: Data Table CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
    <!-- END: Data Table CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">

    @yield('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/core/menu/menu-types/vertical-menu.css') }}">
   
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-{{ theme(Auth::id())->nav ?? '' }}" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item">
                        <a class="nav-link menu-toggle is-active" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item d-none d-lg-block">
                    <a id="dark" class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item nav-search d-none"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div><input class="form-control input" type="text" placeholder="Enter Text..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-notification mr-25 d-none"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell ficon"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-pill badge-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list ps">
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-15.jpg') }}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-3.jpg') }}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div>
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x avatar-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check avatar-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle avatar-icon"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block waves-effect waves-float waves-light" href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>

                
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link"  href="{{ route('profile.settings') }}">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{ ucfirst(Auth::user()->name) }}</span>
                            <span class="user-status">{{ ucfirst(Auth::user()->role) }}</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ asset('uploads/users') }}/{{ Auth::user()->profile_photo_path }}" alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ url('user/profile') }}"><i class="mr-50" data-feather="user"></i>Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="mr-50" data-feather="power"></i>Logout</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75">
                        <img src="../../../images/icons/xls.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p>
                        <small class="text-muted">Marketing Manager</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75">
                        <img src="../../../images/icons/jpg.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="mr-75" data-feather="alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('/') }}">
                    <span class="brand-logo">
                        <img src="{{ asset('uploads/generalSettings') }}/{{  generalsettings()->logo }}" alt="">
                    </span>
                        <h2 class="brand-text">Dashboard</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item @yield('frontend')">
                    <a class="d-flex align-items-center" href="{{ route('frontend.index') }}">
                        <i data-feather='eye'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">View Website</span>
                    </a>
                </li>

                {{-- Products And Categories --}}
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Products &amp; Categories</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item @yield('dashboard')">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Chat">Dashboard</span>
                    </a>
                </li>
                {{-- Banners --}}
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='layout'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Banners</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item @yield('bannersIndex')"><a class="d-flex align-items-center" href="{{ route('banners.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="@yield('bannersCreate')"><a class="d-flex align-items-center" href="{{ route('banners.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Create</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Categories --}}
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='command'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Categories</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item @yield('category')"><a class="d-flex align-items-center" href="{{ route('categories.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="@yield('categoryCreate')"><a class="d-flex align-items-center" href="{{ route('categories.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Create</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Subcategories --}}
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='framer'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Subcategories</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item @yield('subcategory')"><a class="d-flex align-items-center" href="{{ route('subCategories.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="@yield('subCategoryCreate')"><a class="d-flex align-items-center" href="{{ route('subCategories.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Create</span></a>
                        </li>
                    </ul>
                </li>
                {{-- products --}}
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='shopping-cart'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Products</span></a>
                    <ul class="menu-content">
                        <li class="@yield('productList')"><a class="d-flex align-items-center" href="{{ route('products.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="@yield('productCreate')"><a class="d-flex align-items-center" href="{{ route('products.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Create</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Subscriptions --}}
                <li class="nav-item @yield('subscriptions')">
                    <a class="d-flex align-items-center" href="{{ route('subscriptions.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Subscriptions</span>
                    </a>
                </li>


                 {{-- Blogs --}}
                 <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Coupons</span>
                    <i data-feather="grid"></i>
                </li>
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='git-pull-request'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Coupon</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('coupons')"><a class="d-flex align-items-center" href="{{ route('coupons.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="@yield('couponCreate')"><a class="d-flex align-items-center" href="{{ route('coupons.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Create</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Blogs --}}
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Order History</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='layers'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">My Orders</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('order.index')"><a class="d-flex align-items-center" href="{{ route('order.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">Order List</span></a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Users</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item @yield('user.index')" style="">
                    <a class="d-flex align-items-center" href="{{ route('user.index') }}">
                        <i data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">User Lists</span>
                    </a>
                </li>


                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Blogs</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='git-pull-request'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Blog Categories</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('blogCategoriesList')"><a class="d-flex align-items-center" href="{{ route('blogCategories.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="@yield('blogCategoriesCreate')"><a class="d-flex align-items-center" href="{{ route('blogCategories.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Create</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='layers'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Blogs</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('blogsList')"><a class="d-flex align-items-center" href="{{ route('blogs.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="@yield('blogsCreate')"><a class="d-flex align-items-center" href="{{ route('blogs.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Create</span></a>
                        </li>
                    </ul>
                </li>

                {{--Settings --}}
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Settings</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <!-- General Settings-->
                {{-- <li class="nav-item @yield('paypal.index')">
                    <a class="d-flex align-items-center" href="{{ route('paypal.index') }}">
                        <i data-feather='info'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">PayPal Settings</span>
                    </a>
                </li> --}}
                <li class="nav-item @yield('generalSettings')">
                    <a class="d-flex align-items-center" href="{{ route('generalSettings.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">General Settings</span>
                    </a>
                </li>
                <!-- Socials Icons Settings-->
                <li class="nav-item @yield('socialiconsettings')">
                    <a class="d-flex align-items-center" href="{{ route('socialIconSettings.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Social Icons Settings</span>
                    </a>
                </li>
                <!-- Socials Icons Settings-->
                <li class="nav-item @yield('colorSettings')">
                    <a class="d-flex align-items-center" href="{{ route('colorSettings.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Color Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay">
        </div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        {{-- content start from here --}}
                        @yield('content')
                        {{-- content end here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021
            <a class="ml-25" href="https://dgtalspace.com" target="_blank">Dgtalspace</a>
            <span class="d-none d-sm-inline-block">, All rights Reserved</span>
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard_assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Data Table Vendor JS-->
    <script src="{{ asset('dashboard_assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <!-- END: Data Table Vendor JS-->
<!-- END: Page JS-->

    <!-- BEGIN: Theme JS-->
    @yield('js')

    <script src="{{ asset('dashboard_assets/js/core/app-menu.js') }}"></script>
 
    <script>
        $(document).ready(function(){
           $("#dark").click(function(){
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });

               $.ajax({

                   url: "{{ route('theme') }}", 
                   type: "GET", 
                   success: function(data){
                       console.log(data);
                   }


               })
           });
        });
    </script>
    <script>
        $(document).ready(function(){
           $("#exp").click(function(){
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });

               $.ajax({

                   url: "{{ route('theme-nav') }}", 
                   type: "GET", 
                   success: function(data){
                       console.log(data);
                   }


               })
           });
        });
    </script> 
    <script src="{{ asset('dashboard_assets/js/core/app.js') }}"></script>
     <!-- BEGIN: Page JS-->
    <script src="{{ asset('dashboard_assets/js/scripts/forms/form-select2.js')}}"></script>
    <!-- END: Page JS-->
    @yield('final_js')


    {{-- Data Table --}}
    <script>
        $(document).ready(function() {
            $('#data_table').DataTable({
                pageLength : 10,
                buttons: [
                {
                    extend: 'copy',
                    text: 'Copy to clipboard'
                },
                'excel',
                'pdf'
            ]
            });
        })
    </script>

    <!-- END: Theme JS-->

    <script>
        $(window).on('load',
            function() {
                if (feather) {
                    feather.replace({
                            width: 14,
                            height: 14
                        }
                    );
                }
            }
        )
    </script>

<script src="{{ asset('dashboard_assets/js/scripts/pages/dashboard-analytics.js')}}"></script>


</body>
<!-- END: Body-->

</html>
