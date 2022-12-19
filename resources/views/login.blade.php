<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FreshMoe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('backend-assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/global.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="login-form-container">
        <div class="col-lg-4 col-xl-3 mx-auto mb-1">
            <div class="d-flex justify-content-center align-items-center">
                <img class="logo-img" src="{{asset('freshmoe_logo.png')}}" alt="">
            </div>
            <div class="card mt-3">
                <div class="card-header theme_bg py-3">
                    <div class="text text-white">Sign in to Admin Panel</div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.post.login')}}" method="post">
                        @csrf
                        <div class="form-group my-2 p-3">
                            <input type="email" name="email" id="" class="form-control p-2" placeholder="Email">
                            @error('email')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group my-2 p-3">
                            <input type="password" name="password" id="" class="form-control p-2 " placeholder="Password">
                            @error('password')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class=" d-flex justify-content-end my-3 ">
                            <button class="singin-btn w-100 mx-3 btn  theme_bg"><i class="fa-solid fa-right-to-bracket"></i> Sign In</button>
                        </div>
                    </form>
                </div>
{{--                <div class="card-footer py-3">--}}
{{--                    I forget my password--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</body>
</html>
