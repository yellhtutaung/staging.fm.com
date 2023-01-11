@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="row">
        <div class="col-lg-5 p-2 ">
            <div class="d-flex flex-column justify-content-center h-100">
                <h3 class="title-fm text-lg-center">Sign In For Price List</h3>
                <form method="POST" action="{{ route('login') }}" class="login body-fm ">
                    @csrf
                    <div class="input-wrapper">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" autocomplete="off" autofocus>
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
                    <div  class="input-wrapper">
                        <button>Sign in</button>
                    </div>
                </form>
                <div class="body-fm d-flex justify-content-between">
                    <span class=''>
                        You don't have an account.
                        <a href="{{route('register')}}" class="text-decoration-none underline ms-1">Sign Up</a>
                    </span>
                    <a href="{{route('password.request')}}" class="underline">Forgot your password?</a>

                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block p-2">
            <div>
                <img src="{{asset('frontend-assets/images/auth.jpg')}}" width="100%" alt="">
            </div>
{{--            <div class="mt-3 body-fm d-flex justify-content-center ">--}}
{{--                <a href="{{route('register')}}" class="underline input-wrapper">I am not already member</a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>







@endsection
