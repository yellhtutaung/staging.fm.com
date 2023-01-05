@extends('layouts.app')

@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="row">
            <div class="col-lg-5 p-2 ">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h3 class="title-fm text-lg-center">{{ __('Forgot Password') }}</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="login body-fm">
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
                        <div  class="input-wrapper">
                            <button type="submit" class="text-center">
                                {{ __('Forgot') }}
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

