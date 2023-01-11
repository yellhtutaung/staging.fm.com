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
                                <select id="country" onchange="takeCitiesByCountryId()"  class="form-control js-example-placeholder-single js-example-disabled-results @error('country_id') is-invalid @enderror" name="country_id" >
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>

                                @error('country_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
                                <select id="city" class="form-control js-example-disabled-results" name="city_id" >
                                    <option value="">Select City</option>
                                </select>

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
                                <textarea type="number" class="input @error('address') is-invalid @enderror"
                                    name="address"  placeholder="Enter your address"
                                    id="address" rows="3" >{{ old('address') }}</textarea>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 input-wrapper">
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

        $("#country").select2({
            placeholder: "Select Country",
            allowClear: false
        });

        $("#city").select2({
            placeholder: "Select City",
            allowClear: false
        });

    });
    const outCities = <?php echo json_encode($cities,true); ?>;
    function takeCitiesByCountryId () {
        $('#city').empty()
        let country_id = parseInt($('#country').val());
        console.log(outCities[0].parent_id === country_id)

        let cities = outCities.filter( city => {
            return city.parent_id === country_id
        })

        for (let i = 0; i < cities.length; i++) {
            let data = `<option value="${cities[i].id}">${cities[i].name}</option>`;
            $('#city').append(data)
        }
    }

</script>

@endsection
