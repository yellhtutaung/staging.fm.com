@extends('layouts.app')
@section('title', 'Login')
@section('content')

    <div class="user-login auth_bg container-fluid">
        <div class="row">
            <div class="col-lg-6 p-3">
                <div class="form-content  p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <div class="">
                        <h5 class="title-fm ">Sign In</h5>
                        <span class="main_title_underline"></span>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="body-fm ">
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
                    <div class="body-fm d-flex justify-content-between flex-wrap bottom-text">
                        <div class='my-2 me-1'>
                            <span class="d-none d-sm-inline"> You don't have an account.</span>
                            <a href="{{route('register')}}" class="text-decoration-none underline ms-1">Sign Up</a>
                        </div>
                        <a href="{{route('password.request')}}" class="underline my-2 ms-1">Forgot your password?</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
