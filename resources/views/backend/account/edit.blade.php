@extends('backend.layouts.app')
@section('title', 'Account')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4 g-2">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg border-0">
                        <h5 class="card-title text-white">UPDATE ACCOUNT </h5>
                    </div>
                    <div class="card card-custom shadow-lg card-body border-0" >
                        @if(session('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <span><strong>Warning !</strong>  {{session('warning')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <span><strong>Success !</strong>  {{session('success')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form  action="{{route('updateAccount', $account->token)}}" method="POST">
                            @csrf
                            <div class="row ">
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name', $account->name)}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-2 form-label" for="">Role</label>
                                    <select  class="form-control js-example-basic-single" name="role" id="role" value="{{old('role')}}" >
                                        @foreach($roles as $role)
                                            @if( Auth::guard('admin')->user()->roleInfo->order_sort_id < $role->order_sort_id )
                                                <option value="{{$role->id}}" {{ old('role', $account->role) == $role->id ? 'selected': '' }}>{{$role->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Phone</label>
                                    <input type="number" class="form-control" name="phone" value="{{old('phone', $account->phone)}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{old('email', $account->email)}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{old('password')}}"/>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="submit" class="btn col-12 theme_bg text-white" value="UPDATE">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="linear-activity d-none">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
