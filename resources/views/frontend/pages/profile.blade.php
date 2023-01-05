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
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr class="">
                                    <td class="py-3">Full Name</td>
                                    <td class="py-3">{{$user->name}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">Email</td>
                                    <td class="py-3">{{$user->email}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">Phone Number</td>
                                    <td class="py-3">{{$user->phone}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">Shop Name</td>
                                    <td class="py-3">{{$user->shop_name}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">Country</td>
                                    <td class="py-3">Myanmar</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">City</td>
                                    <td class="py-3">Yangon</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">Postal Code</td>
                                    <td class="py-3">{{$user->postal_code ? $user->postal_code : '-'}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">Zip Code</td>
                                    <td class="py-3">{{$user->zip_code ? $user->zip_code : '-'}}</td>
                                </tr>
                                <tr class="">
                                    <td class="py-3">Address</td>
                                    <td class="py-3">{{$user->address ? $user->address : '-'}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
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

{{-- sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('backend-assets/js/app.js')}}"></script>

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    @if (session('create'))
    Toast.fire({
        icon: 'success',
        title: "{{ session('create') }}"
    })
    @endif

    @if (session('update'))
    Toast.fire({
        icon: 'success',
        title: "{{ session('update') }}"
    })
    @endif

    @if (session('delete'))
    Toast.fire({
        icon: 'success',
        title: "{{ session('delete') }}"
    })
    @endif

</script>


<body/>
<html/>
