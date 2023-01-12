@extends('backend.layouts.app')
@section('title', 'Fruits')
@section('extra-css')
@endsection
@section('content')
    <div class="container-fluid ">

        <a href="{{route('addFruit')}}" class="btn theme_bg text-white my-3" >ADD +</a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> Fruits</h5>
        </div>
        <div class="card table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Fruit ID</th>
                    <th>Name</th>
                    <th>Picture</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Uploader</th>
                    <th>Timestamp</th>
                    <th>Updater</th>
                    <th>Updated Time</th>
                    <th>Hide | Show</th>
                    <th>History</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fruitPriceList as $Index => $fruits)
                    <tr>
                        <td>{{$Index+1}}4</td>
                        <td><span class="badge bg-primary shadow-lg">{{$fruits->name_id}}</span></td>
                        <td>{{$fruits->name}}</td>
                        <td><img class="avator-rounded" src="{{asset("backend-assets/uploads/fruits/$fruits->id/$fruits->images")}}" alt="{{$fruits->name}}"></td>
                        <td><span class="badge bg-danger shadow-lg">{{$fruits->depend_count ." ".$fruits->unit}}</span></td>
                        <td><span class="badge bg-success shadow-lg">{{$fruits->price}} MMK</span></td>
                        <td>{{$fruits->userInformation->name}}</td>
                        <td>{{$fruits->created_at}}</td>
                        <td>{{!is_null($fruits->upd_id)?$fruits->updaterInformation->name:''}}</td>
                        <td>{{$fruits->updated_at->diffForHumans()}}</td>
                        <td>
                            <div class="form-check form-switch p-0 m-0">
                                <input data-id="{{$fruits->id}}" data-status-val="{{$fruits->hide_show}}" onchange="universalSwitch(2,{{$fruits->id}},'hide_show',{{$fruits->hide_show}});" class="toggle-class toggle-id{{$fruits->id}}" type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                       data-on="Show"  data-off="Hide" {{$fruits->hide_show==1?"checked":""}}>
                            </div>
                        </td>
                        <td>
                            <a href="{{route('priceListHistory',$fruits->token)}}" class="rounded btn theme_bg text-white">
                                <span class="material-symbols-outlined p-1">history</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('editFruit',$fruits->id)}}" class="rounded btn btn-info">
                                <span class="material-symbols-outlined mt-2 text-white">edit</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

@section('extra-script')
    <script src="{{asset('backend-assets/js/universalSwitch.js')}}" ></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "pageLength": 100,
            });
            $('.form-control-sm').addClass("input-data-search");
            $('.input-data-search').focus(); // input auto focus

            $('.js-example-basic-multiple').select2();
        });

    </script>
@endsection
