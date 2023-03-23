@extends('backend.layouts.app')
@section('title', 'Details')
@section('content')
    <div class="container-fluid ">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6">
                <div class="animate__animated animate__fadeIn">
                    <div class="card-header form-header-border border-0 theme_bg ">
                        <h5 class="card-title text-white">Permission Details</h5>
                    </div>
                    <div class="card card-custom border-0 shadow-sm card-body profile-info">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">

                                <tbody>
                                    @foreach(json_decode($permission->guard_json) as $permission_group)
                                        @foreach($permission_group as $perfix => $list)
                                                <tr class="">
                                                    <td class="py-3 "><span class="badge bg-dark">{{$perfix}}</span></td>
                                                    <td class="py-3 ">
                                                        @foreach($list as $permit => $bol)
                                                            @if($bol == 'true')
                                                                <span class="badge bg-danger">{{$permit}}</span>
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                        @endforeach
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
