@extends('backend.layouts.app')
@section('title', 'Fruits')

@section('content')
    <div class="container-fluid ">

        <a href="{{route('addFruit')}}" class="btn theme_bg text-white my-3" >ADD +</a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> Fruits</h5>
        </div>
        <div class="card border-0 shadow-sm card-body animate__animated animate__fadeIn">
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
                    <th>History</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fruitPriceList as $Index => $fruits)
                    <tr>
                        <td>{{$Index+1}}</td>
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
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "pageLength": 100,
                responsive: true,
            });
            $('.form-control-sm').addClass("input-data-search")
            $('.input-data-search').focus(); // input auto focus

            $('.js-example-basic-multiple').select2();

        });
    </script>
@endsection
