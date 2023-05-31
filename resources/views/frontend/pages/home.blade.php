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
                    <img class="img" src="{{ asset('frontend-assets/images/sliders/slider_1.jpg') }}" alt="">
                    <div class="carousel-content ">
{{--                        <div class="container title-fm">{{ __('message.slider2') }}</div>--}}
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="home-slide-container home-carousel-1" >
                    <img class="img" src="{{ asset('frontend-assets/images/sliders/slider_2.jpg') }}" alt="">
                    <div class="carousel-content ">
{{--                        <div class="container title-fm">{{ __('message.slider1') }}</div>--}}
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="home-slide-container home-carousel-1" >
                    <img class="img" src="{{ asset('frontend-assets/images/sliders/slider_3.jpg') }}" alt="">
                    <div class="carousel-content ">
{{--                        <div class="container title-fm">{{ __('message.slider3') }}</div>--}}
                    </div>
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
                                <h5 class="title-fm mb-2">{{ __('message.our_services') }}</h5>
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
                                <h5 class="title-fm mb-2">{{ __('message.easy_to_use_app') }}</h5>
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
                                <h5 class="title-fm mb-2">{{ __('message.fresh_fruits_and_vegetables') }}</h5>
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
                    <div class="col-md-6  it_products_col mt-5" >
                        <h2>{{ __('message.get_app') }}</h2><br>
                        <p>Download molestias molestiae nemo, eveniet vel totam asperiores repellat, soluta vitae iusto hic non ipsam ratione aperiam? Est itaque neque enim numquam aspernatur expedita repellat incidunt molestiae error voluptatum. Magnam dolores, illum ratione doloribus laboriosam quas qui temporibus ea aliquam deleniti rem facilis cupiditate beatae quisquam cum architecto? </p>
                        <div class="d-flex justify-content-start gap-1 mt-3">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=commerce.freshmoe.fresh_moe">
                                <img width="150" height="50" src="{{asset('frontend-assets/images/playstore_img.ba0de1d3.png')}}"
                                    alt="" class="application-store" />
                            </a>
                            <a>
                                <img width="150" height="50" src="{{asset('frontend-assets/images/app_store.428f2d8e.png')}}"
                                    alt="" class="application-store" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center it_products_col">
                        <div class="it_product_detail">
                            <img src="{{asset('frontend-assets/images/mobile_png.png')}}" alt=""
                                class="it_product_img phone_img"/>
{{--                            <div class="d-flex justify-content-center gap-1 mt-3">--}}
{{--                                <a--}}
{{--                                    href="https://play.google.com/store/apps/details?id=commerce.freshmoe.fresh_moe"--}}
{{--                                >--}}
{{--                                    <img--}}
{{--                                        width="150"--}}
{{--                                        height="50"--}}
{{--                                        src="{{asset('frontend-assets/images/playstore_img.ba0de1d3.png')}}"--}}
{{--                                        alt=""--}}
{{--                                        class="application-store"--}}
{{--                                    />--}}
{{--                                </a>--}}
{{--                                <a href="https://play.google.com/store/apps/details?id=commerce.freshmoe.fresh_moe">--}}
{{--                                    <img--}}
{{--                                        width="150"--}}
{{--                                        height="50"--}}
{{--                                        src="{{asset('frontend-assets/images/app_store.428f2d8e.png')}}"--}}
{{--                                        alt=""--}}
{{--                                        class="application-store"--}}
{{--                                    />--}}
{{--                                </a>--}}
{{--                            </div>--}}
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

    {{---------- Organic Food ------------}}

    <div>
        <section class="organic_food" data-aos="fade-up" id="why">
            <div class="container-fluid py-5">
                <div class="row g-3">
                    <div class="col-lg-6 p-2 d-flex justify-content-center">
                        <div>
                            <div class="m-2 img-one">
                                <img src="{{ asset('frontend-assets/images/organic_food_2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="m-2 img-two d-none d-sm-block">
                                <img src="{{ asset('frontend-assets/images/organic_food_1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-4">

                        <div class="center_title d-flex flex-column align-items-start">
                            <h3 class="text-dark title-fm">{{ __('message.our_organic_farm') }}</h3>
                            <span class="center_title_underline"></span>
                        </div>
                        <div class="d-flex mb-3 ">
                            <div class="vertical_line"></div>
                            <div class="body-fm py-1 vertical_text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fugit ipsa libero molestias perspiciatis! Ad commodi cumque dolorem iure iusto odio possimus.
                            </div>
                        </div>
                        <div class="body-fm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid architecto atque culpa cupiditate est ipsa itaque labore laboriosam minus non officia perferendis, quibusdam rem rerum sapiente veniam veritatis!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid architecto atque culpa cupiditate est ipsa itaque labore laboriosam minus non officia perferendis, quibusdam rem rerum sapiente veniam veritatis!
                        </div>
                        <div>
                            <form action="#contact">
                                <button type="" href="#contact" class="">Send Message <i class="fa-solid fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- Fresh Food Start --}}

        <section class="fresh_food" data-aos="fade-up" id="fresh_food">
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-start">
                            <div class="left_img pb-5">
                                <img src="{{ asset('frontend-assets/images/fresh_food2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 right_img">
                        <div class="fresh_food_card ml-5">
                            <div class="mt-5 mt-md-5 pt-5 pt-md-0">
                                <h3 class="text-dark title-fm">{{ __('message.our_fresh_food') }}</h3>
                            </div>
                            <div class="fresh_food_text d-flex flex-column align-items-start">
                                <p class="text-dark title-fm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet architecto autem commodi corporis, deserunt dicta dignissimos distinctio
                                </p>
                                <span class="fresh_food_underline"></span>
                            </div>
                            <div class="d-flex mb-3 ">
                                <div class="vertical_line"></div>
                                <div class="body-fm py-1 vertical_text">
                                    - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fugit ipsa libero molestias perspiciatis! Ad commodi cumque dolorem iure iusto odio possimus Ad commodi cumque dolorem iure iusto odio possimus.
                                </div>
                            </div>
                            <div class="body-fm py-1">
                                - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid architecto atque culpa cupiditate !
                            </div>
                            <div class="body-fm py-3">
                                - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid architecto atque culpa cupiditate est ipsa itaque !
                            </div>
                            <div class="d-flex align-items-center justify-content-start">
                                <form action="#">
                                    <button type="" href="#fresh_food_btn" id="fresh_food_btn">See More <i class="fa-solid fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    {{-- Fresh Food End --}}

    {{--footer start--}}
    <?php echo View::make ('frontend.layouts.footer'); ?>
    {{--footer end--}}

@endsection






@section('extra-script')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>

        $(document).ready(function () {
            const header = $('.green_block').innerHeight() + $('.white_block').innerHeight() + $('.red_block').innerHeight() + $('.navigation_bar').innerHeight()
            const avalible = document.documentElement.clientHeight - header
            $('.img').css({"height": `${avalible}px`, "margin-top": `${header}px`});
        })

        window.addEventListener("resize", ()=>{
            if (window.screen.width > 992) {
                const header = $('.green_block').innerHeight() + $('.white_block').innerHeight() + $('.red_block').innerHeight() + $('.navigation_bar').innerHeight()
                const avalible = document.documentElement.clientHeight - header
                $('.img').css({"height": `${avalible}px`, "margin-top": `${header}px`});
            }
        });




        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 5000,
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

        let carouselInnerHeight = $(".slider-img-parent").height();
        console.log(carouselInnerHeight)

    </script>

@endsection

