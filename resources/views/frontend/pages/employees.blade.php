@extends('frontend.layouts.app')

@section('title', 'Fresh Moe')

@section('extra-css')
    <!-- Link Swiper's CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('frontend-assets/css/employee/employee.css')}}"/>


    <style>
        .employees_banner {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../frontend-assets/images/em_banner.jpg");
            margin-top: 140px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .job-btn {
            padding: 0.7rem 1.5rem;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #ED1C24;
            color: white;
        }

        .job-btn:hover {
            background-color: white;
            color: #ED1C24;
            border: 2px solid #ED1C24;
        }

    </style>
@endsection

@section('content')


{{--employees_banner start--}}
<div>
    <div class="employees_banner">
        <h1 class="text-white title-fm">{{ __('message.employees_hero') }}</h1>
    </div>
</div>
{{--employees_banner end --}}


{{--employees cards start--}}
<!-- Swiper -->
<div class="container-fluid m-0 p-0 p-5">
    <div class="swiper mySwiper d-flex justify-content-center">
        <div class="swiper-wrapper p-5">

            <div class="swiper-slide">
                <div class="p-3 w-100">
                    <div class="employee_card p-2 py-3 h-100">
                        <div class="employee_image">
                            <img src='{{asset('./frontend-assets/images/employee_profile_4.jpg')}}' alt="" class="img-fluid mx-auto d-block" />
                        </div>
                        <div class="employee_info p-2 mt-3">
                            <div class="name title-fm">
                                <h5 class=" title-fm text-center fw-bold">{{ __('message.chief_executive_officer') }}</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                {{ __('message.thuramoe') }}
                                <div class="title title-fm mt-2">{{ __('message.chief_executive_officer') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="p-3 w-100">
                    <div class="employee_card p-2 py-3 h-100">
                        <div class="employee_image">
                            <img src='{{asset('./frontend-assets/images/employee_profile_1.jpg')}}' alt="" class="img-fluid mx-auto d-block" />
                        </div>
                        <div class="employee_info p-2 mt-3">
                            <div class="name title-fm">
                                <h5 class=" title-fm text-center fw-bold">{{ __('message.chief_financial_officer') }}</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                {{ __('message.aungchanoo') }}
                                <div class="title title-fm mt-2">{{ __('message.chief_financial_officer') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="p-3 w-100">
                    <div class="employee_card p-2 py-3 h-100">
                        <div class="employee_image">
                            <img src='{{asset('./frontend-assets/images/employee_profile_2.jpg')}}' alt="" class="img-fluid mx-auto d-block" />
                        </div>
                        <div class="employee_info p-2 mt-3">
                            <div class="name title-fm">
                                <h5 class=" title-fm text-center fw-bold">{{ __('message.chief_technology_officer') }}</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                {{ __('message.kyawthetnaing') }}
                                <div class="title title-fm mt-2">{{ __('message.chief_technology_officer') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="p-3 w-100">
                    <div class="employee_card p-2 py-3 h-100">
                        <div class="employee_image">
                            <img src='{{asset('./frontend-assets/images/employee_profile_3.jpg')}}' alt="" class="img-fluid mx-auto d-block" />
                        </div>
                        <div class="employee_info p-2 mt-3">
                            <div class="name title-fm">
                                <h5 class=" title-fm text-center fw-bold">{{ __('message.chief_operating_officer') }}</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                {{ __('message.zawmyataung') }}
                                <div class="title title-fm mt-2">{{ __('message.chief_operating_officer') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
{{--employees cards end--}}

{{--footer start--}}
<?php echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


@endsection

@section('extra-script')

    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        centeredSlides: false,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            400: {
                slidesPerView: 1,
                spaceBetween: 35,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 35,
            },

            1200: {
                slidesPerView: 4,
                spaceBetween: 35,
            },
        },
    });
</script>
@endsection
