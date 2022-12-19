@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="">
        <div class="d-flex justify-content-between">
            <h3>Job</h3>
        </div>
        <div>

            <div class="row my-3 pb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Job List</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap text-center">
                                <thead>
                                    <th>No.</th>
                                    <th>Position</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ([1,2,3,4,5,6,7,8,9,0] as $one)
                                    <tr>
                                        <td>
                                            <div class="mt-2">1</div>
                                        </td>
                                        <td>
                                            <div class="mt-2">Accountand</div>
                                        </td>
                                        <td>
                                            <div class="mt-2">Fulltime</div>
                                        </td>
                                            <td>
                                            <a href="" class="btn btn-outline-info"><i class="fas fa-info-circle"></i> Details</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
