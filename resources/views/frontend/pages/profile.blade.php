@extends('frontend.layouts.user-sidebar')
@section('title', 'Profile')
@section('sidebar')
    <div class="animate__animated animate__fadeIn">
        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> Personal Information</h5>
        </div>
        <div class="card border-0 shadow-sm card-body profile-info">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                    <tr class="">
                        <td class="py-3 form-label">Full Name</td>
                        <td class="py-3 form-label">{{$user->name}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">Email</td>
                        <td class="py-3 form-label">{{$user->email}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">Phone Number</td>
                        <td class="py-3 form-label">{{$user->phone}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">Shop Name</td>
                        <td class="py-3 form-label">{{$user->shop_name}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">Country</td>
                        <td class="py-3 form-label">Myanmar</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">City</td>
                        <td class="py-3 form-label">Yangon</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">Postal Code</td>
                        <td class="py-3 form-label">{{$user->postal_code ? $user->postal_code : '-'}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">Zip Code</td>
                        <td class="py-3 form-label">{{$user->zip_code ? $user->zip_code : '-'}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 form-label">Address</td>
                        <td class="py-3 form-label">{{$user->address ? $user->address : '-'}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
