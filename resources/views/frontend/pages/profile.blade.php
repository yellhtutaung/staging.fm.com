@extends('frontend.layouts.user-sidebar')
@section('title', 'Profile')
@section('sidebar')
    <div class="animate__animated animate__fadeIn">
        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> {{ __('message.personal_information') }}</h5>
        </div>
        <div class="card border-0 card-body profile-info">
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
@endsection
