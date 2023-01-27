@extends('layouts.app')
@section('title', 'OTP Check')
@section('content')

    <div class="container" style="height: 100vh">
        <div class="row align-items-center h-100">
            <div class="col-lg-5 p-3 ">
                <div class="p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <div class="my-2">
                        <h3 class="text-black text-left ">{{ __('auth.enter_otp.enter_otp') }}</h3>
                        <span class="main_title_underline theme_bg w-25"></span>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('checkForgetOtp') }}" class="login body-fm">
                        @csrf
                        @php $phone = session('phone'); @endphp

                        <input type="hidden" data-user-phone="{{$phone}}" class="user-phone" name="phone" value="{{$phone}}" />
                        <input type="hidden" name="password" value="123456" />
                        <div class="input-wrapper my-4">
                            <label for="phone" class="form-label">{{ __('auth.enter_otp.otp_code') }}</label>
                            <input type="number" placeholder="" class="input @error('otp') is-invalid @enderror @error('phone') is-invalid @enderror " name="otp" value="{{old('otp')}}" id="otp" autocomplete="off" autofocus >
                            @error('otp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @endif
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="input-wrapper">
                            <button type="submit" class="text-center">
                                {{ __('auth.enter_otp.submit') }}
                            </button>
                        </div>
                    </form>
                    <span class="mt-3">{{ __('auth.enter_otp.already_acc') }} <a href="{{route('login')}}" class="text-decoration-none underline"> {{ __('auth.enter_otp.sign_in') }}</a></span>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block p-2">
                <div>
                    <img src="{{asset('frontend-assets/images/auth.jpg')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        let resetPasswordRoute = "{{route('password.request')}}";
        let userPhone = $('.user-phone').attr('data-user-phone');
        if(userPhone.length == 0)
        {
            window.location.href = resetPasswordRoute;
        }
    </script>
@endsection


