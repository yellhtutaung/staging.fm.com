<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Earner</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7c0ec42130.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('backend-assets/css/app.css')}}">

    @yield('extra-css')

</head>
<body>

<div>
    <div class="green_block"></div>
    <div class="white_block"></div>
    <div class="red_block"></div>
</div>

<div class="main-container">
    <?php echo View::make ('backend.layouts.sidebar'); ?>

    <div class="main pt-2">

        <?php echo View::make ('backend.layouts.header'); ?>



        <div class="p-3">

            @yield('content')

        </div>
        <footer class="shadow-lg">
            Copyright © 2022 FreshMoe. All rights reserved.
        </footer>
    </div>
</div>

<script src="{{asset('backend-assets/js/app.js')}}"></script>

@yield('extra-script')

</body>
</html>

