@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="row">
            <div class="col-lg-5 p-2 ">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h3 class="title-fm text-lg-center">{{ __('Reset Password') }}</h3>
                    <form method="POST" action="{{ route('password.update') }}" class="login body-fm ">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
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
                        <div class="input-wrapper">
                            <label for="password" class="form-label">{{ __('Confirm Password') }}</label>
                            <input type="password" class="input @error('password-confirm') is-invalid @enderror" name="password_confirmation" placeholder="" id="password-confirm" autocomplete="off">
                            @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="input-wrapper">
                            <button type="submit" class="text-center">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block p-2">
                <div>
                    <img src="{{asset('frontend-assets/images/auth.jpg')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
