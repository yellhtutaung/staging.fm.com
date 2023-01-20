@extends('layouts.app')
@section('title', 'OTP Check')
@section('content')

    <div class="container-fluid auth_bg">
        <div class="row">
            <div class="col-lg-6 p-3 ">
                <div class="form-content p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <div class="my-2">
                        <h3 class="text-black text-left ">Enter OTP</h3>
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
                            <label for="phone" class="form-label">OTP Code</label>
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
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                    <span class="mt-3">Already have an account ? <a href="{{route('login')}}" class="text-decoration-none underline"> Sign In.</a></span>
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


