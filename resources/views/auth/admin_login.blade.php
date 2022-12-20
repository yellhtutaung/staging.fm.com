@extends('layouts.app')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Login') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('admin.login') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                        <label class="form-check-label" for="remember">--}}
{{--                                            {{ __('Remember Me') }}--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-0">--}}
{{--                                <div class="col-md-8 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Login') }}--}}
{{--                                    </button>--}}

{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot Your Password?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="login-form-container">
    <div class="col-lg-4 col-xl-3 mx-auto mb-1">
        <div class="d-flex justify-content-center align-items-center">
            <img class="logo-img" src="{{asset('freshmoe_logo.png')}}" alt="">
        </div>
        <div class="card mt-3">
            <div class="card-header theme_bg py-3">
                <div class="text text-white">Sign in to Admin Panel</div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.login')}}" method="post">
                    @csrf
                    <div class="form-group my-2 p-3">
                        <input type="email" name="email" id="" class="form-control p-2" placeholder="Email">
                        @error('email')
                        <div class="text-danger mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2 p-3">
                        <input type="password" name="password" id="" class="form-control p-2 " placeholder="Password">
                        @error('password')
                        <div class="text-danger mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    <div class=" d-flex justify-content-end my-3 ">
                        <button class="singin-btn w-100 mx-3 btn  theme_bg"><i class="fa-solid fa-right-to-bracket"></i> Sign In</button>
                    </div>
                </form>
            </div>
            {{--                <div class="card-footer py-3">--}}
            {{--                    I forget my password--}}
            {{--                </div>--}}
        </div>
    </div>
</div>


@endsection
