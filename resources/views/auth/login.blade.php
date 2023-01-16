@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="user-login">
    <div class="row">
        <div class="col-lg-5 d-none d-lg-block p-2">
{{--            <div>--}}
{{--                <img src="{{asset('frontend-assets/images/auth.jpg')}}" width="100%" alt="">--}}
{{--            </div>--}}
            <div class="left">
                <div class="logo">
                    <img src="{{asset('freshmoe_logo_white.png')}}" alt="">
                </div>

                <p class="text title-fm">
                    Eat fresh food for your health! For fresh fruits and vegetables, remember <b>Fresh Moe</b>
                </p>

                <div class="shopping_app_img">
                    <img src="{{asset('img/shopping_app.svg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-2">
            <div class="right d-flex flex-column justify-content-center h-100">
                <div class="logo d-lg-none d-flex justify-content-center mb-2">
                    <img src="{{asset('freshmoe_logo.png')}}" alt="">
                </div>
                <div class="">
                    <h3 class="title-fm ">Sign In</h3>
                    <span class="main_title_underline"></span>
                </div>
                <form method="POST" action="{{ route('login') }}" class="login body-fm ">
                    @csrf
                    <div class="input-wrapper">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="input @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email') }}" id="email" autocomplete="off" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="input @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" id="password" autocomplete="off">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div  class="input-wrapper">
                        <button>Sign in</button>
                    </div>
                </form>
                <div class="body-fm d-flex justify-content-between bottom-text">
                    <div class='m-2'>
                       <span class="d-none d-sm-inline"> You don't have an account.</span>
                        <a href="{{route('register')}}" class="text-decoration-none underline ms-1">Sign Up</a>
                    </div>
                    <a href="{{route('password.request')}}" class="underline m-2">Forgot your password?</a>

                </div>
            </div>
        </div>
    </div>
</div>







@endsection
