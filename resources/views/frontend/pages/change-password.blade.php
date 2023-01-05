<?php echo View::make ('frontend.layouts.head'); ?>
<link rel="stylesheet" href="{{asset('frontend-assets/css/client/ourclients.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/client/featureplans.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/profile.css')}}"/>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/date-1.2.0/fc-4.2.1/r-2.4.0/sb-1.4.0/sl-1.5.0/datatables.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
    {{--.client_banner {--}}
    {{--    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{asset('frontend-assets/images/client_banner.jpg')}}");--}}
    {{--    margin-top: 140px;--}}
    {{--    display: flex;--}}
    {{--    justify-content: center;--}}
    {{--    align-items: center;--}}
    {{--    min-height: 100vh;--}}
    {{--    background-size: cover;--}}
    {{--    background-repeat: no-repeat;--}}
    {{--    background-position: center;--}}
    {{--}--}}
    {{--.nav-pills-primary-soft.flex-column .nav-item {--}}
    {{--    margin-bottom: 3px;--}}
    {{--    margin-right: 0;--}}
    {{--}--}}

    {{--.nav-pills-primary-soft .nav-item {--}}
    {{--    padding: 0 !important;--}}
    {{--    margin-right: 2px;--}}
    {{--    margin-left: 2px;--}}
    {{--    border-bottom: 0 !important;--}}
    {{--}--}}

    {{--.nav-pills-primary-soft .nav-link.active, .nav-pills-primary-soft .nav-link:hover {--}}
    {{--    color: green;--}}
    {{--    background-color: rgba(81, 67, 217, 0.1)--}}
    {{--}--}}

    {{--.nav-pills-primary-soft .nav-link {--}}
    {{--    padding: 0.5rem 0.8rem !important;--}}
    {{--    font-weight: 500;--}}
    {{--    border-radius: 0.5rem;--}}
    {{--    color: black;--}}
    {{--}--}}
    {{--a {--}}
    {{--    text-decoration: none;--}}
    {{--}--}}
    {{--.profile-card {--}}
    {{--    background-color: #f5f5f6;--}}
    {{--    border-radius: 15px !important;--}}
    {{--}--}}

</style>

</head>
<body>

{{--navbar layout start--}}
<?php echo View::make ('frontend.layouts.navbar'); ?>
{{--navbar layout end--}}

{{--profile --}}

<div class="container" style="margin-top: 190px !important;" >
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="animate__animated animate__fadeIn">
                <div class="card profile-card border-0 shadow-sm card-body">
                    <div class="text-center">
                        <!-- Avatar -->
                        <div class="avatar avatar-xl mb-2">
                            {{--                            <img class="avatar-img rounded-circle border border-2 border-white" width="80" height="80" src="{{asset("frontend-assets/images/employee_profile_1.jpg")}}" alt="">--}}
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <h6 class="mb-0">{{Auth::guard('web')->user()->name}}</h6>
                        <a href="#" class="text-reset text-primary-hover small">{{Auth::guard('web')->user()->email}}</a>
                        <hr>
                    </div>
                    <ul class="nav nav-pills-primary-soft flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="{{route('profile')}}"><i class="fa fa-user me-2"></i>My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('edit-profile') ? 'active' : '' }}" href="{{route('edit-profile')}}"><i class="fa-solid fa-pen-to-square me-2"></i>Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('change-password') ? 'active': ''}}" href="{{route('change-password')}}"><i class="fa-solid fa-lock me-2"></i>Change Password</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="animate__animated animate__fadeIn">
                <div class="card-header form-header-border border-0 theme_bg ">
                    <h5 class="card-title text-white"> Change Password</h5>
                </div>
                <div class="card border-0 shadow-sm card-body profile-info">
                    <form action="{{route('updatePassword')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Old Password</label>
                                    <input type="password" class="form-control  @error('old_password') is-invalid @enderror" name="old_password">
                                    @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">New Password</label>
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
                                    <label for="" class="form-label text-secondary">Confirm Password</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--footer --}}
<hr>
<div class="socials body-fm">
    <p class="text-center">Phone: 09123456798</p>
    <h5 class="text-center my-1">Follow Us</h5>
    <div class="d-flex justify-content-center my-1 mt-3">
        <a href="/" class="social_icon">
            <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a href="/" class="social_icon">
            <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="/" class="social_icon">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="/" class="social_icon">
            <i class="fa-brands fa-youtube"></i>
        </a>
        <a href="/" class="social_icon">
            <i class="fa-brands fa-linkedin"></i>
        </a>
    </div>

</div>

{{--footer end--}}


<?php echo View::make ('frontend.layouts.aos'); ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

</script>


<body/>
<html/>
