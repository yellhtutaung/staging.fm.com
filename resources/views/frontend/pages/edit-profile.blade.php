@extends('frontend.layouts.user-sidebar')
@section('title', 'Update Profile')
@section('sidebar')
    <div class="animate__animated animate__fadeIn">
        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white">Update Profile</h5>
        </div>
        <div class="card border-0 shadow-sm card-body profile-info">
            <form action="{{route('update-profile')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Full Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{old('name', $user->name)}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $user->email)}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone', $user->phone)}}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Shop Name</label>
                            <input type="text" class="form-control" name="shop_name" value="{{old('shop_name', $user->shop_name)}}">
                            @error('shop_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Country</label>
                            {{--                                    <input type="text" class="form-control" name="country" value="Myanmar">--}}
                            <select  class="form-control js-example-basic-single @error('country_id') is-invalid @enderror" name="country_id" >
                                <option value="1">Myanmar</option>
                            </select>
                            @error('country_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">City</label>
                            {{--                                    <input type="text" class="form-control" name="city" value="Yangon">--}}
                            <select  class="form-control js-example-basic-single @error('city_id') is-invalid @enderror" name="city_id" >
                                <option value="1">Yangon</option>
                            </select>
                            @error('city_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Postal Code</label>
                            <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{old('postal_code', $user->postal_code)}}">
                            @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Zip Code</label>
                            <input type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{old('zip_code', $user->zip_code)}}">
                            @error('zip_code')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="" class="form-label text-secondary">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" cols="30" rows="5">{{old('address', $user->address)}}</textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
