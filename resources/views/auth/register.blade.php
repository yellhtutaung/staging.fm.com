@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

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
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
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
        <div class="row d-flex justify-content-center align-content-stretch " >
            <div class=" col-lg-6 p-2 ">

                <form method="POST" action="{{ route('register') }}" class="register body-fm " style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px">
                    @csrf
                    <h1 class="title-fm text-center">Sign Up</h1>
                    <div class="input-wrapper">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" autocomplete="off" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" id="phone" autocomplete="off">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="input @error('password') is-invalid @enderror" name="password" placeholder="********" id="password" autocomplete="off">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="password" class="form-label">Repeat Password</label>
                        <input type="password" class="input @error('password') is-invalid @enderror" name="password_confirmation" placeholder="********" id="password" autocomplete="off">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input shadow" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to the terms of service.
                        </label>
                    </div>
                    <div  class="input-wrapper">
                        <button>Register</button>
                    </div>
                </form>


            </div>

            <div class="col-lg-6 p-3 d-none d-lg-flex flex-column justify-content-center ">
                <div class="d-flex justify-content-center mb-5">
                    <img height="100px" src="{{asset('/freshmoe_logo.png')}}" alt="">
                </div>
                <img width="100%" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" alt="">
{{--                                    <div>--}}
{{--                                        <img width="100%" src="{{asset('frontend-assets/images/sign_up.jpg')}}" alt="">--}}
{{--                                    </div>--}}
                <div class="mt-3 body-fm d-flex justify-content-center">
                    <a href="{{route('login')}}" class="underline">I am already member</a>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
