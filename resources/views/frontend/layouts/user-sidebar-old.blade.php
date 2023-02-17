@extends('frontend.layouts.app')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/profile.css')}}"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @yield('extra')
@endsection

@section('content')
    <div class="authenticated_bg">
        <div class="container py-5" style="margin-top: 140px !important;" >

            <div class="row g-2">
                <div class="col-md-3 side-col">
                    <div class="card w-100 profile-card border-0 card-body animate__animated animate__fadeLeft">
                        <div class="text-center">
                            <div class="avatar avatar-xl mb-2">
                                {{--<img class="avatar-img rounded-circle border border-2 border-white" width="80" height="80" src="{{asset("frontend-assets/images/employee_profile_1.jpg")}}" alt="">--}}
                                <i class="fa-solid fa-circle-user"></i>
                            </div>
                            <h6 class="mb-0 name">{{$user->name}}</h6>
                            <a href="#" class="text-reset text-primary-hover small d-block d-md-none d-lg-block">{{$user->email}}</a>
                            <hr>
                        </div>
                        <ul class="nav nav-pills-primary-soft flex-column ">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('pricelist') ? 'active' : '' }}" href="{{route('priceList')}}"><i class="fa-solid fa-list me-2"></i><span>{{ __('message.price_list') }}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="{{route('profile')}}"><i class="fa fa-user me-2"></i><span>{{ __('message.my_profile') }}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('edit-profile') ? 'active' : '' }}" href="{{route('edit-profile')}}"><i class="fa-solid fa-pen-to-square me-2"></i><span>{{ __('message.edit_profile') }}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('change-password') ? 'active': ''}}" href="{{route('change-password')}}"><i class="fa-solid fa-lock me-2"></i><span class="d-inline d-md-none d-lg-inline">{{ __('message.change_password') }}</span><span class="d-none d-md-inline d-lg-none">{{ __('message.change_password') }}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)" id="logout">
                                    <i class="fa-solid fa-right-from-bracket me-2"></i><span>{{ __('message.logout') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 ms-md-auto">
                    @yield('sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection


@section('extra-script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    {{-- sweetalert --}}
{{--    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}


    <script>

        var $disabledResults = $(".js-example-disabled-results");
        $disabledResults.select2();



        {{--const Toast = Swal.mixin({--}}
        {{--    toast: true,--}}
        {{--    position: 'bottom-end',--}}
        {{--    showConfirmButton: false,--}}
        {{--    timer: 3000,--}}
        {{--    timerProgressBar: true,--}}
        {{--    didOpen: (toast) => {--}}
        {{--        toast.addEventListener('mouseenter', Swal.stopTimer)--}}
        {{--        toast.addEventListener('mouseleave', Swal.resumeTimer)--}}
        {{--    }--}}
        {{--})--}}

        {{--@if (session('create'))--}}
        {{--Toast.fire({--}}
        {{--    icon: 'success',--}}
        {{--    title: "{{ session('create') }}"--}}
        {{--})--}}
        {{--@endif--}}

        {{--@if (session('update'))--}}
        {{--Toast.fire({--}}
        {{--    icon: 'success',--}}
        {{--    title: "{{ session('update') }}"--}}
        {{--})--}}
        {{--@endif--}}

        {{--@if (session('delete'))--}}
        {{--Toast.fire({--}}
        {{--    icon: 'success',--}}
        {{--    title: "{{ session('delete') }}"--}}
        {{--})--}}
        {{--@endif--}}



        {{-------------------  logout -----------------}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#logout', function (e){
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


    //    ------------- Price List ----------------

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

    </script>


@endsection
