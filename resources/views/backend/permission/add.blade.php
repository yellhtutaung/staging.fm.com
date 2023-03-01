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
{{--                                                <div class="form-group my-2">--}}
{{--                                                    <input class="form-check-input" type="checkbox" id="{{$permissionUrlPrefix[$index]}}-hide_show" name="{{$permissionUrlPrefix[$index]}}[hide_show]" />--}}
{{--                                                    <label class="form-check-label ms-2" for="{{$permissionUrlPrefix[$index]}}-hide_show">Hide_show</label>--}}
{{--                                                </div>--}}
                                                <div class="form-group my-2">
                                                    <input class="form-check-input" type="checkbox" onclick="subToggle('{{$permissionUrlPrefix[$index]}}','details');"
                                                           id="{{$permissionUrlPrefix[$index]}}-details" />
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

        let resArr = [];
        let checkArr = [];

        const checkIsExitObj = (selectedField) =>
        {
            if(resArr.length == 0)
            {
                return true;
            }else {
                console.log('check __________________')
                let responseArr = [];
                for(let i=0; i<resArr.length; i++)
                {
                    let eachKey = resArr[i];
                    return eachKey;
                    console.log(eachKey);
                    console.log('each key .........')
                }
                console.log(resArr);
                console.log('end check __________________')

            }
        }

        const recalibrateChecked = () =>
        {
            for(let i=0; i<resArr.length; i++)
            {
                let index = resArr[i];
            }
        }

        const checkBoxFun = async () =>
        {
            let selectedArr = new Array();
            let checked = $("input[name=permissions]:checked");
            // let subCheck
            for (let i = 0; i < checked.length; i++) {
                if (checked[i].checked) {
                    selectedArr.push(checked[i].value);
                }
            }
            console.log(selectedArr);
            resArr = [];

            for(let o=0; o<selectedArr.length; o++)
            {
                {{--$('#{{$permissionUrlPrefix[$index]}}-edit')--}}
                let field = selectedArr[o];
                let checkListVal = $(`#${field}-list`).is(':checked');
                let checkAddVal = $(`#${field}-add`).is(':checked');
                let checkCreateVal = $(`#${field}-create`).is(':checked');
                let checkEditVal = $(`#${field}-edit`).is(':checked');
                let checkDetailsVal = $(`#${field}-details`).is(':checked');

                let sampleObj = {[field]:{"list":checkListVal,"add":checkAddVal,"create":checkCreateVal,"edit":checkEditVal,"hide_show":false,"details":checkDetailsVal}};
                // $(`#${selectedArr[o]}-list`).prop("checked",false);
                // $(`#${selectedArr[o]}-add`).prop("checked",false);
                // $(`#${selectedArr[o]}-edit`).prop("checked",false);
                // $(`#${selectedArr[o]}-details`).prop("checked",false);
                // console.log(await checkIsExitObj(selectedArr[o]));

                    resArr.push(sampleObj);

            }
            console.table(resArr);
            checkAllSubCheckBox();
            console.log('****************************************');
        }

        const checkBoxToggle = (urlVal) =>
        {
            checkBoxFun();
            let eachCheckBox = $('#lb-check'+urlVal);
            if(eachCheckBox.is(':checked'))
            {
                $('.p-d'+urlVal).removeClass('d-none');
            }else {
                $('.p-d'+urlVal).addClass('d-none');
            }
        }

        $('#form-upload').submit(function(e)
        {
            e.preventDefault();
            checkBoxFun();
        });

        const subToggle = (subUrl,field) =>
        {
            // console.log(subUrl,field);
            // console.log(resArr);
            for(let i=0; i<resArr.length; i++)
            {
                let index = resArr[i];
                let getEachIndex = index[subUrl];
                if(getEachIndex != undefined)
                {
                    let presentChecked = $(`#${subUrl}-${field}`);
                    getEachIndex[field] = presentChecked.is(':checked');
                }
            }
            console.log(resArr);
        }

        const checkAllSubCheckBox = () =>
        {
            resArr.map((eachPermission , index) => {
                let eachKey = Object.keys(eachPermission);
                if($(`#${eachKey[0]}-list`).is(':checked'))
                {
                    $(`#${eachKey[0]}-list`).val();
                }
            });
        }

    </script>
@endsection
