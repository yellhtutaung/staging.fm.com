@extends('backend.layouts.app')
@section('title', 'User List')
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

{{--        <a href="" class="btn add-button theme_bg text-white my-3" >ADD <i class="fa-solid fa-plus"></i></a>--}}

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> User Information</h5>
        </div>
        <div class="card card-custom table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    {{--                    <th>Shop Name</th>--}}
                    <th>Country</th>
                    <th>City</th>
                    <th>Reg Date</th>
                    <th>Last Active</th>
{{--                    <th>Ban</th>--}}
                    <th>Details</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $Index => $user)
                    <tr>
                        <td>{{$Index+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        {{--                        <td>{{$user->shop_name}}</td>--}}
                        <td>Myanmar</td>
                        <td>Yangon</td>
                        <td>{{$user->created_at->toDateString()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
{{--                        <td>--}}
{{--                            <div class="form-check form-switch p-0 m-0">--}}
{{--                                <input data-id="{{$user->id}}" data-status-val="{{$user->is_ban}}" onchange="universalSwitch(1,{{$user->id}},'is_ban',{{$user->is_ban}});"--}}
{{--                                       class="toggle-class toggle-id{{$user->id}}" type="checkbox"--}}
{{--                                       data-onstyle="danger" data-offstyle="success" data-toggle="toggle"--}}
{{--                                       data-on="Ban"  data-off="Active" {{$user->is_ban==1?"checked":""}}>--}}
{{--                            </div>--}}
{{--                        </td>--}}
                        <td class="d-flex justify-content-center align-items-center ">
                            <a href="{{route('userDetails',$user->token)}}" class="d-flex justify-content-center align-items-center w-50px-h50px  secondary-radius btn theme_bg">
                                <span class="material-symbols-outlined text-white">visibility</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('editUser',$user->id)}}" class="d-flex justify-content-center align-items-center w-50px-h50px secondary-radius btn btn-info">
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
