<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta itemprop="image" content="{{ asset('meta/social-image.jpg') }}">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="For 100% organic fresh fruits and vegetables, remember Fresh Moe!" />
    <meta name="keywords" content="FreshMoe Ecommerce QuickCommerce E-commerce Freshmoe group business https://staging.freshmoe.com/  https://freshmoe.com/">

    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>Fresh Moe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--    data aos cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{--    font-awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    {{--    global css --}}
    <link rel="stylesheet" href="{{asset('frontend-assets/css/global.css')}}">

    <link rel="stylesheet" href="{{asset('frontend-assets/build/css/intlTelInput.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend-assets/css/auth/register.css')}}">
</head>
<body>
    <div class="reg d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%">
            <div class="row d-flex justify-content-center align-content-stretch " >
                <div class=" col-lg-6 p-2 ">

                    <form action="" class="register body-fm " style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px">
                        <h1 class="title-fm text-center">Sign Up</h1>
                        <div class="input-wrapper">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="input" placeholder="" id="name" >
                        </div>
                        <div class="input-wrapper">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="input" placeholder="" id="email" >
                        </div>
                        <div class="input-wrapper">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="input" placeholder="" id="phone" >
                        </div>
                        <div class="input-wrapper">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="input" placeholder="********" id="password" >
                        </div>
                        <div class="input-wrapper">
                            <label for="password" class="form-label">Repeat Password</label>
                            <input type="password" class="input" placeholder="********" id="password" >
                        </div>
                        <div class="form-check">
                            <input class="form-check-input shadow" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the terms of service.
                            </label>
                        </div>
                        <div  class="input-wrapper">
                            <button>Register</button>
                        </div>
                    </form>


                </div>

                <div class="col-lg-6 p-3 d-none d-lg-flex flex-column justify-content-center ">
                    <div class="d-flex justify-content-center mb-5">
                        <img height="100px" src="{{asset('/freshmoe_logo.png')}}" alt="">
                    </div>
                    <img width="100%" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" alt="">
{{--                    <div>--}}
{{--                        <img width="100%" src="{{asset('frontend-assets/images/sign_up.jpg')}}" alt="">--}}
{{--                    </div>--}}
                    <div class="mt-3 body-fm d-flex justify-content-center">
                        <a href="" class="underline">I am already member</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
