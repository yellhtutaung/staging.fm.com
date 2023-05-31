@extends('backend.layouts.app')
@section('title', 'Contact Message')
@section('extra-css')
    <style>
        td{
            text-align: center;
        }
        th{
            text-align: center!important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid ">

{{--        <a href="{{route('addFruit')}}" class="btn theme_bg text-white my-3" >ADD +</a>--}}

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white">Contact Messages</h5>
        </div>
        <div class="card card-custom table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
{{--                    <th>Agent Info</th>--}}
                    <th>Date</th>
                    <th>Ago</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $Index => $record)
                    <tr>
                        <td>{{$Index+1}}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->email}}</td>
                        <td>{{substr($record->message,0,10)}} ...</td>
{{--                        <td>{{$record->agent_info}}</td>--}}
                        <td>{{$record->created_at->toDateString()}}</td>
                        <td>{{$record->created_at->diffForHumans()}}</td>
                        <td class="d-flex justify-content-center align-items-center ">
                            <a href="javascript:void(0)" onclick="viewMessage(`{{$record->message}}`)" class="secondary-radius btn theme_bg d-flex justify-content-center align-items-center w-50px-h50px ">
                                <span class="material-symbols-outlined text-white">visibility</span>
                            </a>
                        </td>
                        <td>
                            <a href="" class="secondary-radius btn theme_bg_red d-flex justify-content-center align-items-center w-50px-h50px ">
                                <span class="material-symbols-outlined text-white">Delete</span>
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
            $('.form-control-sm').addClass("input-data-search");
            $('.input-data-search').focus(); // input auto focus

            $('.js-example-basic-multiple').select2();
        });
        function viewMessage(message) {
            let msg = message.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            Swal.fire({
                title: 'Message',
                // icon: 'info',
                html: `<p class="lh-lg">${msg}</p>`,
                showCloseButton: false,
                showCancelButton: false,
                showConfirmButton: false,
                focusConfirm: false,
            })
        }

    </script>
@endsection
