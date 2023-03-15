@extends('frontend.layouts.app')

@section('title', 'Fresh Moe')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/client.css')}}"/>
@endsection

@section('content')

{{--client banner start--}}
<div class="client_banner">
    <h1 class="text-white title-fm">{{ __('message.client_hero') }}</h1>
</div>
{{--client banner end--}}

{{--our clients start--}}
<div class="container-fluid py-3" id="clients">
    <div class="our_clients_card">
        <div class="title title-fm">
            <h3>{{ __('message.clients') }}</h3>
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
    </div>
</div>
{{--our clients end --}}

{{--feature plans start--}}
<section id="future" data-aos="fade-up">
    <div class="d-flex flex-wrap" >
        <div class="col-md-6 col-lg-4 our_future_card_container p-2">
            <div class="our_future_card">
                <div class="future_card_img">
                    <img src="{{asset('frontend-assets/images/thailand.jpg')}}" alt="" class="img-fluid" />
                </div>
                <div class="future_card_title title-fm">
                    <h5>{{ __('message.thailand') }}</h5>
                </div>
                <div class="future_card_body body-fm">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius nesciunt nisi possimus provident! Deleniti dignissimos eum incidunt officia placeat quasi voluptates. Assumenda eligendi error maiores officia quia ut vero?\n
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 our_future_card_container p-2">
            <div class="our_future_card">
                <div class="future_card_img">
                    <img src="{{asset('frontend-assets/images/singapore.jpg')}}" alt="" class="img-fluid" />
                </div>
                <div class="future_card_title title-fm">
                    <h5>{{ __('message.singapore') }}</h5>
                </div>
                <div class="future_card_body body-fm">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius nesciunt nisi possimus provident! Deleniti dignissimos eum incidunt officia placeat quasi voluptates. Assumenda eligendi error maiores officia quia ut vero?\n
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 our_future_card_container p-2">
            <div class="our_future_card">
                <div class="future_card_img">
                    <img src="{{asset('frontend-assets/images/malaysia.jpg')}}" alt="" class="img-fluid" />
                </div>
                <div class="future_card_title title-fm">
                    <h5>{{ __('message.malaysia') }}</h5>
                </div>
                <div class="future_card_body body-fm">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius nesciunt nisi possimus provident! Deleniti dignissimos eum incidunt officia placeat quasi voluptates. Assumenda eligendi error maiores officia quia ut vero?\n
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--feature plans end --}}

{{--footer start--}}
<?php echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


@endsection
