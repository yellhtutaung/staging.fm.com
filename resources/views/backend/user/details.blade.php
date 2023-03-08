@extends('backend.layouts.app')
@section('title', 'Details')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border border-0 theme_bg ">
                        <h5 class="card-title text-white">User Information of {{$fetchUser->name}}</h5>
                    </div>
                    <div class="card card-custom border-0 shadow-sm card-body profile-info">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr class="">
                                    <td class="py-3 ">Full Name</td>
                                    <td class="py-3 ">{{$fetchUser->name}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Email</td>
                                    <td class="py-3 ">{{$fetchUser->email}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Username</td>
                                    <td class="py-3 ">{{$fetchUser->username}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Phone Number</td>
                                    <td class="py-3 ">{{$fetchUser->phone}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Shop Name</td>
                                    <td class="py-3 ">{{$fetchUser->shop_name}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Country</td>
                                    <td class="py-3 ">{{ $currentCountry ? $currentCountry->name : "-" }}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">City</td>
                                    <td class="py-3 ">{{ $currentCity ? $currentCity->name: "-" }}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Postal Code</td>
                                    <td class="py-3 ">{{$fetchUser->postal_code ? $fetchUser->postal_code : '-'}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Zip Code</td>
                                    <td class="py-3 ">{{$fetchUser->zip_code ? $fetchUser->zip_code : '-'}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 ">Address</td>
                                    <td class="py-3 ">{{$fetchUser->address ? $fetchUser->address : '-'}}</td>
                                </tr>
                                <tr>
                                    <td class="py-3">Is Ban</td>
                                    <td class="py-3">
                                        <div class="form-check form-switch p-0 m-0">
                                            <input data-id="{{$fetchUser->id}}" data-status-val="{{$fetchUser->is_ban}}" onchange="universalSwitch(1,{{$fetchUser->id}},'is_ban',{{$fetchUser->is_ban}});"
                                                   class="toggle-class toggle-id{{$fetchUser->id}}" type="checkbox"
                                                   data-onstyle="danger" data-offstyle="success" data-toggle="toggle"
                                                   data-on="Ban"  data-off="Active" {{$fetchUser->is_ban==1?"checked":""}}>
                                        </div>
                                    </td>
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
    <script src="{{asset('backend-assets/js/universalSwitch.js')}}" ></script>
    <script>

    </script>
@endsection
