@extends('layouts.app')

@section('content')
<div class="login-form-container">
    <div class="col-lg-4 col-xl-3 mx-auto mb-1">
        <div class="d-flex justify-content-center align-items-center">
            <img class="logo-img" src="{{asset('freshmoe_logo.png')}}" alt="">
        </div>
        <div class="card mt-3">
            <div class="card-header theme_bg py-3">
                <div class="text text-white">Sign in to Admin Panel</div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.login')}}" method="post">
                    @csrf
                    <div class="form-group my-2 p-3">
                        <input type="email" name="email" id="" class="form-control p-2" placeholder="Email">
                        @error('email')
                        <div class="text-danger mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2 p-3">
                        <input type="password" name="password" id="" class="form-control p-2 " placeholder="Password">
                        @error('password')
                        <div class="text-danger mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    <div class=" d-flex justify-content-end my-3 ">
                        <button class="text-white w-100 mx-3 btn theme_bg_red"><i class="fa-solid text-white fa-right-to-bracket"></i> Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
