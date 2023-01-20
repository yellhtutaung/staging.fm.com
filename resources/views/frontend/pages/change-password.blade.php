@extends('frontend.layouts.user-sidebar')
@section('title', 'Change Password')
@section('sidebar')
    <div class="animate__animated animate__fadeIn">
        <div class="card-header form-header-border border-0 theme_bg ">
            <h5 class="card-title text-white"> {{ __('message.change_password') }}</h5>
        </div>
        <div class="card border-0 shadow-sm card-body profile-info">
            <form action="{{route('updatePassword')}}" method="POST">
                @csrf
                <div class="row">
                    @if(session('forgot_bot') || old('forgot_bot'))
                        <input type="hidden" name="forgot_bot" value="1">
                    @else
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">{{ __('message.old_password') }}</label>
                                <input type="password" class="form-control  @error('old_password') is-invalid @enderror" name="old_password">
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
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="" class="form-label">{{ __('message.confirm_password') }}</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button>{{ __('message.update') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
