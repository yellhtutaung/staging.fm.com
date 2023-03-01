@extends('backend.layouts.app')
@section('title', 'Fruits')
@section('extra-css')
@endsection
@section('content')
    <div class="container-fluid ">

        <a href="{{route('fruitList')}}" class="btn theme_bg text-white my-3" >BACK</a>

        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> Fruits Price List Transitions</h5>
        </div>
        <div class="card card-custom table-responsive border-0 shadow-sm card-body animate__animated animate__fadeIn">
            <table id="example" class="table table-responsive table-hover table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Fruit ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Depend Count</th>
                    <th>Updater</th>
                    <th>Timestamp</th>
                    <th>Updated Time</th>
                    <th>Hide | Show</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fruit_transitions as $Index => $fruit_transition)
                    <tr>
                        <td>{{$Index+1}}</td>
                        <td><span class="badge bg-primary shadow-lg">{{$fruit_transition->fruit->name_id}}</span></td>
                        <td>{{$fruit_transition->fruit->name}}</td>
                        <td><span class="badge bg-success shadow-lg">{{$fruit_transition->price}} MMK</span></td>
                        <td><span class="badge bg-danger shadow-lg">{{$fruit_transition->depend_count ." ".$fruit_transition->unit}}</span></td>
                        <td>{{ $fruit_transition->fruit->updaterInformation->name }}</td>
                        <td>{{$fruit_transition->created_at}}</td>
                        <td>{{$fruit_transition->updated_at->diffForHumans()}}</td>
                        <td>
                            <div class="form-check form-switch p-0 m-0">
                                <input data-id="{{$fruit_transition->id}}" onchange="universalSwitch(3,{{$fruit_transition->id}},'hide_show',{{$fruit_transition->hide_show}});" class="toggle-class toggle-id{{$fruit_transition->id}}" type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                       data-on="Show"  data-off="Hide" {{$fruit_transition->hide_show==1?"checked":""}}>
                            </div>
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
            });
            $('.form-control-sm').addClass("input-data-search")
            $('.input-data-search').focus(); // input auto focus

            $('.js-example-basic-multiple').select2();
        });

        let universalSwitch = (Index,findId,field,on_off) =>
        {
            on_off = on_off==1?0:1;
            console.log(on_off); // flip to data
            let data_obj = {Index:Index,findId:findId,field:field,on_off:on_off}
            $.post("{{route("adminUniversalSwitch")}}",
                {
                    "_token":csrf_token,
                    "data_obj": data_obj,
                },
                function(data){
                    if(data.status == 200)
                    {
                        $('.toggle-id'+findId).attr("onchange",`universalSwitch(3,${findId},'hide_show',${on_off})`);
                    }
                    console.log(data);
                });
        }

    </script>
@endsection
