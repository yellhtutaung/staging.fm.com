@extends('frontend.layouts.app')

@section('title', 'Fresh Moe')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/targetMarkets.css')}}"/>
@endsection

@section('content')


{{--target market banner start--}}
<div
    class="target_banner"
>
    <h1 class="text-white title-fm">{{ __('message.target_market') }}</h1>
</div>
{{--target market banner end--}}

{{--targetmarkets start --}}
<section id="market" data-aos="fade-up">
    <div class="container-fluid m-0 p-0">
        <div class="d-flex flex-wrap">

            <div
                class="col-md-6 col-lg-4 our_market_card_container p-2"
            >
                <div class="our_market_card">
                    <div class="market_card_img">
                        <img src="{{asset('frontend-assets/images/thailand.jpg')}}" alt="" class="img-fluid" />
                    </div>
                    <div class="market_card_title title-fm">
                        <h5>{{ __('message.thailand') }}</h5>
                    </div>
                    <div class="market_card_body body-fm">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius nesciunt nisi possimus provident! Deleniti dignissimos eum incidunt officia placeat quasi voluptates. Assumenda eligendi error maiores officia quia ut vero?\n
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="col-md-6 col-lg-4 our_market_card_container p-2"
            >
                <div class="our_market_card">
                    <div class="market_card_img">
                        <img src="{{asset('frontend-assets/images/singapore.jpg')}}" alt="" class="img-fluid" />
                    </div>
                    <div class="market_card_title title-fm">
                        <h5>{{ __('message.singapore') }}</h5>
                    </div>
                    <div class="market_card_body body-fm">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius nesciunt nisi possimus provident! Deleniti dignissimos eum incidunt officia placeat quasi voluptates. Assumenda eligendi error maiores officia quia ut vero?\n
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="col-md-6 col-lg-4 our_market_card_container p-2"
            >
                <div class="our_market_card">
                    <div class="market_card_img">
                        <img src="{{asset('frontend-assets/images/malaysia.jpg')}}" alt="" class="img-fluid" />
                    </div>
                    <div class="market_card_title title-fm">
                        <h5>{{ __('message.malaysia') }}</h5>
                    </div>
                    <div class="market_card_body body-fm">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius nesciunt nisi possimus provident! Deleniti dignissimos eum incidunt officia placeat quasi voluptates. Assumenda eligendi error maiores officia quia ut vero?\n
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--targetmarkets end --}}


{{--footer start--}}
<?php echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


@endsection
