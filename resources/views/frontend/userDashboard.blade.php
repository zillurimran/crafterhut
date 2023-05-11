@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | My dashboard
@endsection


@section('accountinfo')
    current
@endsection

@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="row">
            <section class="col-sm-9 col-xs-12">
                <div class="col-main">
                    <div class="dashboard">    
                        <div class="table-resposive" style="margin-bottom: 40px;">
                            <table class="data-table">
                                <tr>
                                    <th>Name :</th>
                                    <td> {{ ucfirst(Auth::user()->name) }}</td>
                                </tr>
                                <tr>
                                    <th>E-mail :</th>
                                    <td> {{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th>Total orders :</th>
                                    <td> {{ $orders->count() }}</td>
                                </tr>
                            </table>
                        </div>

                        {{-- <div class="welcome-msg"> <strong>Hello, {{ Auth::user()->name }}</strong>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                        </div> --}}
                        <div class="col-main">
                            <div class="dashboard">    
                                <div class="table-resposive" style="margin-bottom: 40px;">
                                    <form class="form-group" action="{{ route('frontend.password') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Old password</label>
                                            <input class="form-control" type="password" name="old_password">
                                            @error('old_password')
                                            
                                                <small style="color:red;">{{ $message }}</small>

                                            @enderror
                                            @if(session('old'))
                                              <small style="color:red;">{{ session('old') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input class="form-control" type="password" name="password">
                                            @error('password')
                                            
                                            <small style="color:red;">{{ $message }}</small>

                                             @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirm password</label>
                                            <input class="form-control" type="password" name="password_confirmation">
                                            @error('password_confirmation')
                                            
                                            <small style="color:red;">{{ $message }}</small>

                                             @enderror
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">Change the password</button>
                                        </div>
                                      </form>
                                </div>
        
                                {{-- <div class="welcome-msg"> <strong>Hello, {{ Auth::user()->name }}</strong>
                                    <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                                </div> --}}
                                <div class="recent-orders" style="display: none">
                                    <div class="title-buttons"><strong>Last orders</strong> <a href="#">See all</a></div>
                                    <div class="table-responsive">
                                      <form class="form-group" action="">
                                        <div class="form-group">
                                            <label for="">Old password</label>
                                            <input type="password" name="old_password" value="Enter current password">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="password" value="Enter new password">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirm password</label>
                                            <input type="password" name="password_confirmed" value="Enter new password">
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </section>
            @include('includes.myaccount')
            </div>
        </div>
    </div>
@endsection