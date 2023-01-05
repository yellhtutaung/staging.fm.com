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


</style>

</head>
<body>

{{--navbar layout start--}}
<?php echo View::make ('frontend.layouts.navbar'); ?>
{{--navbar layout end--}}

{{--profile --}}

<div class="container py-5" style="margin-top: 190px !important;" >
    {{--    <div class="main_title">--}}
    {{--        <h3 class="text-black title-fm">Realtime price list of FreshMoe</h3>--}}
    {{--        <span class="main_title_underline bg-dark"></span>--}}
    {{--    </div>--}}
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="animate__animated animate__fadeIn">
                {{--                <div class="card-header form-header-border border-0 theme_bg ">--}}
                {{--                    <h5 class="card-title text-white"> Fruits</h5>--}}
                {{--                </div>--}}
                <div class="card profile-card border-0 shadow-sm card-body">
                    <div class="text-center">
                        <!-- Avatar -->
                        <div class="avatar avatar-xl mb-2">
                            {{--                            <img class="avatar-img rounded-circle border border-2 border-white" width="80" height="80" src="{{asset("frontend-assets/images/employee_profile_1.jpg")}}" alt="">--}}
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <h6 class="mb-0">{{$user->name}}</h6>
                        <a href="#" class="text-reset text-primary-hover small">{{$user->email}}</a>
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
                    <h5 class="card-title text-white"> Personal Information</h5>
                </div>
                <div class="card border-0 shadow-sm card-body profile-info">
                    <form action="{{route('update-profile')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Full Name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{old('name', $user->name)}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $user->email)}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Phone Number</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone', $user->phone)}}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name" value="{{old('shop_name', $user->shop_name)}}">
                                    @error('shop_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Country</label>
{{--                                    <input type="text" class="form-control" name="country" value="Myanmar">--}}
                                    <select  class="form-control js-example-basic-single @error('country_id') is-invalid @enderror" name="country_id" >
                                        <option value="1">Myanmar</option>
                                    </select>
                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">City</label>
{{--                                    <input type="text" class="form-control" name="city" value="Yangon">--}}
                                    <select  class="form-control js-example-basic-single @error('city_id') is-invalid @enderror" name="city_id" >
                                        <option value="1">Yangon</option>
                                    </select>
                                    @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Postal Code</label>
                                    <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{old('postal_code', $user->postal_code)}}">
                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Zip Code</label>
                                    <input type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{old('zip_code', $user->zip_code)}}">
                                    @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label text-secondary">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" cols="30" rows="5">{{old('address', $user->address)}}</textarea>
                                    @error('address')
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
    // $(document).ready(function() {
    //     $('.js-example-basic-single').select2();
    // });
    // $('#file-action').click(function () {
    //     $('#file-input').click()
    // })
    // $('select').select2({
    //     minimumResultsForSearch: -1
    // });
</script>


<body/>
<html/>
