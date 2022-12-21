@extends('layouts.app')

@section('content')

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh">
    <div class=" d-flex justify-content-center align-items-center" style="height: 100%">
        <div class="row  ">
            <div class=" col-lg-5 ">

                <div class="px-3">
                    <form method="POST" action="{{ route('register') }}" class="register body-fm ">
                        @csrf
                        <h3 class="title-fm text-lg-center mb-2">Sign Up For Price List</h3>
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
                            <input type="password" class="input @error('password') is-invalid @enderror" name="password" placeholder="" id="password" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="input @error('password') is-invalid @enderror" name="password_confirmation" placeholder="" id="confirm-password" autocomplete="off">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the terms of service.
                            </label>
                        </div>
                        <div  class="input-wrapper">
                            <button>Register</button>
                        </div>
                    </form>
                    <div class="mt-3 body-fm d-lg-none">
                        <a href="{{route('login')}}" class="underline">I am already member</a>
                    </div>
                </div>


            </div>

            <div class="col-lg-7 d-none d-lg-flex flex-column justify-content-between">
                <img src="{{asset('frontend-assets/images/auth.jpg')}}" width="100%" alt="">
                <div class="mt-3 body-fm d-flex justify-content-center ">
                    <a href="{{route('login')}}" class="underline input-wrapper">I am already member</a>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
