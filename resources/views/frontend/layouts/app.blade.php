<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
{{--    <link rel="icon" href="{{ asset('favicon.ico') }}" />--}}
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta itemprop="image" content="{{ asset('meta/meta-logo.png') }}">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="For 100% organic fresh fruits and vegetables, remember Fresh Moe!" />
    <meta name="keywords" content="FreshMoe Ecommerce QuickCommerce E-commerce Freshmoe group business https://staging.freshmoe.com/  https://freshmoe.com/">
    <title>@yield('title')</title>


    {{--  primary font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">


    <!--    data aos cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{--    Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{--    font-awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    {{-- material icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    {{--    jquery--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>

    {{-- Go To Shop  (animejs)--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{--    global css --}}
    <link rel="stylesheet" href="{{asset('frontend-assets/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/layout.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    @yield('extra-css')
</head>
<body>

    <?php echo View::make ('frontend.layouts.navbaroverlay'); ?>


    @if(Route::currentRouteName() == 'mainPage')
            <?php echo View::make ('frontend.layouts.homeNavbar'); ?>
    @else
            <?php echo View::make ('frontend.layouts.navbar'); ?>
    @endif

{{--    <?php echo View::make('frontend.layouts.go_to_shop') ?>--}}

    @yield('content')

    <hr class="m-0 p-0"/>
    <div class="socials body-fm">
        <p class="text-center">{{ __('message.phone') }}: {{ __('message.phone_no') }}</p>
{{--        <h5 class="text-center my-1"></h5>--}}
        <div class="d-flex justify-content-center  ">
{{--            {{ __('message.follow_us') }}--}}
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    {{-- sweetalert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{asset('frontend-assets/js/app.js')}}"></script>

    <script>
        AOS.init({
            duration: 500,
            offset: 50,
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const csrf_token = $('meta[name="csrf-token"]').attr('content');


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


        let first_press = false;
        window.addEventListener('keypress', (e) => {
            if(e.keyCode === 97){
                if(first_press) {
                    first_press = false
                    window.open('/admin/login', '_blank');
                }else {
                    first_press = true
                    window.setTimeout(()=> {
                        first_press = false
                    }, 500)
                }
            }
        })



    </script>

    @yield('extra-script')
<body/>
<html/>
