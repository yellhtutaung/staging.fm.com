@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="row">
            <div class="col-lg-5 p-2 ">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h3 class="title-fm text-lg-center">{{ __('Verify Your Email Address') }}</h3>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}
                    <form class="login body-fm input-wrapper" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div  class="input-wrapper">
                            <button type="submit">{{ __('Resend email') }}</button>
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
