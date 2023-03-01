@extends('backend.layouts.app')
@section('title', 'Country')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4 g-2">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg border-0">
                        <h5 class="card-title text-white">UPDATE COUNTRY </h5>
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

                        <form  action="{{route('updateCountry', $record->token)}}" method="POST">
                            @csrf
                            <div class="row ">
                                <div class="form-group my-1">
                                    <label class="my-1" for="">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name', $record->name)}}" />
                                </div>

                                <div  id="countryInput">
                                    <div class="form-group my-1" >
                                        <label class="my-2" for="">Country</label>
                                        <select  class="form-control js-example-basic-single" name="parent_id" value="{{old('parent_id', $record->parent_id)}}" >
                                            <option selected >Choose Country</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}" {{ $record->parent_id === $country->id ? 'selected' : null }}>{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group my-1">
                                    <label class="my-2" for="">Level</label>
                                    <select  class="form-control js-example-basic-single" name="level" id="level" value="{{old('level', $record->level)}}" >
                                        <option value="1" {{ $record->level === 1 ? 'selected' : null }}>Country</option>
                                        @if($countries->count() > 0)
                                            <option value="2" {{ $record->level === 2 ? 'selected' : null }}>City</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group my-1">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="my-2" for="">Latitude</label>
                                            <input type="text" class="form-control" name="lat" value="{{old('lat', $record->lat)}}" />
                                        </div>
                                        <div class="col-6">
                                            <label class="my-2" for="">Longitude</label>
                                            <input type="text" class="form-control" name="long" value="{{old('long', $record->long)}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Description" rows="2" name="description" >{{old('description', $record->description)}}</textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Notes" rows="2" name="note" >{{old('note', $record->note)}}</textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="submit" class="btn col-12 theme_bg text-white" value="UPDATE">
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
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();

            if($('#level').val() == 2) {
                $('#countryInput').show()
            }else {
                $('#countryInput').hide()
            }
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
