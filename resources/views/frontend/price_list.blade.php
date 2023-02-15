@extends('frontend.layouts.user-sidebar')
@section('title', 'Fresh Moe')
@section('extra')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/date-1.2.0/fc-4.2.1/r-2.4.0/sb-1.4.0/sl-1.5.0/datatables.min.js"></script>

@endsection
@section('sidebar')
    <div class="price-list">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border border-0 theme_bg ">
                        <h5 class="card-title text-white">{{ __('message.realtime_price_list') }}</h5>
                    </div>
                    <div class="card table-responsive border-0  card-body">
                        <table id="example" class="table table-responsive table-hover table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>Fruit ID</th>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Updated Time</th>
                                <th>History</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fruitPriceList as $Index => $fruits)
                                <tr>
                                    <td>{{$fruits->name_id}}</td>
                                    <td>{{$fruits->name}}</td>
                                    <td><img class="avator-rounded" src="{{asset("backend-assets/uploads/fruits/$fruits->id/$fruits->images")}}" alt="{{$fruits->name}}"></td>
                                    <td><span class="badge bg-danger shadow-lg">{{$fruits->depend_count ." ".$fruits->unit}}</span></td>
                                    <td><span class="badge bg-success shadow-lg">{{$fruits->price}} MMK</span></td>
                                    <td>{{$fruits->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{route('priceListHistory',$fruits->token)}}" class="rounded text-decoration-none text-light btn theme_bg">
                                            <span class="material-symbols-outlined">history</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
    </div>

@endsection

@section('extra_scripts')
    <script>


    </script>

@endsection

