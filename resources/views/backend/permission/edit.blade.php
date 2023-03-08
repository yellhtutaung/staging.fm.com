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
                        <h5 class="card-title text-white">UPDATE ROLE AND PERMISSION </h5>
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

                        <form id="form-upload" >
                            @csrf
                            <div class="row ">
                                <div class="form-group my-1">
                                    <input type="hidden" class="upd-id" value="{{$permission->id}}" >
                                    <label class="my-1 form-label" for="name">Role Name</label>
                                    <input type="text" class="form-control name" id="name" name="name" placeholder="Example: Manager" value="{{$permission->name}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Note</label>
                                    <textarea class="form-control" id="notes" name="notes"  rows="3">{{$permission->notes}}</textarea>
                                    {{--                                    <hr class="text-muted mt-4">--}}
                                </div>
                                @php
                                    $permissionLabel = ['Account','User','Fruit','Country','Permission','Contact'];
                                    $permissionUrlPrefix = ['account','user','fruit','country','permission','contact'];
                                @endphp

                                <label class="form-label my-2" >Permissions</label>
                                <div class="form-group ">
                                    <div class="row g-2">
                                        @foreach($permissionLabel as $index => $permissions)
                                            <div class="form-group col-6 col-sm-4 col-lg-3">
                                                <input type="checkbox" class="form-check-input" onclick="checkBoxToggle('{{$permissionUrlPrefix[$index]}}');"
                                                       id="lb-check{{$permissionUrlPrefix[$index]}}" name="permissions" value="{{$permissionUrlPrefix[$index]}}" />
                                                <label for="lb-check{{$permissionUrlPrefix[$index]}}" class="form-check-label ms-2">{{$permissionLabel[$index]}}</label>

                                                <div class="mt-2 ms-3 d-none animate__animated animate__fadeIn p-d{{$permissionUrlPrefix[$index]}} " id="permission">
                                                    <div class="form-group my-2">
                                                        <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','list');"
                                                               id="{{$permissionUrlPrefix[$index]}}-list" />
                                                        <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-list">List</label>
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','add');"
                                                               id="{{$permissionUrlPrefix[$index]}}-add"  />
                                                        <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-add">Add</label>
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','create');"
                                                               id="{{$permissionUrlPrefix[$index]}}-create"  />
                                                        <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-create">Create</label>
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','edit');"
                                                               id="{{$permissionUrlPrefix[$index]}}-edit"  />
                                                        <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-edit">Edit</label>
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','update');"
                                                               id="{{$permissionUrlPrefix[$index]}}-update"  />
                                                        <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-update">Update</label>
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','details');"
                                                               id="{{$permissionUrlPrefix[$index]}}-details" />
                                                        <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-details">Details</label>
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','delete');"
                                                               id="{{$permissionUrlPrefix[$index]}}-delete" />
                                                        <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-delete">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn col-12 theme_bg text-white" id="submit-btn" >UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="linear-activity d-none" style="width: 96%!important; margin: -4px auto;">
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
        {{--// action="{{route('createPermission')}}";--}}
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        let permissionJson = <?php print_r($permission->guard_json); ?>;
        console.table(permissionJson);

        resArr = permissionJson;

        const recalibrateToInitial = (permissionJson) =>
        {
            permissionJson.map((permissionJson , index) => {
                let eachKey = Object.keys(permissionJson);
                $('.p-d'+eachKey[0]).removeClass('d-none'); // each parent
                $(`#lb-check${eachKey[0]}`).prop("checked",true);

                let eachObj = permissionJson[eachKey[0]];
                // console.log(eachObj);
                // console.log(eachKey[0]  +' - '+ eachObj['create']);
                $(`#${eachKey[0]}-list`).prop("checked",eachObj['list']=='false'?false:true); // each childs
                $(`#${eachKey[0]}-add`).prop("checked",eachObj['add']=='false'?false:true);
                $(`#${eachKey[0]}-create`).prop("checked",eachObj['create']=='false'?false:true);
                $(`#${eachKey[0]}-edit`).prop("checked",eachObj['edit']=='false'?false:true);
                $(`#${eachKey[0]}-update`).prop("checked",eachObj['update']=='false'?false:true);
                $(`#${eachKey[0]}-details`).prop("checked",eachObj['details']=='false'?false:true);
                $(`#${eachKey[0]}-delete`).prop("checked",eachObj['details']=='false'?false:true);
            });
        }
        recalibrateToInitial(permissionJson); // on

        const saveToServer = () =>
        {
            let roleName = $('.name').val();
            let notes = $('#notes').val();
            if(navigator.onLine)
            {
                // console.log(roleName);
                // console.log(resArr.length);
                if(resArr.length == 0 || roleName.length == 0 )
                {
                    Toast.fire({
                        icon: 'warning',
                        title: "Please select at least one permission"
                    });
                }else {
                    $('.linear-activity').removeClass('d-none');
                    $('#submit-btn').attr('disabled', '');
                    let formData = new FormData($('#form-upload')[0]);
                    let updId = $('.upd-id').val();
                    // console.log(resArr);
                    $.ajax({
                        _token: csrf_token,
                        type: "POST",
                        url: "{{route('createRoleAndPermissions')}}",
                        data: {name:roleName,notes:notes,permissionsJson:resArr,updId:updId},
                        dataType: 'json',
                        success: function (data) {
                            if (data.status == 200){
                                // $('input').val('');
                                // $('textarea').val('');
                                $('.linear-activity').addClass('d-none');
                                $('#submit-btn').removeAttr('disabled');
                                Toast.fire({
                                    icon: 'success',
                                    title: data.message
                                });
                                // placeToCheckBoxInitial();
                            }else {
                                $('.linear-activity').addClass('d-none');
                                $('#submit-btn').removeAttr('disabled');
                                Toast.fire({
                                    icon: 'warning',
                                    title: data.message
                                });
                                console.log(data);
                            }
                        },
                    });
                }
            }else {
                Toast.fire({
                    icon: 'warning',
                    title: "Check you are internet connection"
                });
            }
        }
    </script>
@endsection
