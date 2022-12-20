@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="reg d-flex align-items-center justify-content-center" style="height: 100vh">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100%">
        <div class="row d-flex justify-content-center align-content-stretch shadow-lg">
            <div class=" col-lg-5 p-2 ">

                <div class="px-3 ">
                    <h3 class="title-fm text-lg-center mb-3">Sign In For Price List</h3>
                    <form method="POST" action="{{ route('login') }}" class="register body-fm mt-5">
                        @csrf
                        <div class="input-wrapper">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" autocomplete="off">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="input @error('password') is-invalid @enderror" name="password" placeholder="" id="password" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input shadow" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the terms of service.
                            </label>
                        </div>
                        <div  class="input-wrapper">
                            <button>Sign in</button>
                        </div>
                    </form>
                    <div class="mt-3 body-fm d-lg-none">
                        <a href="{{route('register')}}" class="underline">I am not already member</a>
                    </div>
                </div>


            </div>

            <div class="col-lg-7 p-3 d-none d-lg-flex flex-column justify-content-center " style="background-color: white">
                <div class="d-flex justify-content-center mb-5">
                    <img height="100px" src="{{asset('/freshmoe_logo.png')}}" alt="">
                </div>
                <img width="100%" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" alt="">
                <div class="mt-3 body-fm d-flex justify-content-center">
                    <a href="{{route('register')}}" class="underline">I am not already member</a>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection
