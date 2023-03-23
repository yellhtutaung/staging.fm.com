<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta itemprop="image" content="{{ asset('meta/social-image.jpg') }}">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="For 100% organic fresh fruits and vegetables, remember Fresh Moe!" />
    <meta name="keywords" content="FreshMoe Ecommerce QuickCommerce E-commerce Freshmoe group business https://staging.freshmoe.com/  https://freshmoe.com/">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('backend-assets/css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>--}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/date-1.2.0/fc-4.2.1/r-2.4.0/sb-1.4.0/sl-1.5.0/datatables.min.js"></script>

    {{--    google material icons--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    {{--    Bootstrap Toggle--}}
    <link rel="stylesheet" href="{{asset('backend-assets/css/bootstrap-toggle.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend-assets/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/linear.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type="text/javascript" src="{{asset('backend-assets/js/bootstrap-toggle.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('backend-assets/css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/css/app.css')}}">
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const csrf_token = $('meta[name="csrf-token"]').attr('content');
        const universalSwitchRoute = "{{route("adminUniversalSwitch")}}";
    </script>

    @yield('extra-css')

</head>
<body>

<div>
    <div class="green_block"></div>
    <div class="white_block"></div>
    <div class="red_block"></div>
</div>

<div class="main-container">
    <?php echo View::make ('backend.layouts.sidebar'); ?>

    <div class="main pt-2">

        <?php echo View::make ('backend.layouts.header'); ?>

        <div class="p-3 content-section mb-5 pb-5">

            @yield('content')

        </div>
        <footer class="shadow-lg">
            Copyright © 2023 FreshMoe. All rights reserved.
        </footer>
    </div>
</div>

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

    @if (session('error'))
    Toast.fire({
        icon: 'warning',
        title: "{{ session('error') }}"
    })
    @endif

    let Permission = @php
        $UserRole = Auth::guard('admin')->user()->role;
        $RoleDb = App\Models\Permission::find($UserRole);
        $RolePermission = !empty($RoleDb)? $RoleDb->guard_json:[];
        print_r($RolePermission);
    @endphp;
    // console.log(Permission);
    let accessArr = [];
    Permission.map((eachPermission , index) => {
        let eachKey = Object.keys(eachPermission);
        accessArr.push(eachKey[0]);
        $(`.hide-sidebar-${eachKey[0]}`).removeClass('d-none');
        $(`.hide-hr-sidebar-${eachKey[0]}`).removeClass('d-none');
        $(`.hide-sidebar-li-${eachKey[0]}`).removeClass('d-none');
    });
    console.log(accessArr);
</script>
@yield('extra-script')

</body>
</html>
