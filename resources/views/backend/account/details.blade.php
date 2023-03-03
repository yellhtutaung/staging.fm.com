@extends('backend.layouts.app')
@section('title', 'Details')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border border-0 theme_bg ">
                        <h5 class="card-title text-white">Account Information of {{$account->name}}</h5>
                    </div>
                    <div class="card card-custom border-0 card-body profile-info">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="">
                                        <td class="py-3">Full Name</td>
                                        <td class="py-3">{{$account->name}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Username</td>
                                        <td class="py-3">{{$account->username}}</td>
                                    </tr>
                                    <tr class="">
                                        @php
                                            $UserRole = Auth::guard('admin')->user()->role;
                                            $RoleDb = App\Models\Permission::find($UserRole);
                                        @endphp
                                        <td class="py-3">Role</td>
                                        <td class="py-3">{{$RoleDb->name}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Phone Number</td>
                                        <td class="py-3">{{$account->phone}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Email</td>
                                        <td class="py-3">{{$account->email}}</td>
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
