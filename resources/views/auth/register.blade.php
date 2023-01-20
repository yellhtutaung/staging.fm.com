@extends('layouts.app')
@section('title', 'Register')
@section('content')

    <div class="user-register auth_bg container-fluid" >
        <div class="row">
            <div class="col-lg-6 p-3">
                <div class="form-content  p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="body-fm ">
                        @csrf
                        <div class="main_title mb-3">
                            <h5 class="title-fm text-black mb-2">Sign Up</h5>
                            <span class="main_title_underline bg-dark"></span>
                        </div>

                        <div class="row">
                            <div class="col-md-6 input-wrapper">
                                <input type="text" class="input @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" id="name" placeholder="Enter your name"
                                       autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="email" class="input @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" placeholder="Enter your email"
                                       id="email" >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="number" class="input @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number"
                                       id="phone" >
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="text" class="input @error('shop_name') is-invalid @enderror"
                                       name="shop_name" value="{{ old('shop_name') }}" placeholder="Enter your shop name"
                                       id="shop" >
                                @error('shop_name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper ">
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
                            <div class="col-md-6 input-wrapper">
                                <select id="city" class="form-control js-example-disabled-results" name="city_id" >
                                    <option value="">Select City</option>
                                </select>

                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="text" class="input @error('postal_code') is-invalid @enderror"
                                       name="postal_code" value="{{ old('postal_code') }}" placeholder="Enter your postal code"
                                       id="postal_code" >
                                @error('postal_code')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
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
                            <div class="col-md-6 input-wrapper">
                                <input type="password" class="input @error('password') is-invalid @enderror"
                                       name="password" placeholder="Enter your password"
                                       id="password" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="password" class="input @error('password') is-invalid @enderror"
                                       name="password_confirmation" placeholder="Enter confirm password"
                                       id="confirm-password" >
                            </div>
                            <div  class="col-lg-12 input-wrapper">
                                <button>Register</button>
                            </div>
                        </div>

                    </form>

                    <div class="mt-2 body-fm bottom-text">
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
        let country_id = parseInt($('#country').val());
        console.log(outCities[0].parent_id === country_id)

        let cities = outCities.filter( city => {
            return city.parent_id === country_id
        })

        $('#city').empty()
        if(cities.length > 0) {
            for (let i = 0; i < cities.length; i++) {
                let data = `<option value="${cities[i].id}">${cities[i].name}</option>`;
                $('#city').append(data)
            }
        }else{
            let data = `<option value=""></option>`;
            $('#city').append(data)
        }

    }

</script>

@endsection
