@extends('backend.layouts.app')
@section('title', 'Details')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border border-0 theme_bg ">
                        <h5 class="card-title text-white">Details of {{$fruit->name}}</h5>
                    </div>
                    <div class="card card-custom border-0 card-body profile-info">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="">
                                        <td class="py-3">Fruit ID</td>
                                        <td class="py-3"><span class="badge bg-primary shadow-lg">{{$fruit->name_id}}</span></td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Name</td>
                                        <td class="py-3">{{$fruit->name}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Price</td>
                                        <td class="py-3"><span class="badge bg-success shadow-lg">{{$fruit->price}} MMK</span></td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Uploader</td>
                                        <td class="py-3">{{$fruit->userInformation->name ?? '-'}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Updater</td>
                                        <td class="py-3">{{!is_null($fruit->upd_id) && $fruit->updaterInformation ? $fruit->updaterInformation->name :'-'}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-3">Is Ban</td>
                                        <td class="py-3">
                                            <div class="form-check form-switch p-0 m-0">
                                                <input data-id="{{$fruit->id}}" data-status-val="{{$fruit->hide_show}}" onchange="universalSwitch(2,{{$fruit->id}},'hide_show',{{$fruit->hide_show}});" class="toggle-class toggle-id{{$fruit->id}}" type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                       data-on="Show"  data-off="Hide" {{$fruit->hide_show==1?"checked":""}}>
                                            </div>
                                        </td>
                                    </tr>
{{--                                    <tr class="">--}}
{{--                                        <td class="py-3">Is Ban</td>--}}
{{--                                        <td class="py-3">--}}
{{--                                            <div class="form-check form-switch p-0 m-0">--}}
{{--                                                <input data-id="{{$account->id}}" data-status-val="{{$account->is_ban}}" onchange="universalSwitch(0,{{$account->id}},'is_ban',{{$account->is_ban}});"--}}
{{--                                                       class="toggle-class toggle-id{{$account->id}}" type="checkbox"--}}
{{--                                                       data-onstyle="danger" data-offstyle="success" data-toggle="toggle"--}}
{{--                                                       data-on="Ban"  data-off="Active" {{$account->is_ban==1?"checked":""}}>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-script')
    <script src="{{asset('backend-assets/js/universalSwitch.js')}}" ></script>
    <script>

    </script>
@endsection
