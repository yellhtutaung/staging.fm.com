@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

    <div class="container-fluid auth_bg">
        <div class="row">
            <div class="col-lg-6 p-3 ">
                <div class="form-content p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <div class="my-2">
                        <h3 class="text-black text-left ">Forgot Password</h3>
                        <span class="main_title_underline theme_bg w-25"></span>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('customForgotPassword') }}" class="login body-fm">
                        @csrf
                        <div class="input-wrapper my-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="phone" placeholder="09..." class="input @error('phone') is-invalid @enderror" name="phone"
                                   value="{{old('phone')}}" id="phone" autocomplete="off" autofocus >
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="input-wrapper">
                            <button type="submit" class="text-center">
                                {{ __('Forgot') }}
                            </button>
                        </div>
                    </form>
                    <span class="mt-3 body-fm">Already have an account ? <a href="{{route('login')}}" class="text-decoration-none"> Sign In.</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection

