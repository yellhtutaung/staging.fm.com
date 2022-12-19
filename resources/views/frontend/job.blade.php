<?php echo View::make ('frontend.layouts.head'); ?>

<link rel="stylesheet" href="{{asset('frontend-assets/css/job/job.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/build/css/intlTelInput.min.css')}}">

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


<div class="container py-5 ">
    <form action="">
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Name</div>
            </div>
            <div class="col-lg-6 p-2 ">
                <input type="text" class=" w-100">
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Email</div>
            </div>
            <div class="col-lg-6 p-2">
                <input type="text" class=" w-100">
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Phone Number</div>
            </div>
            <div class="col-lg-6 p-2">
                <input type="phone" class="w-100" id="internationalPhone">
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Gender</div>
            </div>
            <div class="col-lg-6 p-2">
                <select name="" id="" class="">
                    <option value="">Select</option>
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Address</div>
            </div>
            <div class="col-lg-6 p-2">
                <textarea name="" id="" cols="3" rows="3" class=""></textarea>
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Job Position</div>
            </div>
            <div class="col-lg-6 p-2">
                <select name="" id="" class="">
                    <option value="">Job Type</option>
                    <option value="">Accountant</option>
                    <option value="">Delivery</option>
                    <option value="">Web developer</option>
                    <option value="">Android developer</option>
                    <option value="">HR</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Your message</div>
            </div>
            <div class="col-lg-6 p-2">
                <textarea name="" id="" cols="3" rows="3" class=""></textarea>
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm">Your CV Form</div>
            </div>
            <div class="col-lg-6 p-2">
                <input type="file" class=" w-100">
            </div>
        </div>
        <div class="row d-flex justify-content-center field-container">
            <div class="col-lg-auto p-2">
                <div class="label body-fm"></div>
            </div>
            <div class="col-lg-6 p-2">
                <button class="">Submit</button>
            </div>
        </div>
    </form>
</div>

{{--footer start--}}
<?php echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


<?php echo View::make ('frontend.layouts.aos'); ?>

<script src="{{asset('frontend-assets/build/js/intlTelInput.js')}}"></script>
<script>
    var input = document.querySelector('#internationalPhone')
    window.intlTelInput(input, {})
</script>

<body/>
<html/>
