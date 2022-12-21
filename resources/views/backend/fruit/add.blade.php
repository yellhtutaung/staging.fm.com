@extends('backend.layouts.app')
@section('title', 'Fruits')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeIn">
                    <div class="card-header theme_bg ">
                        <h4 class="card-title text-white">Add Fruit</h4>
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
                            <div class="form-group my-2">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="my-2" for="">Count</label>
                                        <input type="number" class="form-control" value="" />
                                    </div>
                                    <div class="col-6">
                                        <label class="my-2" for="">Unit</label>
                                        <select  class="form-control js-example-basic-single" style="height: 1000px!important;" >
                                            <option value="Kg">Kg</option>
                                            <option value="Kyat Thar">Kyat Thar</option>
                                            <option value="Lbs">Lbs</option>
                                            <option value="Box">Box</option>
                                            <option value="Pcs">Pcs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <input type="text" class="btn col-12 theme_bg_red text-white" value="ADD">
                            </div>
                        </div>
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
        });
    </script>
@endsection
