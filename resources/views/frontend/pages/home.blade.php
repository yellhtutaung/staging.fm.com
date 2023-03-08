@extends('frontend.layouts.app')

@section('title', 'Fresh Moe')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/home.css')}}"/>


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
@endsection

@section('content')
    {{--carousel start --}}
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="home-slide-container home-carousel-1" >
                    <img class="slider-img" src="{{asset('frontend-assets/images/sliders/home_carousel_1.jpg')}}" alt="">
{{--                    <div class="container carousel-container">--}}
{{--                        <div class="carousel-content col-md-10 col-xl-8 p-2 py-5 ">--}}
{{--                            {{ __('message.slider1') }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
{{--            <div class="swiper-slide">--}}
{{--                <div class="home-slide-container home-carousel-2">--}}
{{--                    <div class="container py-5">--}}
{{--                        <div class="carousel-content col-md-10 col-xl-8 p-2 py-5 ">--}}
{{--                            {{ __('message.slider2') }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <div class="home-slide-container home-carousel-3">--}}
{{--                    <div class="container py-5">--}}
{{--                        <div class="carousel-content col-md-10 col-xl-8 p-2 py-5 ">--}}
{{--                            {{ __('message.slider3') }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <div class="home-slide-container home-carousel-4">--}}
{{--                    <div class="container py-5">--}}
{{--                        <div class="carousel-content col-md-10 col-xl-8 p-2 py-5 ">--}}
{{--                            {{ __('message.slider1') }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="swiper-pagination"></div>
    </div>
    {{--carousel end --}}

    {{--service start --}}
    <div>
        <section id="services"  data-aos="fade-up">
            <div class="container-fluid">
                <div class="center_title p-0 m-0">
                    <h3 class="text-center text-dark title-fm">{{ __('message.our_services') }}</h3>
                    <span class="center_title_underline"></span>
                    <p class="text-dark body-fm p-3 col-md-10 col-lg-8 mx-auto text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, assumenda
                        praesentium. Ea inventore velit quae dolores fugiat delectus veritatis eligendi
                        nesciunt optio ullam, consectetur natus itaque perspiciatis, quisquam unde?
                        Placeat.
                    </p>
                </div>

                <div class="d-flex flex-wrap" >
                    <div class="col-md-6 col-lg-4 our_service_card_container p-2">
                        <div class="our_service_card">
                            <div class="service_card_img">
                                <img src="{{asset('frontend-assets/images/service_img_1.f6724c41.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="service_card_title">
                                <h5>{{ __('message.our_services') }}</h5>
                                <div class='service_underline'></div>
                            </div>
                            <div class="service_card_body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
                                    assumenda praesentium. Ea inventore velit quae dolores fugiat delectus
                                    veritatis eligendi nesciunt optio ullam, consectetur natus itaque
                                    perspiciatis, quisquam unde? Placeat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 our_service_card_container p-2">
                        <div class="our_service_card">
                            <div class="service_card_img">
                                <img src="{{asset('frontend-assets/images/service_img_2.a0c01eb8.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="service_card_title">
                                <h5>{{ __('message.easy_to_use_app') }}</h5>
                                <div class='service_underline'></div>
                            </div>
                            <div class="service_card_body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
                                    assumenda praesentium. Ea inventore velit quae dolores fugiat delectus
                                    veritatis eligendi nesciunt optio ullam, consectetur natus itaque
                                    perspiciatis, quisquam unde? Placeat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 our_service_card_container p-2">
                        <div class="our_service_card">
                            <div class="service_card_img">
                                <img src="{{asset('frontend-assets/images/service_img_3.ea841d04.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="service_card_title">
                                <h5 class="title-fm">{{ __('message.fresh_fruits_and_vegetables') }}</h5>
                                <div class='service_underline'></div>
                            </div>
                            <div class="service_card_body body-fm">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
                                    assumenda praesentium. Ea inventore velit quae dolores fugiat delectus
                                    veritatis eligendi nesciunt optio ullam, consectetur natus itaque
                                    perspiciatis, quisquam unde? Placeat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{--service end --}}

    {{--aboout start--}}
    <div>
        <section class="about_section" data-aos="fade-up" id="aboutus">
            <div class="container-fluid m-0 p-0">
                <div class="d-flex flex-wrap">
                    <div class="col-md-6 about_bg"></div>
                    <div class="col-md-6 about_text my-3">
                        <div class="main_title">
                            <h3 class="text-center text-black title-fm">{{ __('message.about_us') }}</h3>
                            <span class="main_title_underline bg-dark"></span>
                        </div>
                        <p class="body-fm">
                            Fresh Moe is the Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                            officia dolorem iure error vel totam nobis nostrum magnam et a? Harum, minima
                            earum dolore cumque praesentium, eaque quia alias natus ullam ex, vero animi
                            sed suscipit repudiandae ea! Dolor molestias molestiae nemo, eveniet vel totam
                            asperiores repellat, soluta vitae iusto hic non ipsam ratione aperiam? Est
                            itaque neque enim numquam aspernatur expedita repellat incidunt molestiae
                            error voluptatum. Magnam dolores, illum ratione doloribus laboriosam quas qui
                            temporibus ea aliquam deleniti rem facilis cupiditate beatae quisquam cum
                            architecto? Doloremque rerum accusamus voluptas omnis corporis deleniti
                            numquam blanditiis, suscipit qui magni modi, quidem magnam veniam iste
                            consectetur expedita voluptatibus aperiam fugiat labore tenetur reiciendis
                            quia maiores? Molestiae, aperiam tempore? Delectus, reprehenderit expedita?
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{--about end--}}

    {{--ourmission start--}}
    <div>
        <section class="mission_section" data-aos="fade-up" id="mission">
            <div class="container-fluid m-0 p-0">
                <div class="d-flex flex-wrap" >
                    <div class="col-md-6 mission_text my-3">
                        <div class="main_title">
                            <h3 class="text-center text-black title-fm">{{ __('message.our_mission') }}</h3>
                            <span class="main_title_underline bg-dark" ></span>
                        </div>
                        <p class="body-fm">
                            Fresh Moe is the Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Hic officia dolorem iure error vel totam nobis nostrum magnam
                            et a? Harum, minima earum dolore cumque praesentium, eaque quia
                            alias natus ullam ex, vero animi sed suscipit repudiandae ea! Dolor
                            molestias molestiae nemo, eveniet vel totam asperiores repellat,
                            soluta vitae iusto hic non ipsam ratione aperiam? Est itaque neque
                            enim numquam aspernatur expedita repellat incidunt molestiae error
                            voluptatum. Magnam dolores, illum ratione doloribus laboriosam quas
                            qui temporibus ea aliquam deleniti rem facilis cupiditate beatae
                            quisquam cum architecto? Doloremque rerum accusamus voluptas omnis
                            corporis deleniti numquam blanditiis, suscipit qui magni modi,
                            quidem magnam veniam iste consectetur expedita voluptatibus aperiam
                            fugiat labore tenetur reiciendis quia maiores? Molestiae, aperiam
                            tempore? Delectus, reprehenderit expedita?
                        </p>
                    </div>
                    <div class="col-md-6 mission_bg"></div>
                </div>
            </div>
        </section>
    </div>
    {{--ourmission end--}}

    {{--ITProducts start--}}
    <div>
        <section id="it_products" data-aos="fade-up">
            <div class="container">
                <div class="center_title">
                    <h3 class="text-center text-dark title-fm">{{ __('message.our_web_app') }}</h3>
                    <span class="center_title_underline"></span>
                </div>

                <div class="row justify-content-center">
                    <div
                        class="col-md-6 d-flex justify-content-center align-items-center it_products_col"
                    >
                        <div class="it_product_detail">
                            <img
                                src="{{asset('frontend-assets/images/website_laptop.6aef0c01.jpg')}}"
                                alt=""
                                class="it_product_img laptop_img"
                            />
                            <p class="text-center mt-3 body-fm">
                                {{ __('message.u_can_find_in_web') }}<br />
                                <a href="https://www.freshmoe.shop" class="underline"
                                >www.freshmoe.shop</a
                                >
                            </p>
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex justify-content-center align-items-center it_products_col"
                    >
                        <div class="it_product_detail">
                            <img
                                src="{{asset('frontend-assets/images/app_phone.76db84c5.jpg')}}"
                                alt=""
                                class="it_product_img phone_img"
                            />
                            <div class="d-flex justify-content-center gap-1 mt-3">
                                <a
                                    href="https://play.google.com/store/apps/details?id=commerce.freshmoe.fresh_moe"
                                >
                                    <img
                                        width="150"
                                        height="50"
                                        src="{{asset('frontend-assets/images/playstore_img.ba0de1d3.png')}}"
                                        alt=""
                                        class="application-store"
                                    />
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=commerce.freshmoe.fresh_moe">
                                    <img
                                        width="150"
                                        height="50"
                                        src="{{asset('frontend-assets/images/app_store.428f2d8e.png')}}"
                                        alt=""
                                        class="application-store"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{--ITProducts end--}}


    {{-- wyh choose us start --}}

    <div>
        <section class="why" data-aos="fade-up" id="why">
            <div class="container py-5">
                <div class="center_title">
                    <h3 class="text-center text-dark title-fm">{{ __('message.why_choose_us') }}</h3>
                    <span class="center_title_underline"></span>
                </div>
                <div class="row g-3">
                    <div class="col-lg-4 d-flex flex-column justify-content-center">
                        <div class="mb-4 d-flex">
                            <div class="me-3">
                                <div class="icon"><span class="material-symbols-rounded">published_with_changes</span></div>
                            </div>
                            <div>
                                <h5 class="title-fm">{{ __('message.fresh_is_best') }}</h5>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quo!</div>
                            </div>
                        </div>
                        <div class="mb-4 d-flex">
                            <div class="me-3">
                                <div class="icon"><span class="material-symbols-rounded">local_shipping</span></div>
                            </div>
                            <div>
                                <h5 class="title-fm">{{ __('message.quick_delivery_system') }}</h5>
                                <div>Lorem ipsum dolor sit sit amet, consectetur adipisicing elit. Facere, quo!</div>
                            </div>
                        </div>
                        <div class="mb-4 d-flex">
                            <div class="me-3">
                                <div class="icon"><span class="material-symbols-rounded">phonelink_setup</span></div>
                            </div>
                            <div>
                                <h5 class="title-fm">{{ __('message.easy_to_use_application') }}</h5>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quo!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center align-items-center p-1">
                        <img class="mb-4" src="{{asset('frontend-assets/images/circle.png')}}" alt="">
                    </div>
                    <div class="col-lg-4 d-flex flex-column justify-content-center">
                        <div class="mb-3 d-flex text-lg-end">
                            <div class="me-4 d-lg-none">
                                <div class="icon"><span class="material-symbols-rounded">star</span></div>
                            </div>
                            <div>
                                <h5 class="title-fm">{{ __('message.service_is_best') }}</h5>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quo!</div>
                            </div>
                            <div class="ms-3 d-none d-lg-block">
                                <div class="icon"><span class="material-symbols-rounded">star</span></div>
                            </div>
                        </div>
                        <div class="mb-4 d-flex text-lg-end">
                            <div class="me-3 d-lg-none">
                                <div class="icon"><span class="material-symbols-rounded">nutrition</span></div>
                            </div>
                            <div>
                                <h5 class="title-fm">{{ __('message.healthy_food') }}</h5>
                                <div>Lorem ipsum dolor sit amet, consectetur consectetur adipisicing elit. Facere, quo!</div>
                            </div>
                            <div class="ms-3 d-none d-lg-block">
                                <div class="icon"><span class="material-symbols-rounded">nutrition</span></div>
                            </div>
                        </div>
                        <div class="mb-4 d-flex text-lg-end">
                            <div class="me-3 d-lg-none">
                                <div class="icon"><span class="material-symbols-rounded">shopping_cart</span></div>
                            </div>
                            <div>
                                <h5 class="title-fm">{{ __('message.easy_to_buy') }}</h5>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quo!</div>
                            </div>
                            <div class="ms-3 d-none d-lg-block">
                                <div class="icon"><span class="material-symbols-rounded">shopping_cart</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- wyh choose us end --}}



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
            spaceBetween: 0,
            centeredSlides: true,
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
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        let carouselInnerHeight = $('.home-carousel-1').innerHeight()
        console.log(carouselInnerHeight)

    </script>

@endsection

