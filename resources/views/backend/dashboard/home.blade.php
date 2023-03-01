@extends('backend.layouts.app')
@section('title', 'Dashboard')
<style>
    .fs-80
    {
        font-size: 80px!important;
    }
</style>
@section('content')
    <div class="">
        <div class="d-flex justify-content-between">
            <h3>Dashboard</h3>
            <div>Welcome to <b>Fresh Moe</b> admin panel.</div>
        </div>
        <div>

            <div class="row g-2 mt-3">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="{{route('fruitList')}}" class="card radius text-decoration-none text-black animate__animated animate__fadeIn shadow-lg p-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('backend-assets/images/dashboard/f_v.png')}}" style="width: 79px !important;height: 79px !important;" alt="">
{{--                                <span class="theme_green_color material-symbols-outlined fs-80">local_florist</span>--}}
                            </div>
                            <div class="col-8">
                                <h4>Fruits & Vegetables</h4>
                                <h4>{{$fruitPrice}}</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="{{route('userList')}}" class="card radius text-decoration-none text-black animate__animated animate__fadeIn shadow-lg p-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('backend-assets/images/dashboard/user.png')}}" style="width: 79px !important;height: 79px !important;" alt="">
{{--                                <span class="theme_green_color material-symbols-outlined fs-80">person</span>--}}
                            </div>
                            <div class="col-8">
                                <h4>Register Users</h4>
                                <h4>{{$user_count}} </h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="{{route('contactMessageList')}}" class="card radius text-decoration-none text-black animate__animated animate__fadeIn shadow-lg p-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('backend-assets/images/dashboard/sms.png')}}" style="width: 79px !important;height: 79px !important;" alt="">
{{--                                <span class="theme_green_color material-symbols-outlined fs-80">mail</span>--}}
                            </div>
                            <div class="col-8">
                                <h4>Contact SMS</h4>
                                <h4>{{$contactSms}} </h4>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
@endsection
