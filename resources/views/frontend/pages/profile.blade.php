@extends('frontend.layouts.app')
@section('title', 'Profile')
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
                            <h5 class="card-title title-fm text-white m-0"> {{ __('message.personal_information') }}</h5>
                        </div>
                        <div class="card card-custom border-0 card-body profile-info">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.full_name') }}</td>
                                        <td class="py-3 form-label">{{$user->name}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.email') }}</td>
                                        <td class="py-3 form-label">{{$user->email}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.username') }}</td>
                                        <td class="py-3 form-label">{{$user->username}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.phone_number') }}</td>
                                        <td class="py-3 form-label">{{$user->phone}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.shop_name') }}</td>
                                        <td class="py-3 form-label">{{$user->shop_name}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.country') }}</td>
                                        <td class="py-3 form-label">{{ $currentCountry ? $currentCountry->name : "-" }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.city') }}</td>
                                        <td class="py-3 form-label">{{ $currentCity ? $currentCity->name: "-" }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.postal_code') }}</td>
                                        <td class="py-3 form-label">{{$user->postal_code ? $user->postal_code : '-'}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.zip_code') }}</td>
                                        <td class="py-3 form-label">{{$user->zip_code ? $user->zip_code : '-'}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">{{ __('message.address') }}</td>
                                        <td class="py-3 form-label">{{$user->address ? $user->address : '-'}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-script')
    <script>
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
