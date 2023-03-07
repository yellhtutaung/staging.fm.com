@extends('backend.layouts.app')
@section('title', 'Permissions')
@section('extra-css')
@endsection
@section('content')
    <div class="container-fluid ">

        <a href="{{route('addPermission')}}" class="btn add-button theme_bg text-white my-3" >ADD <i class="fa-solid fa-plus"></i></a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white">Permissions</h5>
        </div>
        <div class="card card-custom table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Notes</th>
                    <th>Permission Count</th>
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
                        <td>{{$permission->notes??'-'}}</td>
                        <td>
                            <?php $count=0?>
                            @foreach(json_decode($permission->guard_json, true) as $all)
                                @foreach($all as $prefix=>$list)
                                    @foreach($list as $permit=>$bol)
                                        @if($bol == "true")
                                            <?php $count += 1 ?>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                            <span class="badge bg-warning">{{$count}}</span>
{{--                            <div style="max-height: 200px; overflow: scroll">--}}
{{--                                @foreach(json_decode($permission->guard_json, true) as $all)--}}
{{--                                    @foreach($all as $prefix=>$list)--}}
{{--                                        <span class="badge bg-dark mb-3">{{$prefix}}</span> <br>--}}
{{--                                        @foreach($list as $permit=>$bol)--}}
{{--                                            @if($bol)--}}
{{--                                                <span class="badge bg-danger">{{$permit}}</span>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                        <hr>--}}
{{--                                    @endforeach--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
                        </td>
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
                            <a href="{{route('editPermission', $permission->id)}}" class="secondary-radius btn btn-info">
                                <span class="material-symbols-outlined mt-2 text-white">edit</span>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('deletePermission', $permission->id)}}" id="delPermissionForm-{{$permission->id}}" method="POST">
                                @csrf
                            </form>
                            <button class="secondary-radius btn btn-danger" onclick="delPermission({{$permission->id}})">
                                <span class="material-symbols-outlined mt-2 text-white">delete</span>
                            </button>
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
        const delPermission = (id) => {
            $('#delPermissionForm-'+id).submit()
        }
    </script>
@endsection
