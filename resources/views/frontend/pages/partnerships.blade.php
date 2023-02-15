@extends('frontend.layouts.app')

@section('title', 'Fresh Moe')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/ourpartnerships.css')}}"/>
@endsection

@section('content')

{{--our partnerships start--}}
<div class="container-fluid" id="partners">
    <div class="about_parntner_ships_card shadow">
        <div class="title title-fm">
            <h3>{{ __('message.partnerships') }}</h3>
        </div>
        <div class="content body-fm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere quaerat cum nemo
            corporis facilis veniam alias nostrum minima libero odit perferendis quas, totam
            voluptatum sequi non sunt eaque, optio iste. Quo quidem dolor saepe, dolorum
            voluptatibus repellat corporis? Nihil suscipit dolorum doloremque labore porro.
            Eaque dolore, quibusdam, nobis rem odit omnis dolores voluptatem, deleniti aliquid
            expedita reprehenderit temporibus laboriosam consequuntur. Praesentium quidem
            sequi fuga odio ipsa totam pariatur, ab dignissimos quaerat provident earum. Vero
            sint quia, odit quo ratione alias nulla culpa molestias possimus. Nemo cupiditate
            error soluta odio voluptatibus! Eos, nobis quae hic molestiae eveniet rerum
            laborum illum cupiditate esse odit. Eum, doloremque maxime. Nulla illo, similique
            sit neque praesentium, quisquam quidem adipisci corporis voluptatibus iure, alias
            ab exercitationem? Magni earum in molestiae impedit vero esse quod ullam
            laboriosam aspernatur? Iure adipisci cupiditate voluptatum maxime. Laboriosam amet
            nostrum repellat numquam eum dicta.
        </div>
        <div class="partners_icon">
            <div class="carrier"></div>
            <div class="samsung"></div>
            <div class="panasonic"></div>
        </div>
    </div>
</div>
{{--our partnerships end --}}

<section class="deals">
    <div class="container py-5">
        <div class="title title-fm text-center mb-3">
            <h3>Our Deals</h3>
            <div class="divider"></div>
        </div>
        <div class="row g-2 align-items-stretch" data-aos="fade-in">
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/mucci.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/berry_gardens.webp')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/dole.jpg.webp')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/hazera.webp')}}" alt="">
                </div>
            </div>

            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/migiva.jpg.webp')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/mucci.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/pura.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/santa_maria.webp')}}" alt="">
                </div>
            </div>

            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/sanzucar.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/sunkist.webp')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/tali_grapes.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-3 p-2">
                <div class="image">
                    <img src="{{asset('/frontend-assets/images/deals/zespri.webp')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


{{--footer start--}}
<?php echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


@endsection
