@extends('backend.layouts.app')
@section('title', 'Fruits')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card animate__animated animate__fadeIn">
                    <div class="card-header form-header-border theme_bg ">
                        <h4 class="card-title text-white">ADD FRUIT</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group my-1">
                                <label class="my-1" for="">Fruit Name</label>
                                <input type="text" class="form-control" value="" />
                            </div>
                            <div class="form-group my-1">
                                <label class="my-1" for="">Price</label>
                                <input type="text" class="form-control" value="" />
                            </div>
                            <div class="form-group my-1">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="my-2" for="">Count</label>
                                        <input type="number" class="form-control" value="" />
                                    </div>
                                    <div class="col-6">
                                        <label class="my-2" for="">Unit</label>
                                        <select  class="form-control js-example-basic-single" style="height: 70px!important;" >
                                            <option value="Kg">Kg</option>
                                            <option value="Kyat Thar">Kyat Thar</option>
                                            <option value="Lbs">Lbs</option>
                                            <option value="Box">Box</option>
                                            <option value="Pcs">Pcs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea name="" id="" class="form-control" placeholder="Description" rows="4"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <textarea name="" id="" class="form-control" placeholder="Notes" rows="4"></textarea>
                            </div>

                            <div class="form-group mt-4">
                                <input type="text" class="btn col-12 theme_bg text-white" value="ADD">
                            </div>
                        </div>
                    </div>
                    <div class="linear-activity d-none">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">

            </div>
    </div>
@endsection

@section('extra-script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
