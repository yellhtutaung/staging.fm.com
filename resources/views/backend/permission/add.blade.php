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
                        <h5 class="card-title text-white">ADD PERMISSION </h5>
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

                        <form  action="{{route('createPermission')}}" method="POST">
                            @csrf
                            <div class="row ">
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Note</label>
                                    <textarea class="form-control" name="notes"  rows="3">{{old('note')}}</textarea>
                                </div>
                                <div class="form-group my-1 d-flex">
                                    <div class="w-50">
                                        <div class="form-group my-2">
                                            <input class="form-check-input" id="account" type="checkbox"/>
                                            <label class="form-check-label ms-2" for="">Account</label>
                                            <div class="mt-2 ms-3 nested" id="account-permission">
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="account[list]" value="true" />
                                                    <label class="form-check-label ms-2" for="">List</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="account[add]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Add</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="account[edit]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Edit</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="account[hide_show]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Hide_show</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="account[details]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Details</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group my-2">
                                            <input class="form-check-input" id="user" type="checkbox"/>
                                            <label class="form-check-label ms-2" for="">User</label>
                                            <div class="mt-2 ms-3 nested" id="user-permission">
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="user[list]" value="true" />
                                                    <label class="form-check-label ms-2" for="">List</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="user[add]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Add</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="user[edit]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Edit</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="user[hide_show]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Hide_show</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="user[details]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Details</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group my-2">
                                            <input class="form-check-input" id="fruit" type="checkbox" />
                                            <label class="form-check-label ms-2" for="">Fruit</label>
                                            <div class="mt-2 ms-3 nested" id="fruit-permission">
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="fruit[list]" value="true" />
                                                    <label class="form-check-label ms-2" for="">List</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="fruit[add]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Add</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="fruit[edit]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Edit</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="fruit[hide_show]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Hide_show</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="fruit[details]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Details</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-50">
                                        <div class="form-group my-2">
                                            <input class="form-check-input" id="permission" type="checkbox" />
                                            <label class="form-check-label ms-2" for="">Permission</label>
                                            <div class="mt-2 ms-3 nested" id="permission-permission">
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="permission[list]" value="true" />
                                                    <label class="form-check-label ms-2" for="">List</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="permission[add]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Add</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="permission[edit]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Edit</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="permission[hide_show]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Hide_show</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="permission[details]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Details</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group my-2">
                                            <input class="form-check-input" id="country" type="checkbox" />
                                            <label class="form-check-label ms-2" for="">Country</label>
                                            <div class="mt-2 ms-3 nested" id="country-permission">
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="country[list]" value="true" />
                                                    <label class="form-check-label ms-2" for="">List</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="country[add]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Add</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="country[edit]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Edit</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="country[hide_show]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Hide_show</label>
                                                </div>
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" name="country[details]" value="true" />
                                                    <label class="form-check-label ms-2" for="">Details</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
