@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Dashboard
@endsection

{{-- Menu Active --}}
@section('dashboard')
    active
@endsection
@section('css')
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
.example::-webkit-scrollbar {
    display: none;
}

.card-header{
    flex-wrap: nowrap !important;
}
/* Hide scrollbar for IE, Edge and Firefox */
.example {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
    </style>
@endsection
@if(permissionCheck(Auth::id(),'Dashboard'))
{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Administrator's Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>

<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
            <div class="row match-height">
                <!-- Greetings Card starts -->

                <div class="col-12">
                    <div class="card card-statistics custom-cards-height">
                        <div class="card-header border-bottom mb-2">
                            <h4 class="card-title">{{ __('Statistics') }}</h4>
                            {{-- <div class="d-flex align-items-center">
                                <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                            </div> --}}
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-light-primary mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{ $order_pending  }}</h4>
                                            <p class="card-text font-small-3 mb-0">Orders in progress</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-light-info mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="user" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{ cancelled() }}</h4>
                                            <p class="card-text font-small-3 mb-0">Cancelled orders</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="media">
                                        <div class="avatar bg-light-danger mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="box" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{ completed() }}</h4>
                                            <p class="card-text font-small-3 mb-0">Completed orders</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="media">
                                        <div class="avatar bg-light-success mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{ $total_earning }}  ৳</h4>
                                            <p class="card-text font-small-3 mb-0">Total earnings</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row match-height">
                <!-- Greetings Card starts -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card card-congratulations">
                        <div class="card-body text-center">
                            
                            <img src="{{ asset('dashboard_assets/images/elements/decore-left.png') }}" class="congratulations-img-left" alt="card-img-left" />
                            <img src="{{ asset('dashboard_assets/images/elements/decore-right.png') }}" class="congratulations-img-right" alt="card-img-right" />
                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i data-feather="award" class="font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-1 text-white">Congratulation {{ Auth::user()->name }},</h1>
                                <p class="card-text m-auto w-75">
                                    Welcome to <strong>Furniture BD</strong> today. Check your analysis in your profile.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Greetings Card ends -->

                <!-- Subscribers Chart Card starts -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header flex-column align-items-start pb-0">
                            <div class="avatar bg-light-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="users" class="font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="font-weight-bolder mt-1">{{ \App\Models\Subscription::count() }}</h2>
                            <p class="card-text">Subscribers gained</p>
                        </div>
                        <div id="gained-chart"></div>
                    </div>
                </div>
                <!-- Subscribers Chart Card ends -->

                <!-- Orders Chart Card starts -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header flex-column align-items-start pb-0">
                            <div class="avatar bg-light-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="users" class="font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="font-weight-bolder mt-1">{{ \App\Models\User::count() }}</h2>
                            <p class="card-text">Registered users</p>
                        </div>
                        <div id="order-chart"></div>
                    </div>
                </div>
                <!-- Orders Chart Card ends -->
            </div>
            
            {{-- <div class="row match-height">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h2 class="font-weight-bolder mb-0">{{ pending() }}</h2>
                                <p class="card-text">Commandes en cours</p>
                            </div>
                            <div class="avatar bg-light-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="truck" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h2 class="font-weight-bolder mb-0">{{ cancelled() }}</h2>
                                <p class="card-text">Commandes annulées</p>
                            </div>
                            <div class="avatar bg-light-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="truck" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h2 class="font-weight-bolder mb-0">{{ completed() }}</h2>
                                <p class="card-text">Commandes terminées</p>
                            </div>
                            <div class="avatar bg-light-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="truck" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h2 class="font-weight-bolder mb-0"> {{ earnings() }}€</h2>
                                <p class="card-text">Gains totaux</p>
                            </div>
                            <div class="avatar bg-light-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="credit-card" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

           
            </div>

            <div class="row match-height">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-browser-states">
                        <div class="card-header">
                            <div>
                                <h4 class="card-title">Browser states</h4>
                                <p class="card-text font-small-2">Al Time</p>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('uploads/chrome.png') }}" class="rounded mr-1" height="30" alt="Google Chrome" />
                                    <h6 class="align-self-center mb-0">Google Chrome</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="font-weight-bold text-body-heading mr-1">{{$browser['chrome']}}%</div>
                                    <div id="browser-state-chart-primary"></div>
                                </div>
                            </div>
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('uploads/mozilla.png') }}" class="rounded mr-1" height="30" alt="Mozila Firefox" />
                                    <h6 class="align-self-center mb-0">Mozila Firefox</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="font-weight-bold text-body-heading mr-1">{{$browser['firefox']}}%</div>
                                    <div id="browser-state-chart-warning"></div>
                                </div>
                            </div>
                        <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('uploads/safari.png') }}" class="rounded mr-1" height="30" alt="Apple Safari" />
                                    <h6 class="align-self-center mb-0">Apple Safari</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="font-weight-bold text-body-heading mr-1">{{$browser['safari']}}%</div>
                                    <div id="browser-state-chart-secondary"></div>
                                </div>
                            </div>
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('uploads/internet-explorer.png') }}" class="rounded mr-1" height="30" alt="Internet Explorer" />
                                    <h6 class="align-self-center mb-0">Internet Explorer</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="font-weight-bold text-body-heading mr-1">{{$browser['internet']}}%</div>
                                    <div id="browser-state-chart-info"></div>
                                </div>
                            </div>

                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('uploads/opera.png') }}" class="rounded mr-1" height="30" alt="Internet Explorer" />
                                    <h6 class="align-self-center mb-0">Opera</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="font-weight-bold text-body-heading mr-1">{{$browser['opera']}}%</div>
                                    <div id="browser-state-chart-danger"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 col-12 example" style="">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4 class="card-title">Most visited pages</h4>
                                <p class="card-text font-small-2">Al Time</p>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>URL</th>
                                        <th>VISIT ACCOUNT</th>
                                    </thead>
                                    <tbody>
                                        @foreach($top_pages->take(6) as $item)
                                            <tr>
                                                <td>
                                                    <a href="{{$item->url}}" target="_blank">
                                                    {{$item->url}}
                                                    </a>
                                                </td>
                                                <td>{{$item->count}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row match-height d-none">
                <!-- Avg Sessions Chart Card starts -->
                <div class="col-lg-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row pb-50">
                                <div class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0">
                                    <div class="mb-1 mb-sm-0">
                                        <h2 class="font-weight-bolder mb-25">2.7K</h2>
                                        <p class="card-text font-weight-bold mb-2">Medium Sessions</p>
                                        <div class="font-medium-2">
                                            <span class="text-success mr-25">+5.2%</span>
                                            <span>vs. last 7 days</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">See details</button>
                                </div>
                                <div class="col-sm-6 col-12 d-flex justify-content-between flex-column text-right order-sm-2 order-1">
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                            <a class="dropdown-item" href="javascript:void(0);">The last 28 days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                                        </div>
                                    </div>
                                    <div id="avg-sessions-chart"></div>
                                </div>
                            </div>
                            <hr />
                            <div class="row avg-sessions pt-50">
                                <div class="col-6 mb-2">
                                    <p class="mb-50">Objective: $100000</p>
                                    <div class="progress progress-bar-primary" style="height: 6px">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <p class="mb-50">Users: 100K</p>
                                    <div class="progress progress-bar-warning" style="height: 6px">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p class="mb-50">Retention: 90%</p>
                                    <div class="progress progress-bar-danger" style="height: 6px">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width: 70%"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p class="mb-50">Duration: 1yr</p>
                                    <div class="progress progress-bar-success" style="height: 6px">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Avg Sessions Chart Card ends -->

                <!-- Support Tracker Chart Card starts -->
                <div class="col-lg-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <h4 class="card-title">Support Tracker</h4>
                            <div class="dropdown chart-dropdown">
                                <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Last 7 days
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                    <a class="dropdown-item" href="javascript:void(0);">The last 28 days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                    <h1 class="font-large-2 font-weight-bolder mt-2 mb-0">163</h1>
                                    <p class="card-text">Tickets</p>
                                </div>
                                <div class="col-sm-10 col-12 d-flex justify-content-center">
                                    <div id="support-trackers-chart"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1">
                                <div class="text-center">
                                    <p class="card-text mb-50">New tickets</p>
                                    <span class="font-large-1 font-weight-bold">29</span>
                                </div>
                                <div class="text-center">
                                    <p class="card-text mb-50">Open tickets</p>
                                    <span class="font-large-1 font-weight-bold">63</span>
                                </div>
                                <div class="text-center">
                                    <p class="card-text mb-50">Response time</p>
                                    <span class="font-large-1 font-weight-bold">1d</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Support Tracker Chart Card ends -->
            </div>

            <div class="row match-height d-none">
                <!-- Timeline Card -->
                <div class="col-lg-4 col-12">
                    <div class="card card-user-timeline">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <i data-feather="list" class="user-timeline-title-icon"></i>
                                <h4 class="card-title">User timeline</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="timeline ml-50">
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <h6>12 Bills have been paid</h6>
                                        <p>Invoices are paid to the company</p>
                                        <div class="media align-items-center">
                                            <img class="mr-1" src="{{ asset('dashboard_assets/images/icons/json.png') }}" alt="data.json" height="23" />
                                            <h6 class="media-body mb-0">data.json</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <h6>Customer meeting</h6>
                                        <p>Project meeting with Carl</p>
                                        <div class="media align-items-center">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-9.jpg') }}" alt="Avatar" width="38" height="38" />
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0">Carl Roy (Client)</h6>
                                                <p class="mb-0">CEO of Infibeam</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <h6>Create a new project</h6>
                                        <p>Add files to a new design folder</p>
                                        <div class="avatar-group">
                                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Billy Hopkins" class="avatar pull-up">
                                                <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-9.jpg') }}" alt="Avatar" width="33" height="33" />
                                            </div>
                                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Amy Carson" class="avatar pull-up">
                                                <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" width="33" height="33" />
                                            </div>
                                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Brandon Miles" class="avatar pull-up">
                                                <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" width="33" height="33" />
                                            </div>
                                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Daisy Weber" class="avatar pull-up">
                                                <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-7.jpg') }}" alt="Avatar" width="33" height="33" />
                                            </div>
                                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Jenny Looper" class="avatar pull-up">
                                                <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-20.jpg') }}" alt="Avatar" width="33" height="33" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <h6>Update of the project for the client</h6>
                                        <p class="mb-0">Update the files according to the new design</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Timeline Card -->

                <!-- Sales Stats Chart Card starts -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-start pb-1">
                            <div>
                                <h4 class="card-title mb-25">Sales</h4>
                                <p class="card-text">Last 6 months</p>
                            </div>
                            <div class="dropdown chart-dropdown">
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-inline-block mr-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-small-3 text-primary mr-50"></i>
                                    <h6 class="mb-0">Sales</h6>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-small-3 text-info mr-50"></i>
                                    <h6 class="mb-0">Sales</h6>
                                </div>
                            </div>
                            <div id="sales-visit-chart" class="mt-50"></div>
                        </div>
                    </div>
                </div>
                <!-- Sales Stats Chart Card ends -->

                <!-- App Design Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-app-design">
                        <div class="card-body">
                            <div class="badge badge-light-primary">03 Sep, 20</div>
                            <h4 class="card-title mt-1 mb-75 pt-25">Design of the application</h4>
                            <p class="card-text font-small-2 mb-2">
                                You can find only articles and quotes related to iOS, such as ipad app design, iphone app design.
                            </p>
                            <div class="design-group mb-2 pt-50">
                                <h6 class="section-label">Team</h6>
                                <div class="badge badge-light-warning mr-1">Figma</div>
                                <div class="badge badge-light-primary">Wireframe</div>
                            </div>
                            <div class="design-group pt-25">
                                <h6 class="section-label">Membres</h6>
                                <div class="avatar">
                                    <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-9.jpg') }}" width="34" height="34" alt="Avatar" />
                                </div>
                                <div class="avatar bg-light-danger">
                                    <div class="avatar-content">PI</div>
                                </div>
                                <div class="avatar">
                                    <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-14.jpg') }}" width="34" height="34" alt="Avatar" />
                                </div>
                                <div class="avatar">
                                    <img src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-7.jpg') }}" width="34" height="34" alt="Avatar" />
                                </div>
                                <div class="avatar bg-light-secondary">
                                    <div class="avatar-content">AL</div>
                                </div>
                            </div>
                            <div class="design-planning-wrapper mb-2 py-75">
                                <div class="design-planning">
                                    <p class="card-text mb-25">Expiry date</p>
                                    <h6 class="mb-0">12 Apr, 21</h6>
                                </div>
                                <div class="design-planning">
                                    <p class="card-text mb-25">Budget</p>
                                    <h6 class="mb-0">$49251.91</h6>
                                </div>
                                <div class="design-planning">
                                    <p class="card-text mb-25">Cost</p>
                                    <h6 class="mb-0">$840.99</h6>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block">Join the team</button>
                        </div>
                    </div>
                </div>
                <!--/ App Design Card -->
            </div>
        </section>
        <!-- Dashboard Analytics end -->
    </div>
</div>
</div>
@endsection
@else 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">You are not permitted for this page</h3>
                <p>Please check sidebar for menus</p>
            </div>
        </div>
    </div>
</div>
@endsection
@endif
@section('final_js')
@php

$subs = \App\Models\Subscription::select(array(DB::raw('DATE(created_at) AS date')), DB::raw('COUNT(code) AS count'))->groupBy('date')->get();

$total = [];
$date = [];
foreach($subs as $w)
{
    $total[] = \App\Models\Subscription::whereDate('created_at', \Carbon\Carbon::parse($w->date))->get()->count();
    $date[] = \Carbon\Carbon::parse($w->date)->format('d M');

}




$users = \App\Models\User::select(array(DB::raw('DATE(created_at) AS date')), DB::raw('COUNT(code) AS count'))->groupBy('date')->get();

$totalusers = [];
$dateusers = [];
foreach($users as $u)
{
    $totalusers[] = \App\Models\User::whereDate('created_at', \Carbon\Carbon::parse($u->date))->get()->count();
    $dateusers[] = \Carbon\Carbon::parse($u->date)->format('d M');

}


@endphp
<script>
    
  var $gainedChart = document.querySelector('#gained-chart');
  var $orderChart = document.querySelector('#order-chart');

      gainedChartOptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      }
    },
    colors: [window.colors.solid.primary],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [
      {
        name: 'Subscribers',
        data: @json($total)
      }
    ],
    xaxis: {
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: [
      {
        y: 0,
        offsetX: 0,
        offsetY: 0,
        padding: { left: 0, right: 0 }
      }
    ],
    tooltip: {
      x: { show: false }
    }
  };
  gainedChart = new ApexCharts($gainedChart, gainedChartOptions);
  gainedChart.render();

  orderChartOptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      }
    },
    colors: [window.colors.solid.warning],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [
      {
        name: 'Users',
        data: @json($totalusers)
      }
    ],
    xaxis: {
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: [
      {
        y: 0,
        offsetX: 0,
        offsetY: 0,
        padding: { left: 0, right: 0 }
      }
    ],
    tooltip: {
      x: { show: false }
    }
  };
  orderChart = new ApexCharts($orderChart, orderChartOptions);
  orderChart.render();



</script>
@endsection
