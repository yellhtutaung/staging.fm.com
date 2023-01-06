@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="">
        <div class="d-flex justify-content-between">
            <h3>Dashboard</h3>
            <div>Welcome to <b>Fresh Moe</b> admin panel.</div>
        </div>
        <div>

            <div class="row g-2 mt-3">
                <div class="col-lg-6 col-xl-4">
                    <div class="info-box">
                        <span class="icon-container"><i class="fa-solid fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text dashboard_box_text mb-2">Users</span>
                            <span class="info-box-number dashboard_box_text-small">{{$user_count}}</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4">
                    <div class="info-box">
                        <span class="icon-container"><i class="fa-solid fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text dashboard_box_text mb-2">Today New Users</span>
                            <span class="info-box-number dashboard_box_text-small">0</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4">
                    <div class="info-box">
                        <span class="icon-container"><i class="fas fa-shopping-basket"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text dashboard_box_text mb-2">Today Sales Amount</span>
                            <span class="info-box-number dashboard_box_text-small">0 /ks</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
