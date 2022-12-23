@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="d-flex justify-content-center align-items-center register">
        <div class="row justify-content-center align-items-stretch ">
            <div class="col-lg-6">

                <div class="p-2">
                    <form method="POST" action="{{ route('register') }}" class=" body-fm ">
                        @csrf
                        <h3 class="title-fm text-lg-center mb-2">Sign Up For Price List</h3>

                        <div class="row">
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="name" class="form-label">Full Name</label> --}}
                                <input type="text" class="input @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" id="name" placeholder="Enter your name"
                                    autocomplete="off" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="email" class="form-label">Email</label> --}}
                                <input type="email" class="input @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Enter your email"
                                    id="email" autocomplete="off">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="phone" class="form-label">Phone</label> --}}
                                <input type="number" class="input @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number"
                                    id="phone" autocomplete="off">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="shop" class="form-label">Shop Name</label> --}}
                                <input type="text" class="input @error('shop') is-invalid @enderror"
                                    name="shop" value="{{ old('shop') }}" placeholder="Enter your shop name"
                                    id="shop" autocomplete="off">
                                @error('shop')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper ">
                                {{-- <label for="country" class="form-label">Country</label> --}}
                                 <input type="text" class="input @error('country') is-invalid @enderror"
                                    name="country" value="{{ old('country') }}" placeholder="Enter your country"
                                    id="country" autocomplete="off">
{{--                                <div class="custom-select">--}}
{{--                                    <select class="input @error('country') is-invalid @enderror"--}}
{{--                                        name="country" value="{{ old('country') }}" placeholder="Enter your country"--}}
{{--                                        id="country" autocomplete="off">--}}
{{--                                        <option disabled selected hidden>Select country</option>--}}
{{--                                        <option class="first" value="Myanmar">Myanmar</option>--}}
{{--                                        <option value="Thai">Thai</option>--}}
{{--                                        <option value="Singapore">Singapore</option>--}}
{{--                                        <option class="last" value="Malaysia">Malaysia</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="city" class="form-label">City</label> --}}
                                <input type="text" class="input @error('city') is-invalid @enderror"
                                    name="city" value="{{ old('city') }}" placeholder="Enter your city"
                                    id="city" autocomplete="off">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 input-wrapper">
                                {{-- <label for="township" class="form-label">Township</label> --}}
                                <input type="text" class="input @error('township') is-invalid @enderror"
                                    name="township" value="{{ old('township') }}" placeholder="Enter your township"
                                    id="township" autocomplete="off">
                                @error('township')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 input-wrapper">
                                {{-- <label for="address" class="form-label">Address</label> --}}
                                <textarea type="number" class="input @error('address') is-invalid @enderror"
                                    name="address" value="{{ old('address') }}" placeholder="Enter your address"
                                    id="address" rows="3" autocomplete="off"></textarea>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="password" class="form-label">Password</label> --}}
                                <input type="password" class="input @error('password') is-invalid @enderror"
                                    name="password" placeholder="Enter your password"
                                    id="password" autocomplete="off">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="confirm-password" class="form-label">Confirm Password</label> --}}
                                <input type="password" class="input @error('password') is-invalid @enderror"
                                    name="password_confirmation" placeholder="Enter confirm password"
                                    id="confirm-password" autocomplete="off">
                            </div>
                            <div  class="col-lg-12 input-wrapper">
                                <button>Register</button>
                            </div>
                        </div>

                    </form>
                    <div class="mt-3 body-fm d-lg-none">
                        <a href="{{route('login')}}" class="underline ">I am already member</a>
                    </div>
                </div>


            </div>

            <div class="col-lg-6 p-2 d-none d-lg-flex flex-column justify-content-between">
                <img src="{{asset('frontend-assets/images/auth_chart_head.jpg')}}" width="100%" alt="">
                <img src="{{asset('frontend-assets/images/auth_chart.jpg')}}" width="100%" alt="">
                <div class="body-fm d-flex justify-content-center">
                    <a href="{{route('login')}}" class="underline input-wrapper">I am already member</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
