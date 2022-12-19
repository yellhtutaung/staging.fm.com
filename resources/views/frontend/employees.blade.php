<?php echo View::make ('frontend.layouts.head'); ?>
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

</head>
<body>

{{--navbar layout start--}}
<?php echo View::make ('frontend.layouts.navbar'); ?>
{{--navbar layout end--}}

{{--employees_banner start--}}
<div>
    <div
        class="employees_banner"
    >
        <h1 class="text-white title-fm">Our Employees</h1>
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
                                <h5 class=" title-fm text-center fw-bold">Chief Executive Officer</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                Thura Moe
                                <div class="title title-fm mt-2">Chief Executive Officer</div>
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
                                <h5 class=" title-fm text-center fw-bold">Web developer</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                Aung Chan Oo
                                <div class="title title-fm mt-2">Web developer</div>
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
                                <h5 class=" title-fm text-center fw-bold">Android developer</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                Kyaw Thet Naing
                                <div class="title title-fm mt-2">Android developer</div>
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
                                <h5 class=" title-fm text-center fw-bold">Graphic Designer</h5>
                            </div>
                            <div class="description body-fm text-center mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae dicta dolorem est iste quisquam ratione rerum tenetur? Alias assumenda cum deserunt, distinctio ducimus eum nesciunt nihil quas quasi sunt.
                            </div>
                            <div class="footer title-fm text-center mt-4">
                                Zaw Myat Aung
                                <div class="title title-fm mt-2">Graphic Designer</div>
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


{{--<div class="container-fluid p-5">--}}
{{--    <div class="row m-0 p-0 ">--}}
{{--        <div class="col-lg-6 p-3 ">--}}
{{--            <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVXSD2Nhis6g-BKTZ_luA-s3hbxtKFC39RoQ&usqp=CAU" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 p-3">--}}
{{--            <div class="name title-fm">--}}
{{--                <h5 class=" title-fm fw-bold">About The Job</h5>--}}
{{--            </div>--}}
{{--            <div class=" body-fm mt-3">--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur beatae blanditiis cum cumque et perspiciatis suscipit. Amet consectetur molestiae nostrum officia optio, perspiciatis quaerat quidem. A assumenda dolorem reiciendis.--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur beatae blanditiis cum cumque et perspiciatis suscipit. Amet consectetur molestiae nostrum officia optio, perspiciatis quaerat quidem. A assumenda dolorem reiciendis.--}}
{{--            </div>--}}
{{--            <div class="mt-4">--}}
{{--                <a href="employees/job" class="job-btn text-decoration-none">Job Description</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--footer start--}}
<?php echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


<?php echo View::make ('frontend.layouts.aos'); ?>

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

<body/>
<html/>
