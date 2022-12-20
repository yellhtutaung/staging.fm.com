<?php echo View::make ('frontend.layouts.head'); ?>

<link rel="stylesheet" href="{{asset('frontend-assets/css/home/service.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/home/about.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/home/ITProducts.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/home/ourmission.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/home/carousel.css')}}"/>

<!-- Link Swiper's CSS -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
/>


</head>
<body>

{{--navbar layout start--}}
<?php echo View::make ('frontend.layouts.homeNavbar'); ?>
{{--navbar layout end--}}

{{--carousel start --}}
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="home-slide-container home-carousel-1">
                <div class="container py-5">
                    <div class="carousel-content col-md-10 col-lg-8 col-xl-7 p-2 py-5 ">
                        "Eat fresh food for your health! For fresh fruits and vegetables, remember <b>Fresh Moe</b>! ",
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide-container home-carousel-2">
                <div class="container py-5">
                    <div class="carousel-content col-md-10 col-lg-8 col-xl-7 p-2 py-5 ">
                        "100% organic Fruits & Vegetables"
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide-container home-carousel-3">
                <div class="container py-5">
                    <div class="carousel-content col-md-10 col-lg-8 col-xl-7 p-2 py-5 ">
                        We will always serve you with quick delivery system!
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide-container home-carousel-4">
                <div class="container py-5">
                    <div class="carousel-content col-md-10 col-lg-8 col-xl-7 p-2 py-5 ">
                        "Eat fresh food for your health! For fresh fruits and vegetables, remember <b>Fresh Moe</b>! ",
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
{{--carousel end --}}

{{--service start --}}
<div>
    <section id="services"  data-aos="fade-up">
        <div class="container-fluid">
            <div class="center_title p-0 m-0">
                <h3 class="text-center text-dark title-fm">Our Services</h3>
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
                            <h5>Easy To Use Application</h5>
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
                            <h5>Fresh Fruits and Vegetables</h5>
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
                            <h5 class="title-fm">Quick Delivery System</h5>
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
                        <h3 class="text-center text-black title-fm">About Us</h3>
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

{{--ITProducts start--}}
<div>
    <section id="it_products" data-aos="fade-up">
        <div class="container">
            <div class="center_title">
                <h3 class="text-center text-dark title-fm">Our Website & Apps</h3>
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
                            You can find the webiste on<br />
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

{{--ourmission start--}}
<div>
    <section class="mission_section" data-aos="fade-up" id="mission">
        <div class="container-fluid m-0 p-0">
            <div class="d-flex flex-wrap" >
                <div class="col-md-6 mission_text my-3">
                    <div class="main_title">
                        <h3 class="text-center text-black title-fm">Our Mission</h3>
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

{{--footer start--}}
<div>
    <section id="footer">
        <div class="container-fluid">
            <div class="d-flex flex-wrap footer_section_1">
                <div class="col-md-6 border_right">

                    {{--footer link start--}}
                    <div>
                        <div class="container mb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12 mb-4" data-aos="fade-up">
                                    <div class="center_title mb-1">
                                        <h3 class="text-center text-dark title-fm">Quick Links</h3>
                                        <span class="center_title_underline mt-1"></span>
                                    </div>
                                    <p class="short_text body-fm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                                        excepturi quos?
                                    </p>
                                    <div class="footer_links body-fm">
                                        <a href="#services">Services</a>
                                        <a href="#aboutus">About Us</a>
                                        <a href="#it_products">Website and Apps</a>
                                        <a href="#mission">Our Mission</a>
                                    </div>
                                </div>
                                <span class="green_hr_line"></span>
                                <div class="col-md-12" data-aos="fade-up">
                                    <div class="center_title mb-1">
                                        <h3 class="text-center text-dark title-fm">Other Information</h3>
                                        <span class="center_title_underline mt-1"></span>
                                    </div>
                                    <p class="short_text body-fm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                                        excepturi quos?
                                    </p>
                                    <div class="footer_links2 body-fm">
                                        <a href="/employees" onClick={gotop}>Employees</a>
                                        <a href="/client" onClick={gotop}>Client and Future Plans</a>
                                        <a href="/partnerships" onClick={gotop}>About Partnerships</a>
                                        <a href="/target-market" onClick={gotop}>Target of Market</a>
                                        <a href="/coldchain-transport" onClick={gotop}>Cold Chain and Transportation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--footer link end --}}

                </div>
                <div class="col-md-6 border_right">

                    {{--contact form start--}}
                    <div>
                        <div
                            class="container"
                            data-aos="fade-up"
                            id="contact"
                        >
                            <div class="contact_center_title px-3">
                                <h3 class="text-dark title-fm">Contact Us</h3>
                                <span class="contact_center_title_underline"></span>
                                <p class="body-fm">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse vel nemo
                                    iusto aut tenetur accusamus, neque, at et pariatur nisi modi omnis
                                    libero deleniti, fugiat qui mollitia rem exercitationem sapiente?
                                </p>
                            </div>
                            <div class="row p-3">
                                <div class="contact_form">
                                    <form
                                        action="https://formsubmit.co/aungchanoo.promail@gmail.com"
                                        method="POST"
                                        class="body-fm"
                                    >
                                        <input type="hidden" name="_next" value="https://www.freshmoe.com/" />
                                        <input
                                            type="text"
                                            name="name"
                                            required
                                            class="mb-3"
                                            placeholder="Enter Your Name"
                                            autocomplete="off"
                                        />
                                        <input
                                            type="email"
                                            name="email"
                                            required
                                            class="mb-3"
                                            placeholder="Enter Your Email"
                                            autocomplete="off"
                                        />
                                        <textarea
                                            name=""
                                            id=""
                                            cols="30"
                                            rows="3"
                                            class="mb-3"
                                            placeholder="Enter Your Message"
                                            autocomplete="off"
                                        ></textarea>
                                        <button type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--contact form start--}}

                </div>
            </div>
        </div>
        <hr />
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
    </section>
</div>
{{--footer end--}}


<?php echo View::make ('frontend.layouts.aos'); ?>


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
</script>

<body/>
<html/>
