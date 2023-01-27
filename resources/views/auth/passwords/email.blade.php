@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

    <div class="container" style="height: 100vh">
        <div class="row align-items-center h-100">
            <div class="col-lg-5 p-3 ">
                <div class="p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <div class="my-2">
                        <h3 class="text-black text-left ">{{ __('auth.forgot_password.forgot_password') }}</h3>
                        <span class="main_title_underline theme_bg w-25"></span>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('customForgotPassword') }}" class="login body-fm">
                        @csrf
                        <div class="input-wrapper my-4">
                            <label for="phone" class="form-label">{{ __('auth.forgot_password.phone') }}</label>
                            <input type="phone" placeholder="09..." class="input @error('phone') is-invalid @enderror" name="phone"
                                   value="{{old('phone')}}" id="phone" autocomplete="off" autofocus >
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="input-wrapper">
                            <button type="submit" class="text-center">
                                {{ __('auth.forgot_password.forgot') }}
                            </button>
                        </div>
                    </form>
                    <span class="mt-3 body-fm">{{ __('auth.forgot_password.already_acc') }}<a href="{{route('login')}}" class="text-decoration-none"> {{ __('auth.forgot_password.sign_in') }}</a></span>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block p-2">
                <div>
                    <img src="{{asset('frontend-assets/images/auth.jpg')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

