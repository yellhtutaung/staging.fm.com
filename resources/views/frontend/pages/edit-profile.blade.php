@extends('frontend.layouts.app')
@section('title', 'Update Profile')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/profile.css')}}"/>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
@section('content')

    <div class="authenticated_bg">
        <div class="container py-5" style="margin-top: 140px !important;">
            <div class="row g-2">
                @include('frontend.layouts.user_sidebar')

                <div class="col-md-9 ms-md-auto">
                    <div class="animate__animated animate__fadeIn">
                        <div class="card-header form-header-border border-0 theme_bg ">
                            <h5 class="card-title title-fm text-white m-0">{{ __('message.update_profile') }}</h5>
                        </div>
                        <div class="card card-custom  border-0 card-body profile-info">
                            <form action="{{route('update-profile')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.full_name') }}</label>
                                            <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                                   name="name" value="{{old('name', $user->name)}}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.email') }}</label>
                                            <input type="email" disabled
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{old('email', $user->email)}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.phone_number') }}</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                   name="phone" value="{{old('phone', $user->phone)}}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.shop_name') }}</label>
                                            <input type="text" class="form-control" name="shop_name"
                                                   value="{{old('shop_name', $user->shop_name)}}">
                                            @error('shop_name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.current_country') }}</label>
                                            <select id="country" onchange="takeCitiesByCountryId()"
                                                    class="form-control js-example-disabled-results @error('country_id') is-invalid @enderror"
                                                    name="country_id">
                                                <option value="">Select Country</option>
                                                @foreach($countries as $country)
                                                    <option
                                                        value="{{$country->id}}" {{ $user->country_id === $country->id ? 'selected' : null }}>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('country_id')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.current_city') }}</label>
                                            <select id="city"
                                                    class="form-control js-example-disabled-results @error('city_id') is-invalid @enderror"
                                                    name="city_id">
                                                <option value="">Select City</option>
                                                @foreach($currentCities as $currentCity)
                                                    <option
                                                        value="{{$currentCity->id}}" {{$currentCity->id === $user->city_id ? 'selected' : null}}>{{$currentCity->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('city_id')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.postal_code') }}</label>
                                            <input type="text"
                                                   class="form-control @error('postal_code') is-invalid @enderror"
                                                   name="postal_code"
                                                   value="{{old('postal_code', $user->postal_code)}}">
                                            @error('postal_code')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.zip_code') }}</label>
                                            <input type="text"
                                                   class="form-control @error('zip_code') is-invalid @enderror"
                                                   name="zip_code" value="{{old('zip_code', $user->zip_code)}}">
                                            @error('zip_code')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.address') }}</label>
                                            <textarea class="form-control @error('address') is-invalid @enderror"
                                                      name="address" cols="30"
                                                      rows="3">{{old('address', $user->address)}}</textarea>
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="" >{{ __('message.update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('extra-script')
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
        const outCities = <?php echo json_encode($cities, true); ?>;

        function takeCitiesByCountryId() {

            let country_id = parseInt($('#country').val());

            let cities = outCities.filter(city => {
                return city.parent_id === country_id
            })

            $('#city').empty()

            if (cities.length > 0) {
                for (let i = 0; i < cities.length; i++) {
                    let data = `<option value="${cities[i].id}">${cities[i].name}</option>`;
                    $('#city').append(data)
                }
            } else {
                let data = `<option value=""></option>`;
                $('#city').append(data)
            }
        }


        {{-------------------  logout -----------------}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#logout', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: '{{ __('message.logout_confirm') }}',
                showCancelButton: true,
                cancelButtonText: '{{ __('message.cancel_btn') }}',
                confirmButtonText: '{{ __('message.confirm_btn') }}',
                denyButtonText: `Don't save`,
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('hello')
                    $.ajax({
                        url: "{{ route('logout') }}",
                        type: "POST",
                        success: function () {
                            window.location.reload()
                        }
                    })
                }
            })

        })

    </script>
@endsection

