@extends('backend.layouts.app')
@section('title', 'Fruits')

@section('content')
    <div class="container-fluid ">

        <a href="" class="btn theme_bg text-white my-3" >ADD +</a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> Fruits</h5>
        </div>
        <div class="card table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
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
                    <th>Edit</th>
                    <th>Ban</th>
                    <th>Details</th>
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
                        <td>
                            <a href="" class="rounded btn btn-info">
                                <span class="material-symbols-outlined mt-2 text-white">edit</span>
                            </a>
                        </td>
                        <td>
                            <a href="" class="rounded btn btn-danger">
                                <span class="material-symbols-outlined mt-2 text-white">delete</span>
                            </a>
                        </td>
                        <td>
                            <a href="" class="rounded btn btn-dark">
                                <span class="material-symbols-outlined mt-2 text-white">visibility</span>
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
