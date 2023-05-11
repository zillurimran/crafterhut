{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Sign up 
@endsection

@section('content')
<section class="main-container col1-layout">
    <div class="main container">
      <div class="account-login">
        <div class="page-title">
          <h2>Login or create an account</h2>
        </div>
        <fieldset class="col2-set">
          <div class="col-1 new-users"><strong>Already registered?</strong>
            <p>If you have an account with us, please login.</p>
            <div class="content">
              <div class="buttons-set">
                <button class="button create-account" onclick="window.location.href='{{ url('/login') }}'" type="button"><span>Connexion</span></button>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>Sign up</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <ul class="form-list">
                <li>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <label for="name">NAME <span class="required">*</span></label>
                        <br>
                        <input type="text" title="name" class="input-text required-entry" id="name" value="{{ old('name') }}" name="name">
                        @error('name')
                            <small class="required" style="display: block">{{ $message }}</small>
                        @enderror
                   
                        <br>
                        <br>
                        <label for="email">Adresse e-mail <span class="required">*</span></label>
                        <br>
                        <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="email">
                        @error('email')
                            <small class="required" style="display: block">{{ $message }}</small>
                        @enderror

                        <br>
                        <br>
                        <label for="password">Password <span class="required">*</span></label>
                        <br>
                        <div class="password-wrapper">
                            <input type="password" title="password" id="password" class="input-text required-entry validate-password password-wrapper__input" name="password">
                            <button type="button" class="password-wrapper__toggler">
                              <i class="fa fa-eye  password-wrapper__toggler__icon" aria-hidden="true"></i>
                            </button>
                          </div>
                        @error('password')
                            <small class="required" style="display: block">{{ $message }}</small>
                        @enderror

                        <br>
                        <br>
                        <label for="password_confirmation">Confirm password <span class="required">*</span></label>
                        <br>
                        <div class="password-wrapper">
                            <input type="password" title="password_confirmation" id="password_confirmation" class="input-text required-entry validate-password password-wrapper__input" name="password_confirmation">
                            <button type="button" class="password-wrapper__toggler">
                              <i class="fa fa-eye  password-wrapper__toggler__icon" aria-hidden="true"></i>
                            </button>
                          </div>
                        @error('password_confirmation')
                            <small class="required" style="display: block">{{ $message }}</small>
                        @enderror
                        <br>
                        <br>
                        <div class="buttons-set">
                            <button type="submit" class="button login"><span>Sign up</span></button>
                        </div>
                    </form>
                </li>
             </ul>
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

