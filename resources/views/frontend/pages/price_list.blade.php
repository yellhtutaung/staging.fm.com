@extends('frontend.layouts.app')
@section('title', 'Price List')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/profile.css')}}"/>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
            src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/date-1.2.0/fc-4.2.1/r-2.4.0/sb-1.4.0/sl-1.5.0/datatables.min.js"></script>

@endsection
@section('content')

    <div class="authenticated_bg">
        <div class="container py-5" style="margin-top: 140px !important;">
            <div class="row g-2">
                @include('frontend.layouts.user_sidebar')

                <div class="col-md-9 ms-md-auto">
                    <div class="price-list">
                        <div class="animate__animated animate__fadeIn">
                            <div class="card-header form-header-border border-0 theme_bg ">
                                <h5 class="card-title text-white m-0 title-fm">{{ __('message.realtime_price_list') }}</h5>
                            </div>
                            <div class="card card-custom table-responsive border-0  card-body">
                                <table id="example" class="table table-responsive table-hover table-striped"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Fruit ID</th>
                                        <th>Name</th>
                                        <th>Picture</th>
                                        <th>Unit</th>
                                        <th>Price</th>
                                        <th>Updated Time</th>
                                        <th>History</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fruitPriceList as $Index => $fruits)
                                        <tr>
                                            <td>{{$fruits->name_id}}</td>
                                            <td>{{$fruits->name}}</td>
                                            <td><img class="avator-rounded"
                                                     src="{{asset("backend-assets/uploads/fruits/$fruits->id/$fruits->images")}}"
                                                     alt="{{$fruits->name}}"></td>
                                            <td><span
                                                    class="badge theme_bg_red shadow-lg">{{$fruits->depend_count ." ".$fruits->unit}}</span>
                                            </td>
                                            <td><span class="badge bg-success shadow-lg">{{$fruits->price}} MMK</span>
                                            </td>
                                            <td>{{$fruits->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{route('priceListHistory',$fruits->token)}}"
                                                   class="secondary-radius text-decoration-none text-light btn theme_bg">
                                                    <span class="material-symbols-outlined">history</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


        let language = {
            mm: [
                'Home ',
                'About ',
            ],
            en: [
                'မူရင်းစာမျက်နှာ ',
                'အကြောင်း ',
            ]
        }
        let lenStr = 'mm';
        console.log(language[lenStr][0])


        {{-------------------  logout -----------------}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#logout', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: '{{ __('message.logout_confirm') }}',
                showCancelButton: true,
                cancelButtonText: '{{ __('message.cancel_btn') }}',
                confirmButtonText: '{{ __('message.confirm_btn') }}',
                denyButtonText: `Don't save`,
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('hello')
                    $.ajax({
                        url: "{{ route('logout') }}",
                        type: "POST",
                        success: function () {
                            window.location.reload()
                        }
                    })
                }
            })

        })
    </script>
@endsection
