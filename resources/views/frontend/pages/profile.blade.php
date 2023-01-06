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
                        <td class="py-3 text-secondary">Full Name</td>
                        <td class="py-3">{{$user->name}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">Email</td>
                        <td class="py-3">{{$user->email}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">Phone Number</td>
                        <td class="py-3">{{$user->phone}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">Shop Name</td>
                        <td class="py-3">{{$user->shop_name}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">Country</td>
                        <td class="py-3">Myanmar</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">City</td>
                        <td class="py-3">Yangon</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">Postal Code</td>
                        <td class="py-3">{{$user->postal_code ? $user->postal_code : '-'}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">Zip Code</td>
                        <td class="py-3">{{$user->zip_code ? $user->zip_code : '-'}}</td>
                    </tr>
                    <tr class="">
                        <td class="py-3 text-secondary">Address</td>
                        <td class="py-3">{{$user->address ? $user->address : '-'}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
