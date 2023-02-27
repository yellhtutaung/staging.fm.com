@extends('backend.layouts.app')
@section('title', 'Permissions')
@section('extra-css')
@endsection
@section('content')
    <div class="container-fluid ">

        <a href="{{route('addPermission')}}" class="btn theme_bg text-white my-3" >ADD +</a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white">Permissions</h5>
        </div>
        <div class="card table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Notes</th>
                    <th>Reg Date</th>
                    <th>Updated</th>
                    <th>Hide | Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $Index => $permission)
                    <tr>
                        <td>{{$Index+1}}</td>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->notes}}</td>
                        <td>{{$permission->created_at->toDateString()}}</td>
                        <td>{{$permission->updated_at->diffForHumans()}}</td>
                        <td>
                            <div class="form-check form-switch p-0 m-0">
                                <input data-id="{{$permission->id}}" data-status-val="{{$permission->hide_show}}" onchange="universalSwitch(5,{{$permission->id}},'hide_show',{{$permission->hide_show}});" class="toggle-class toggle-id{{$permission->id}}" type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                       data-on="Show"  data-off="Hide" {{$permission->hide_show==1?"checked":""}}>
                            </div>
                        </td>
{{--                        <td>--}}
{{--                            <div class="form-check form-switch p-0 m-0">--}}
{{--                                <input data-id="1" class="toggle-class" type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle"--}}
{{--                                       data-on="Show"  data-off="Hide" {{$permission->hide_show==1?"checked":""}}>--}}
{{--                            </div>--}}
{{--                        </td>--}}
                        <td>
                            <a href="{{route('editPermission', $permission->id)}}" class="rounded btn btn-info">
                                <span class="material-symbols-outlined mt-2 text-white">edit</span>
                            </a>
                        </td>
                        <td>
                            <a href="" class="rounded btn btn-danger">
                                <span class="material-symbols-outlined mt-2 text-white">delete</span>
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
