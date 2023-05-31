@extends('frontend.layouts.app')
@section('title', 'Change Password')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/profile.css')}}"/>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
@section('content')

    <div class="authenticated_bg">
        <div class="container py-5" style="margin-top: 140px !important;">
            <div class="row g-2">
                @include('frontend.layouts.user_sidebar')

                <div class="col-md-9 ms-md-auto">
                    <div class="animate__animated animate__fadeIn">
                        <div class="card-header form-header-border border-0 theme_bg ">
                            <h5 class="card-title text-white title-fm m-0"> {{ __('message.change_password') }}</h5>
                        </div>
                        <div class="card card-custom  border-0 card-body profile-info">
                            <form action="{{route('updatePassword')}}" method="POST">
                                @csrf
                                <div class="row">
                                    @if(session('forgot_bot') || old('forgot_bot'))
                                        <input type="hidden" name="forgot_bot" value="1">
                                    @else
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for=""
                                                       class="form-label">{{ __('message.old_password') }}</label>
                                                <input type="password"
                                                       class="form-control  @error('old_password') is-invalid @enderror"
                                                       name="old_password">
                                                @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">{{ __('message.new_password') }}</label>
                                            <input type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for=""
                                                   class="form-label">{{ __('message.confirm_password') }}</label>
                                            <input type="password"
                                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                                   name="password_confirmation">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="theme_bg_red" >{{ __('message.update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-script')
    <script>
        {{-------------------  logout -----------------}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#logout', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: '{{ __('message.logout_confirm') }}',
                showCancelButton: true,
                cancelButtonText: '{{ __('message.cancel_btn') }}',
                confirmButtonText: '{{ __('message.confirm_btn') }}',
                denyButtonText: `Don't save`,
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('hello')
                    $.ajax({
                        url: "{{ route('logout') }}",
                        type: "POST",
                        success: function () {
                            window.location.reload()
                        }
                    })
                }
            })

        })
    </script>
@endsection
