@extends('backend.layouts.app')
@section('title', 'Account List')
<style>
    td{
        text-align: center;
    }
    th{
        text-align: center!important;
    }
</style>
@section('content')
    <div class="container-fluid ">

        <a href="{{route('addAccount')}}" class="btn add-button text-white my-3" >
            ADD <i class="fa-solid fa-plus"></i>
        </a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> Account Information</h5>
        </div>
        <div class="card card-custom table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Reg Date</th>
                    <th>Last Active</th>
{{--                    <th>Ban</th>--}}
                    <th>Details</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($admins as $Index => $admin)
                    <tr>
                        <td>{{$Index+1}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->phone}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->created_at ? $admin->created_at->toDateString() : '-'}}</td>
                        <td>{{$admin->updated_at ? $admin->updated_at->diffForHumans() : '-'}}</td>
{{--                        <td>--}}
{{--                            <div class="form-check form-switch p-0 m-0">--}}
{{--                                <input data-id="{{$admin->id}}" data-status-val="{{$admin->is_ban}}" onchange="universalSwitch(0,{{$admin->id}},'is_ban',{{$admin->is_ban}});"--}}
{{--                                       class="toggle-class toggle-id{{$admin->id}}" type="checkbox"--}}
{{--                                       data-onstyle="danger" data-offstyle="success" data-toggle="toggle"--}}
{{--                                       data-on="Ban"  data-off="Active" {{$admin->is_ban==1?"checked":""}}>--}}
{{--                            </div>--}}
{{--                        </td>--}}
                        <td class="d-flex justify-content-center align-items-center ">
                            <a href="{{route('accountDetails', $admin->token)}}" class="d-flex justify-content-center align-items-center secondary-radius w-50px-h50px text-decoration-none text-light btn theme_bg">
                                <span class="material-symbols-outlined  text-white">visibility</span>
                            </a>
                        </td>
                        <td class="">
                            <a href="{{route('editAccount', $admin->token)}}" class="d-flex justify-content-center align-items-center w-50px-h50px secondary-radius btn btn-info">
                                <span class="material-symbols-outlined text-white">edit</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

@section('extra-script')
    <script src="{{asset('backend-assets/js/universalSwitch.js')}}" ></script>
    <script>

        $(document).ready(function () {
            $('#example').DataTable({
                "pageLength": 100,
            });
            $('.form-control-sm').addClass("input-data-search")
            $('.input-data-search').focus(); // input auto focus

            $('.js-example-basic-multiple').select2();

        });

    </script>
@endsection
