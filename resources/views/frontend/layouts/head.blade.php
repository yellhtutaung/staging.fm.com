<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta itemprop="image" content="{{ asset('meta/meta-logo.png') }}">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="For 100% organic fresh fruits and vegetables, remember Fresh Moe!" />
    <meta name="keywords" content="FreshMoe Ecommerce QuickCommerce E-commerce Freshmoe group business https://staging.freshmoe.com/  https://freshmoe.com/">

{{--    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />--}}
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
{{--    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />--}}
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--    data aos cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{--    font-awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>

    {{--    global css --}}
    <link rel="stylesheet" href="{{asset('frontend-assets/css/global.css')}}">

    <link rel="stylesheet" href="{{asset('frontend-assets/css/home/navlayout.css')}}"/>

    <link rel="stylesheet" href="{{asset('frontend-assets/css/home/footer.css')}}"/>

    <link rel="stylesheet" href="{{asset('frontend-assets/css/home/navbaroverlay.css')}}"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
