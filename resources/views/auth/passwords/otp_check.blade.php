@extends('layouts.app')
@section('title', 'OTP Check')
@section('content')

    <div class="container otp_check d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="row">
            <div class="col-lg-5 p-2 ">
                <div class="d-flex flex-column justify-content-center h-100">
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
                        @php $phone = session('phone');
//                            if(!isset($phone)){
//                                    $backRoute = route('password/reset');
//                                    header("Location: $backRoute");
//                                    exit();
//                                }
                            @endphp
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
                    <span class="mt-3">Already have an account ? <a href="{{route('login')}}" class="text-decoration-none "> Sign In.</a></span>
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


