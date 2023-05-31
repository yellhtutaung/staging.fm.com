@extends('layouts.app')
@section('title', 'Login')
@section('content')

    <div class="user-login auth_bg container-fluid">
        <div class="row justify-content-end">
            <div class="col-lg-6 p-3">
                <div class="form-content  p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <div class="">
                        <h5 class="title-fm ">{{ __('auth.sign_up.sign_in') }}</h5>
                        <span class="main_title_underline"></span>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="body-fm ">
                        @csrf
                        <div class="input-wrapper">
                            <label for="email" class="form-label">{{ __('auth.sign_in.email') }}</label>
                            <input type="text" class="input @error('credentials') is-invalid @enderror" name="credentials" placeholder="{{ __('auth.sign_in.enter_email') }}" value="{{ old('credentials') }}" id="email" autocomplete="off" autofocus>
                            @error('credentials')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="password" class="form-label">{{ __('auth.sign_in.password') }}</label>
                            <input type="password" class="input @error('password') is-invalid @enderror" name="password" placeholder="{{ __('auth.sign_in.enter_password') }}" id="password" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="input-wrapper">
                            <button class="theme_bg_red">{{ __('auth.sign_in.sign_in') }}</button>
                        </div>
                    </form>
                    <div class="body-fm d-flex justify-content-between flex-wrap bottom-text">
                        <div class='my-2 me-1'>
                            <span class="d-none d-sm-inline"> {{ __('auth.sign_in.dont_have_acc') }}</span>
                            <a href="{{route('register')}}" class="text-decoration-none underline ms-1">{{ __('auth.sign_in.sign_up') }}</a>
                        </div>
                        <a href="{{route('password.request')}}" class="underline my-2 ms-1">{{ __('auth.sign_in.forgot_password') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
