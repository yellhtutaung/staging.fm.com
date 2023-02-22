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
                    <div class="card border-0 shadow-sm card-body profile-info">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="">
                                        <td class="py-3 form-label">Full Name</td>
                                        <td class="py-3 form-label">{{$account->name}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">Username</td>
                                        <td class="py-3 form-label">{{$account->username}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">Role</td>
                                        <td class="py-3 form-label">{{config('app.roles')[$account->role - 1]}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">Phone Number</td>
                                        <td class="py-3 form-label">{{$account->phone}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3 form-label">Email</td>
                                        <td class="py-3 form-label">{{$account->email}}</td>
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
