@extends('backend.layouts.app')
@section('title', 'Permissions')
@section('extra-css')
    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
        tbody tr {
            cursor: -webkit-grabbing;
            cursor: grabbing;
        }
        td{
             text-align: center !important;
        }
        th{
            text-align: center!important;
        }
    </style>
{{--    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>--}}
{{--    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>--}}
{{--    <script>--}}
{{--        $( function() {--}}
{{--            $( "#sortable" ).sortable();--}}
{{--        } );--}}
{{--    </script>--}}
@endsection
@section('content')
    <div class="container-fluid ">

        <a href="{{route('addPermission')}}" class="btn add-button text-white my-3" >ADD <i class="fa-solid fa-plus"></i></a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white">Permissions</h5>
        </div>
        <div class="card card-custom table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th hidden>Order</th>
                    <th>Permission Count</th>
                    <th>Reg Date</th>
                    <th>Updated</th>
                    <th>Detail</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody  id="sortable">
                @foreach($permissions as $Index => $permission)
                    <tr class="ui-state-default order_sort_id" id="item-{{$permission->id}}" data-sort-order-id="{{$permission->order_sort_id??'-'}}">
                        <td class="number">{{$Index+1}}</td>
                        <td class="id" value="{{$permission->id}}">{{$permission->name}}</td>
                        <td hidden class="order_sort_id">{{$permission->order_sort_id}}</td>
                        <td>
                            <span class="badge theme_bg_red">{{count(json_decode($permission->guard_json))}}</span>
                        </td>
                        <td>{{$permission->created_at->toDateString()}}</td>
                        <td>{{$permission->updated_at->diffForHumans()}}</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="{{route('permissionDetails', $permission->id)}}" class="d-flex justify-content-center align-items-center w-50px-h50px secondary-radius btn theme_bg">
                                <span class="material-symbols-outlined text-white">visibility</span>
                            </a>
                        </td>
                        <td class="">
                            <center>
                                <a href="{{route('editPermission', $permission->id)}}" class="d-flex justify-content-center align-items-center w-50px-h50px secondary-radius btn btn-info">
                                    <span class="material-symbols-outlined text-white">edit</span>
                                </a>
                            </center>

                        </td>
                        <td class="d-flex justify-content-center align-items-center">
{{--                            <form action="{{route('deletePermission', $permission->id)}}" id="delPermissionForm-{{$permission->id}}" method="POST">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
                            <button class="secondary-radius btn theme_bg_red d-flex justify-content-center align-items-center w-50px-h50px " onclick="delPermission({{$permission->id}})">
                                <span class="material-symbols-outlined text-white">delete</span>
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
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>

        $(document).ready(function () {
            $('#example').DataTable({
                "pageLength": 100,
                "sort": false
            });
            $('.form-control-sm').addClass("input-data-search")
            $('.input-data-search').focus(); // input auto focus

            $('.js-example-basic-multiple').select2();

        });
        const delPermission = (id) => {
            // $('#delPermissionForm-'+id).submit()
        }


        $( function() {
            $( "#sortable" ).sortable({
                stop: function () {
                    const dataArr = []
                    const sorts = document.querySelectorAll('.ui-state-default')
                    for (let i = 0; i < sorts.length; i++) {
                        const element = sorts[i]
                        const parent_sign = element.getAttribute('id')
                        const sort_id = document.querySelector(`#${parent_sign} .order_sort_id`)
                        // const sort_id = document.querySelector(`#${parent_sign}`).getAttribute('data-sort-order-id')
                        const id = document.querySelector(`#${parent_sign} .id`).getAttribute('value')
                        const text = 1 + i
                        sort_id.innerText = text
                        const number = document.querySelector(`#${parent_sign} .number`)
                        number.innerText = text
                        const data = {sort_id: sort_id.innerText, id: id}
                        dataArr.push(data)
                    }
                    $.ajax({
                        url: "{{route('sortPermission')}}",
                        type: "POST",
                        data: {data: dataArr},
                        dataType: 'json',
                        success: function (data) {
                            console.log(data)
                            if(data.status == 200){
                                Toast.fire({
                                    icon: 'success',
                                    title: data.message
                                });
                            }else{
                                console.log(data)
                            }
                        }
                    })
                }
            });
        } );



    </script>
@endsection
