@extends('layouts.app')
@section('title', 'Register OTP Check')
@section('content')

    <div class="container otp_check d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="row">
            <div class="col-lg-5 p-2 ">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="my-2">
                        <h3 class="text-black text-left ">Register Enter OTP</h3>
                        <span class="main_title_underline theme_bg w-25"></span>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                        $In = session('In');
                        if(!isset($In)){
                            $backRoute = route('register');
                            header("Location: $backRoute");
                            exit();
                        }
//                    @endphp
                    <form method="POST" action="{{ route('saveRegister') }}" enctype="multipart/form-data" class="login body-fm">
                        @csrf

                        <input type="hidden" data-user-data="<?php print_r($In->name);?>" class="user-data" name="In" value="" />
                        <input type="hidden" name="name" value="<?php print_r($In->name); ?>" />
                        <input type="hidden" name="email" value="<?php print_r($In->email); ?>" />
                        <input type="hidden" name="phone" value="<?php print_r($In->phone); ?>" />
                        <input type="hidden" name="shop_name" value="<?php print_r($In->shop_name); ?>" />
                        <input type="hidden" name="password" value="<?php print_r($In->password); ?>" />
                        <input type="hidden" name="country_id" value="<?php print_r($In->country_id); ?>" />
                        <input type="hidden" name="city_id" value="<?php print_r($In->city_id); ?>" />
                        <input type="hidden" name="zip_code" value="<?php print_r($In->zip_code); ?>" />
                        <input type="hidden" name="postal_code" value="<?php print_r($In->postal_code); ?>" />
                        <input type="hidden" name="address" value="<?php print_r($In->address); ?>" />
                        <input type="hidden" name="password" value="<?php print_r($In->password); ?>" />
                        <input type="hidden" name="password_confirmation" value="<?php print_r($In->password); ?>" />
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
        {{--let registerRoute = "{{route('register')}}";--}}
        // let userData = $('.user-data').attr('data-user-data');
        // if(userData.length == 0)
        // {
        //     window.location.href = '/register';
        // }
    </script>
@endsection
