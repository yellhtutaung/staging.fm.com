@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="d-flex justify-content-center align-items-center register">
        <div class="row justify-content-center align-items-stretch ">
            <div class="col-lg-6">

                <div class="p-2">
                    <form method="POST" action="{{ route('register') }}" class=" body-fm ">
                        @csrf
                        <div class="main_title">
                            <h3 class="title-fm text-black mb-2">Sign Up For Price List</h3>
                            <span class="main_title_underline bg-dark"></span>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="name" class="form-label">Full Name</label> --}}
                                <input type="text" class="input @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" id="name" placeholder="Enter your name"
                                     autofocus>
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
                                    id="email" >
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
                                    id="phone" >
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                {{-- <label for="shop" class="form-label">Shop Name</label> --}}
                                <input type="text" class="input @error('shop_name') is-invalid @enderror"
                                    name="shop_name" value="{{ old('shop_name') }}" placeholder="Enter your shop name"
                                    id="shop" >
                                @error('shop_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper ">
                                {{-- <label for="country" class="form-label">Country</label> --}}
{{--                                 <input type="text" class="input @error('country') is-invalid @enderror"--}}
{{--                                    name="country" value="{{ old('country') }}" placeholder="Enter your country"--}}
{{--                                    id="country" >--}}
                                <div class="custom-select">
                                    <select class="js-example-basic-single @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" id="country" >
                                        <option disabled  hidden>Select country</option>
                                        <option class="first" selected value="1">Myanmar</option>
                                    </select>
                                </div>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
{{--                                    <label for="Choose">Choose City</label>--}}
                                <div class="custom-select">
                                    <select class="js-example-basic-single @error('country') is-invalid @enderror" name="city" >
                                        <option value="1">Yangon</option>
                                        <option value="2">Mandalay</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-12 input-wrapper">
                                <input type="text" class="input @error('postal_code') is-invalid @enderror"
                                       name="postal_code" value="{{ old('postal_code') }}" placeholder="Enter your postal code"
                                       id="postal_code" >
                                @error('postal_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 input-wrapper">
                                <input type="text" class="input @error('zip_code') is-invalid @enderror"
                                    name="zip_code" value="{{ old('zip_code') }}" placeholder="Enter your zip code"
                                    id="zip_code" >
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 input-wrapper">
                                {{-- <label for="address" class="form-label">Address</label> --}}
                                <textarea type="number" class="input @error('address') is-invalid @enderror"
                                    name="address" value="{{ old('address') }}" placeholder="Enter your address"
                                    id="address" rows="3" ></textarea>
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
                                    id="password" >
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
                                    id="confirm-password" >
                            </div>
                            <div  class="col-lg-12 input-wrapper">
                                <button>Register</button>
                            </div>
                        </div>

                    </form>
                    <div class="mt-3 body-fm d-lg-none">
                        Already have an account.
                        <span class="underline ms-2">
                            <a href="{{route('login')}}" class="text-decoration-none">Sign In</a>
                     </span>
                    </div>
                </div>


            </div>

            <div class="col-lg-6 p-2 d-none d-lg-flex flex-column justify-content-between">
                <img src="{{asset('frontend-assets/images/auth_chart_head.jpg')}}" width="100%" alt="">
                <img src="{{asset('frontend-assets/images/auth_chart.jpg')}}" width="100%" alt="">
                <div class="body-fm d-flex justify-content-center align-items-center">
                            Already have an account.
                     <span class="underline ms-2">
                            <a href="{{route('login')}}" class="text-decoration-none">Sign In</a>
                     </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
       $('.js-example-basic-single').select2();
    });
</script>

@endsection
