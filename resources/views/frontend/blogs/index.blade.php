@extends('frontend.layouts.app')

@section('title', 'Fresh Moe | Blogs')

@section('extra-css')
    <style>
        .custom-blog-card
        {
            width: 97%;
            height: auto;
            overflow: hidden;
            border-radius: 5px;
            position: relative;
            transition: 0.5s;
        }
        .custom-blog-card img:hover{
            transform: scale(1.1);
        }
        .custom-blog-card img
        {
            transition: 0.5s;
            width: 100%;
            border-radius: 5px;
        }
        .black-ray-opacity
        {
            opacity: 0.5;
        }

        .custom-border
        {
            border: 3px solid red;
        }
        .postcard-text{
            position: absolute;
            /*z-index: 2;*/
            bottom: 10px;
            left: 30px;
            padding: 10px;
        }
        .postcard-para
        {
            color: white;
            font-size: 15px;
        }
        .left-img
        {
            width: 100%;
            height: 650px;
        }
        .custom-blog-container
        {
            width: 90%;
            margin: 0 auto;
        }
    </style>
    <link rel="stylesheet" href="{{asset('frontend-assets/css/home.css')}}"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
@endsection

@section('content')

    <div class="container container-top-margin">
        <div class="row ">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="custom-blog-card shadow">
                        <img class="left-img" src="https://www.mediafire.com/convkey/50d0/68s1ucwg0t68p5vzg.jpg?size_id=6" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-3" >
                    <h4 class="text-center" >Recent Blogs</h4>
                    <hr>
                    <div class="custom-blog-card shadow" >
                        <img class="right-img" style="opacity: 0.2px !important;" src="https://www.mediafire.com/convkey/186f/f2s9lexfdgv65ir9g.jpg" alt="">
                        <!--                    <div class="postcard-text">-->
                        <!--                        <h4 class="text-white pb-3">Top 7 Emerging Technologies</h4>-->
                        <!--                        <span class="text-white pb-2">🗓️ Dec 23, 2020</span>-->
                        <!--                        <p class="postcard-para">-->
                        <!--                            Cellulose, the most abundant organic pog into their building blocks, or monomers.-->
                        <!--                        </p>-->
                        <!--                    </div>-->
                    </div>
                    <div class="custom-blog-card shadow" style="margin: 25px 0; ">
                        <img class="right-img" src="https://www.mediafire.com/convkey/50d0/68s1ucwg0t68p5vzg.jpg?size_id=6" alt="">
                    </div>
                    <div class="custom-blog-card shadow">
                        <img class="right-img" src="https://www.mediafire.com/convkey/d45c/0gsf55m6vo767vxzg.jpg?size_id=6" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            // const avalible = document.documentElement.clientHeight - header;
            $('.container-top-margin').css({"margin-top":header+30});
        });

    </script>

@endsection
