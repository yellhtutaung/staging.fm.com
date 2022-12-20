<?php echo View::make ('frontend.layouts.head'); ?>

<link rel="stylesheet" href="{{asset('frontend-assets/css/partnerships/ourpartnerships.css')}}"/>

<style>

</style>

</head>
<body>

{{--navbar layout start--}}
<?php echo View::make ('frontend.layouts.navbar'); ?>
{{--navbar layout end--}}

{{--our partnerships start--}}
<div class="container-fluid" id="partners">
    <div class="about_parntner_ships_card shadow">
        <div class="title title-fm">
            <h3>About Our Partnerships</h3>
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


{{--footer start--}}
<?php echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


<?php echo View::make ('frontend.layouts.aos'); ?>



<body/>
<html/>
