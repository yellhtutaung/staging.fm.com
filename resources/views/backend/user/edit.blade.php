@extends('backend.layouts.app')
@section('title', 'Fruits')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg ">
                        <h5 class="card-title text-white">UPDATE USER </h5>
                    </div>
                    <div class=" card card-custom card-body">
                        @if(session('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <span><strong>Warning !</strong>  {{session('warning')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span><strong>Success !</strong>  {{session('success')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form  action="{{route('updateUser')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <input type="hidden" name="userId" value="{{$fetchUser->id}}">
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Name</label>
                                    <input type="text" readonly class="form-control" name="name" value="{{old('name',$fetchUser->name)}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{old('username',$fetchUser->username)}}" />
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
        $('#file-action').click(function () {
            $('#file-input').click()
        })
    </script>
@endsection
