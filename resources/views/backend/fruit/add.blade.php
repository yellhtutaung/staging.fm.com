@extends('backend.layouts.app')
@section('title', 'Fruits')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4 g-2">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg border-0">
                        <h5 class="card-title text-white">ADD FRUITS </h5>
                    </div>
                    <div class="card card-custom shadow-lg card-body border-0" >
                        @if(session('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <span><strong>Warning !</strong>  {{session('warning')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="alert alert-warning alert-dismissible d-none file-invalid-feedback" role="alert">
                            <span><strong>Warning !</strong>  Your upload image is invalid.</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <span><strong>Success !</strong>  {{session('success')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form  action="{{route('createFruit')}}" method="POST" enctype="multipart/form-data">
                            {{--                        <small class="text-center">click to upload the photo</small>--}}
                            @csrf
                            <div class="row ">
                                <div class="w-100 d-flex justify-content-center align-items-center  preview-img-container">
                                    <a href="javascript:void(0)" class="border-dashed text-black text-center w-100" id="file-action">
                                        <span class="upload-img-icon material-symbols-outlined">add_photo_alternate</span>
                                    </a>
                                </div>
                                <input type="file" class="form-control" name="images" hidden id="file-input" onchange="preview()"/>
                                <div class="form-group my-1">
                                    <label class="form-label my-1" for="">Fruit Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" />
                                </div>
                                <div class="form-group my-1">
                                    <label class="form-label my-1" for="">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{old('price')}}" />
                                </div>
                                <div class="form-group my-1">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label my-2" for="">Count</label>
                                            <input type="number" class="form-control" name="depend_count" value="{{old('depend_count')}}" />
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label my-2" for="">Unit</label>
                                            <select  class="form-control js-example-basic-single" name="unit" value="{{old('unit')}}" >
                                                <option value="Kg">Kg</option>
                                                <option value="Kyat Thar">Kyat Thar</option>
                                                <option value="Lbs">Lbs</option>
                                                <option value="Box">Box</option>
                                                <option value="Pcs">Pcs</option>
                                                <option value="Ton">Ton</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Description" rows="2" name="description" value="{{old('description')}}">Material Symbols are our newest icons consolidating over 2,500 glyphs in a single font file with a wide range of design variants.</textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Notes" rows="2" name="notes" value="{{old('notes')}}">Wide range of design variants.</textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="submit" class="btn col-12 secondary-radius theme_bg text-white" value="ADD">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="linear-activity d-none">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none">
                @if(count($fruitPriceList) >= 1)
                    <div class="animate__animated animate__fadeIn">
                        <div class="card-header border-0 form-header-border theme_bg ">
                            <h5 class="card-title text-white">RECENT FRUITS</h5>
                        </div>
                        <div class="card card-custom table-responsive shadow-lg card-body border-0">
                            <table class="table table-responsive table-hover">
                                <thead>
                                <th>Fruit ID</th>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Time</th>
                                <th>Edit</th>
                                </thead>
                                <tbody>
                                @foreach($fruitPriceList as $Index => $fruits)
                                    <tr>
                                        <td><span class="badge bg-primary shadow-lg">{{$fruits->name_id}}</span></td>
                                        <td>{{$fruits->name}}</td>
                                        <td><img class="avator-rounded" src="{{asset("backend-assets/uploads/fruits/$fruits->id/$fruits->images")}}" alt="{{$fruits->name}}"></td>
                                        <td><span class="badge bg-danger shadow-lg">{{$fruits->depend_count ." ".$fruits->unit}}</span></td>
                                        <td><span class="badge bg-success shadow-lg">{{$fruits->price}} MMK</span></td>
                                        <td>{{$fruits->updated_at->diffForHumans()}}</td>
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
                @endif
            </div>
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
