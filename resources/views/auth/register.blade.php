@extends('layouts.app')
@section('title', 'Register')
@section('content')

    <div class="user-register auth_bg container-fluid" >
        <div class="row justify-content-end">
            <div class="col-lg-6 p-3">
                <div class="form-content  p-3 d-flex flex-column justify-content-center h-100">
                    <div class="logo d-lg-none d-flex justify-content-center mb-2">
                        <img src="{{asset('freshmoe_logo.png')}}" alt="">
                    </div>
                    <form method="POST" action="{{ route('customRegister') }}" class="body-fm " autocomplete="off">
                        @csrf
                        <div class="main_title mb-3">
                            <h5 class="title-fm text-black mb-2">{{ __('auth.sign_up.sign_up') }}</h5>
                            <span class="main_title_underline bg-dark"></span>
                        </div>

                        <div class="row align-items-stretch">
                            <div class="col-md-6 input-wrapper">
                                <input type="text" class="input @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" id="name" placeholder="{{ __('auth.sign_up.enter_name') }}"
                                       autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="email" class="input @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" placeholder="{{ __('auth.sign_up.enter_email') }}"
                                       id="email" >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="number" class="input @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" placeholder="{{ __('auth.sign_up.enter_phone') }}"
                                       id="phone" >
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="text" class="input @error('shop_name') is-invalid @enderror"
                                       name="shop_name" value="{{ old('shop_name') }}" placeholder="{{ __('auth.sign_up.enter_shop') }}"
                                       id="shop" >
                                @error('shop_name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper ">
                                <select id="country" onchange="takeCitiesByCountryId()"  class="form-control js-example-placeholder-single js-example-disabled-results @error('country_id') is-invalid @enderror" name="country_id" >
                                    <option value="">{{ __('auth.sign_up.select_country') }}</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" {{old('country_id') == $country->id ? 'selected' : ''}}>{{$country->name}}</option>
                                    @endforeach
                                </select>

                                @error('country_id')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <select id="city" class="form-control js-example-disabled-results @error('city_id') is-invalid @enderror" name="city_id" >
                                    <option value="">{{ __('auth.sign_up.select_city') }}</option>
                                </select>
                                @error('city_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="text" class="input @error('postal_code') is-invalid @enderror"
                                       name="postal_code" value="{{ old('postal_code') }}" placeholder="{{ __('auth.sign_up.enter_postal_code') }}"
                                       id="postal_code" >
                                @error('postal_code')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="text" class="input @error('zip_code') is-invalid @enderror"
                                       name="zip_code" value="{{ old('zip_code') }}" placeholder="{{ __('auth.sign_up.enter_zip_code') }}"
                                       id="zip_code" >
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 input-wrapper">
                            <textarea type="number" class="input @error('address') is-invalid @enderror"
                                      name="address"  placeholder="{{ __('auth.sign_up.enter_address') }}"
                                      id="address" rows="3" >{{ old('address') }}</textarea>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="password" class="input @error('password') is-invalid @enderror"
                                       name="password" placeholder="{{ __('auth.sign_up.enter_password') }}"
                                       id="password" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-md-6 input-wrapper">
                                <input type="password" class="input @error('password') is-invalid @enderror"
                                       name="password_confirmation" placeholder="{{ __('auth.sign_up.enter_confirm_password') }}"
                                       id="confirm-password" >
                            </div>
                            <div  class="col-lg-12 input-wrapper">
                                <button>{{ __('auth.sign_up.register') }}</button>
                            </div>
                        </div>

                    </form>

                    <div class="mt-2 body-fm bottom-text">
                        {{ __('auth.sign_up.already_acc') }}
                        <span class="underline ms-2">
                                    <a href="{{route('login')}}" class="text-decoration-none">{{ __('auth.sign_up.sign_in') }}</a>
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
            placeholder: "{{ __('auth.sign_up.select_country') }}",
            allowClear: false
        });

        $("#city").select2({
            placeholder: "{{ __('auth.sign_up.select_city') }}",
            allowClear: false
        });

        takeCitiesByCountryId()

    });
    const outCities = <?php echo json_encode($cities,true); ?>;
    function takeCitiesByCountryId () {
        let country_id = parseInt($('#country').val());
        console.log(outCities[0].parent_id === country_id)

        let cities = outCities.filter( city => {
            return city.parent_id === country_id
        })

        const selected_id =  {{old('city_id')}}

        $('#city').empty()
        if(cities.length > 0) {
            for (let i = 0; i < cities.length; i++) {
                let data = `<option value="${cities[i].id}" ${selected_id === cities[i].id ? 'selected' : ''}>${cities[i].name}</option>`;
                $('#city').append(data)
            }
        }else{
            let data = `<option value=""></option>`;
            $('#city').append(data)
        }

    }

</script>

@endsection
