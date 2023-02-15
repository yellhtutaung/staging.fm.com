@extends('frontend.layouts.app')

@section('title', 'Fresh Moe')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/coldchain.css')}}"/>
@endsection



@section('content')

        {{--CCTBanner start--}}
        <div
            class="cct_banner"
        >
            <h1 class="text-white title-fm">{{ __('message.cold_chain_and_transport') }}</h1>
        </div>
        {{--CCTBanner end --}}

        {{--ColdChain start--}}
        <section class="cc_section" data-aos="fade-up" id="mission">
            <div class="container-fluid m-0 p-0">
                <div class="d-flex flex-wrap">
                    <div class="col-md-6 mission_text">
                        <div class="main_title">
                            <h3 class="text-center title-fm">{{ __('message.cold_chain') }}</h3>
                            <span class="main_title_underline bg-black"></span>
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
                    <div class="col-md-6 cc_bg"></div>
                </div>
            </div>
        </section>
        {{--ColdChain end--}}

        {{--transportation start--}}
        <section class="transport_section" data-aos="fade-up">
            <div class="container-fluid m-0 p-0">
                <div class="d-flex flex-wrap" >
                    <div class="col-md-6 transport_bg"></div>
                    <div class="col-md-6 transport_text">
                        <div class="main_title text-dark">
                            <h3 class="text-center title-fm">{{ __('message.transportation') }}</h3>
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
        {{--transportation end--}}


        {{--footer start--}}
        <?php echo View::make ('frontend.layouts.footer'); ?>
        {{--footer end--}}

@endsection
