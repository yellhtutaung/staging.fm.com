@extends('backend.layouts.app')
@section('title', 'Details')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-4">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border border-0 theme_bg ">
                        <h5 class="card-title text-white">User Information of {{$fetchUser->name}}</h5>
                    </div>
                    <div class="card border-0 shadow-sm card-body profile-info">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr class="">
                                    <td class="py-3 form-label">Full Name</td>
                                    <td class="py-3 form-label">{{$fetchUser->name}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Email</td>
                                    <td class="py-3 form-label">{{$fetchUser->email}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Username</td>
                                    <td class="py-3 form-label">{{$fetchUser->username}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Phone Number</td>
                                    <td class="py-3 form-label">{{$fetchUser->phone}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Shop Name</td>
                                    <td class="py-3 form-label">{{$fetchUser->shop_name}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Country</td>
                                    <td class="py-3 form-label">{{ $currentCountry ? $currentCountry->name : "-" }}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">City</td>
                                    <td class="py-3 form-label">{{ $currentCity ? $currentCity->name: "-" }}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Postal Code</td>
                                    <td class="py-3 form-label">{{$fetchUser->postal_code ? $fetchUser->postal_code : '-'}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Zip Code</td>
                                    <td class="py-3 form-label">{{$fetchUser->zip_code ? $fetchUser->zip_code : '-'}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 form-label">Address</td>
                                    <td class="py-3 form-label">{{$fetchUser->address ? $fetchUser->address : '-'}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        $('#file-action').click(function () {
            $('#file-input').click()
        })
    </script>
@endsection
