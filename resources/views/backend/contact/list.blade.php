@extends('backend.layouts.app')
@section('title', 'Contact Message')
@section('extra-css')
@endsection
@section('content')
    <div class="container-fluid ">

{{--        <a href="{{route('addFruit')}}" class="btn theme_bg text-white my-3" >ADD +</a>--}}

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white">Contact Messages</h5>
        </div>
        <div class="card table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
{{--                    <th>Agent Info</th>--}}
                    <th>Timestamp</th>
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
                        <td>{{$record->created_at}}</td>
                        <td>
                            <a href="javascript:void(0)" onclick="viewMessage(`{{$record->message}}`)" class="rounded btn btn-dark">
                                <span class="material-symbols-outlined mt-2 text-white">visibility</span>
                            </a>
                        </td>
                        <td>
                            <a href="" class="rounded btn btn-danger">
                                <span class="material-symbols-outlined mt-2 text-white">Delete</span>
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


            Swal.fire({
                title: 'Message',
                icon: 'info',
                html: `<p class="lh-lg">${message}</p>`,
                showCloseButton: false,
                showCancelButton: false,
                showConfirmButton: false,
                focusConfirm: false,
            })


        }

    </script>
@endsection
