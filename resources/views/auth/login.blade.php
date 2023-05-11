{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Log in
@endsection

@section('content')
<section class="main-container col1-layout">
    <div class="main container">
      <div class="account-login">
        <div class="page-title">
          <h2>Login or create an account</h2>
        </div>
        <fieldset class="col2-set">
          <div class="col-1 new-users"><strong>new customers</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more...</p>
              <div class="buttons-set">
                <button class="button create-account" onclick="window.location.href='{{ url('/register') }}'" type="button"><span>create an account</span></button>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>Registered customers</strong>
            <div class="content">
              <p>If you have an account with us, please login.</p>
              <ul class="form-list">
                <li>
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                   
                  <label for="email">Adresse e-mail <span class="required">*</span></label>
                  <br>
                  <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="email">
                  @error('email')
                      <small class="required">{{ $message }}</small>
                  @enderror
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <div class="password-wrapper">
                    <input type="password" title="Password" id="pass" class="input-text required-entry validate-password password-wrapper__input" name="password">
                    <button type="button" class="password-wrapper__toggler">
                      <i class="fa fa-eye  password-wrapper__toggler__icon" aria-hidden="true"></i>
                    </button>
                  </div>
                  @error('password')
                  <small class="required">{{ $message }}</small>
                  @enderror
                </li>
              </ul>
              {{-- <p class="required">* Required Fields</p> --}}
              <div class="buttons-set">
                <button type="submit" class="button login"><span>Log in</span></button>
            </form>
                <a class="forgot-word" href="{{ url('/forget-password') }}">Forgot your password?</a> </div>
            </div>
          </div>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section><!-- Brand Logo Section -->
@endsection
