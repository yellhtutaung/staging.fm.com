@extends('backend.layouts.app')
@section('title', 'Country')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4 g-2">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg border-0">
                        <h5 class="card-title text-white">ADD COUNTRY </h5>
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

                        <form  action="{{route('createCountry')}}" method="POST">
                            @csrf
                            <div class="row ">
                                <div class="form-group my-1">
                                    <label class="my-1 form-label" for="">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" />
                                </div>

                                <div  id="countryInput">
                                    <div class="form-group my-1" >
                                        <label class="my-2 form-label" for="">Country</label>
                                        <select  class="form-control js-example-basic-single" name="parent_id" value="{{old('parent_id')}}" >
                                            <option selected >Choose Country</option>
                                            @foreach($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group my-1">
                                    <label class="my-2 form-label" for="">Level</label>
                                    <select  class="form-control js-example-basic-single" name="level" id="level" value="{{old('level')}}" >
                                        <option value="1">Country</option>
                                        @if($countries->count() > 0)
                                            <option value="2">City</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group my-1">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="my-2 form-label" for="">Latitude</label>
                                            <input type="text" class="form-control" name="lat" value="{{old('lat')}}" />
                                        </div>
                                        <div class="col-6">
                                            <label class="my-2 form-label" for="">Longitude</label>
                                            <input type="text" class="form-control" name="long" value="{{old('long')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Description" rows="2" name="description" >{{old('description')}}</textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Notes" rows="2" name="note" >{{old('note')}}</textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="submit" class="secondary-radius btn col-12 theme_bg text-white" value="ADD">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="linear-activity d-none">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
{{--            <div class="col-sm-12 col-md-8">--}}
{{--                @if(count($fruitPriceList) >= 1)--}}
{{--                    <div class="animate__animated animate__fadeIn">--}}
{{--                        <div class="card-header border-0 form-header-border theme_bg ">--}}
{{--                            <h5 class="card-title text-white">RECENT FRUITS</h5>--}}
{{--                        </div>--}}
{{--                        <div class="card table-responsive shadow-lg card-body border-0">--}}
{{--                            <table class="table table-responsive table-hover">--}}
{{--                                <thead>--}}
{{--                                <th>Fruit ID</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Picture</th>--}}
{{--                                <th>Unit</th>--}}
{{--                                <th>Price</th>--}}
{{--                                <th>Time</th>--}}
{{--                                <th>Edit</th>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($fruitPriceList as $Index => $fruits)--}}
{{--                                    <tr>--}}
{{--                                        <td><span class="badge bg-primary shadow-lg">{{$fruits->name_id}}</span></td>--}}
{{--                                        <td>{{$fruits->name}}</td>--}}
{{--                                        <td><img class="avator-rounded" src="{{asset("backend-assets/uploads/fruits/$fruits->id/$fruits->images")}}" alt="{{$fruits->name}}"></td>--}}
{{--                                        <td><span class="badge bg-danger shadow-lg">{{$fruits->depend_count ." ".$fruits->unit}}</span></td>--}}
{{--                                        <td><span class="badge bg-success shadow-lg">{{$fruits->price}} MMK</span></td>--}}
{{--                                        <td>{{$fruits->updated_at->diffForHumans()}}</td>--}}
{{--                                        <td>--}}
{{--                                            <a href="{{route('editFruit',$fruits->id)}}" class="rounded btn btn-info">--}}
{{--                                                <span class="material-symbols-outlined mt-2 text-white">edit</span>--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

@section('extra-script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('#countryInput').hide()
        });
        $('#file-action').click(function () {
            $('#file-input').click()
        })

        $('#level').on('change', function (e) {
            let value = e.target.value
            if(value == 2) {
                console.log(value)
                $('#countryInput').show('slow')
            }else {
                $('#countryInput').hide('slow')
            }
        })

    </script>
@endsection
