@extends('backend.layouts.app')
@section('title', 'Permission')
@section('extra-css')

@endsection
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4 g-2">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg border-0">
                        <h5 class="card-title text-white">ADD ROLE AND PERMISSION </h5>
                    </div>
                    <div class="card shadow-lg card-body border-0" >
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

                        <form id="form-upload" >
                            @csrf
                            <div class="row ">
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Role Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Manager" value="{{old('name')}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Note</label>
                                    <textarea class="form-control" name="notes"  rows="3">{{old('note')}}</textarea>
{{--                                    <hr class="text-muted mt-4">--}}
                                </div>
                                @php
                                    $permissionLabel = ['Account','User','Fruit','Permission','Country'];
                                    $permissionUrlPrefix = ['account','user','fruit','permission','country'];
                                @endphp
                                <label class="form-label my-2" >Permissions </label>
                                <div class="form-group  d-flex">
                                @foreach($permissionLabel as $index => $permissions)
                                        <div class="form-group m-2 p-2">
                                            <input type="checkbox" class="form-check-input" id="lb-check{{$permissionUrlPrefix[$index]}}"
                                                   name="permissions" value="{{$permissionUrlPrefix[$index]}}" />
                                            <label for="lb-check{{$permissionUrlPrefix[$index]}}" class="form-check-label ms-2">{{$permissionLabel[$index]}}</label>
                                            <div class="mt-2 ms-3 d-none" id="permission">
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" id="{{$permissionUrlPrefix[$index]}}-list" name="{{$permissionUrlPrefix[$index]}}[list]" value="true" />
                                                    <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-list">List</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" id="{{$permissionUrlPrefix[$index]}}-add" name="{{$permissionUrlPrefix[$index]}}[add]" value="true" />
                                                    <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-add">Add</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" id="{{$permissionUrlPrefix[$index]}}-edit" name="{{$permissionUrlPrefix[$index]}}[edit]" value="true" />
                                                    <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-edit">Edit</label>
                                                </div>
{{--                                                <div class="form-group my-2">--}}
{{--                                                    <input class="form-check-input" type="checkbox" id="{{$permissionUrlPrefix[$index]}}-hide_show" name="{{$permissionUrlPrefix[$index]}}[hide_show]" value="true" />--}}
{{--                                                    <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-hide_show">Hide_show</label>--}}
{{--                                                </div>--}}
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" id="{{$permissionUrlPrefix[$index]}}-details" name="{{$permissionUrlPrefix[$index]}}[details]" value="true" />
                                                    <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-details">Details</label>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                </div>
                                <div class="form-group mt-4">
                                    <input type="submit" class="btn col-12 theme_bg text-white" value="ADD">
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
    <script src="{{asset('backend-assets/js/permission_setup.js')}}"></script>
    <script>
        // action="{{route('createPermission')}}";
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $('#form-upload').submit(function(e){
            e.preventDefault();
            var arr = [];
            $.each($("input[name='permissions']:checked"), function(){
                arr.push($(this).val());
            });
            console.log(arr);
        });



    </script>
@endsection
