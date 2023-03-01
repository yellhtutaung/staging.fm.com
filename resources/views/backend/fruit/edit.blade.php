@extends('backend.layouts.app')
@section('title', 'Fruits')
@section('content')
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg ">
                        <h5 class="card-title text-white">UPDATE FRUIT </h5>
                    </div>
                    <div class=" card card-custom card-body">
                        @if(session('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <span><strong>Warning !</strong>  {{session('warning')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span><strong>Success !</strong>  {{session('success')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form  action="{{route('updateFruit', $fruit->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <div class="w-100 d-flex justify-content-center align-items-center  preview-img-container">
                                    <a href="javascript:void(0)" class="border-dashed text-black text-center w-100" id="file-action">
{{--                                        <span class="upload-img-icon material-symbols-outlined">add_photo_alternate</span>--}}
                                        <img class="preview-img" src='{{asset("backend-assets/uploads/fruits/$fruit->id/".$fruit->images)}}' alt="">
                                    </a>
                                </div>
                                <input type="file" class="form-control" name="images" hidden id="file-input" onchange="preview()"/>
                                <div class="form-group my-1">
                                    <label class="my-1" for="">Fruit Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name', $fruit->name)}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="my-1" for="">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{old('price', $fruit->price)}}" />
                                </div>
                                <div class="form-group my-1">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="my-2" for="">Count</label>
                                            <input type="number" class="form-control" name="depend_count" value="{{old('depend_count', $fruit->depend_count)}}" />
                                        </div>
                                        <div class="col-6">
                                            <label class="my-2" for="">Unit</label>
                                            <select  class="form-control js-example-basic-single" name="unit" value="" >
                                                <option {{ $fruit->unit == 'Kg' ? 'selected' : '' }} value="Kg">Kg</option>
                                                <option {{ $fruit->unit == 'Kyat Thar' ? 'selected' : '' }} value="Kyat Thar">Kyat Thar</option>
                                                <option {{ $fruit->unit == 'Lbs' ? 'selected' : '' }} value="Lbs">Lbs</option>
                                                <option {{ $fruit->unit == 'Box' ? 'selected' : '' }} value="Box">Box</option>
                                                <option {{ $fruit->unit == 'Pcs' ? 'selected' : '' }} value="Pcs">Pcs</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Description" rows="2" name="description" value="{{old('description')}}">{{$fruit->description}}</textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Notes" rows="2" name="notes" value="{{old('notes')}}">{{$fruit->notes}}</textarea>
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
{{--            <div class="col-sm-12 col-md-8">--}}
{{--                <div class="animate__animated animate__fadeIn">--}}
{{--                    <div class="card-header form-header-border theme_bg ">--}}
{{--                        <h5 class="card-title text-white">RECENT FRUITS</h5>--}}
{{--                    </div>--}}
{{--                    <div class="card card-body">--}}
{{--                        <table class="table table-responsive table-hover">--}}
{{--                            <thead>--}}
{{--                            <th>No</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Picture</th>--}}
{{--                            <th>Price</th>--}}
{{--                            <th>Depend Count</th>--}}
{{--                            <th>Unit</th>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>1</td>--}}
{{--                                <td>Apple</td>--}}
{{--                                <td><img class="avator-rounded" src="https://testing-admin.freshmoe.shop/storage/images/W2askzfNzXxw8BERNFmT39ljCRvXenkDpsW41oOU.png" alt=""></td>--}}
{{--                                <td>4500</td>--}}
{{--                                <td>100</td>--}}
{{--                                <td>Box</td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

@section('extra-script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        $('#file-action').click(function () {
            $('#file-input').click()
        })
    </script>
@endsection
