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
                <div class="col-lg-6 col-xl-3">
                    <div class="card animate__animated animate__fadeIn shadow-lg p-3">
                        <div class="row">
                            <div class="col-4">
                                <span class="theme_green_color material-symbols-outlined fs-80">local_florist</span>
                            </div>
                            <div class="col-8">
                                <h4>Fruits & Vegetables</h4>
                                <h4>{{$fruitPrice}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="card animate__animated animate__fadeIn shadow-lg p-3">
                        <div class="row">
                            <div class="col-4">
                                <span class="text-danger material-symbols-outlined fs-80">person</span>
                            </div>
                            <div class="col-8">
                                <h4>Register Users</h4>
                                <h4>{{$user_count}} </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="card animate__animated animate__fadeIn shadow-lg p-3">
                        <div class="row">
                            <div class="col-4">
                                <span class="material-symbols-outlined fs-80">mail</span>
                            </div>
                            <div class="col-8">
                                <h4>Contact SMS</h4>
                                <h4>{{$contactSms}} </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
