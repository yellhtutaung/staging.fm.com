
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Earner</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7c0ec42130.js" crossorigin="anonymous"></script>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(244,246,249);
        }

        .bg-green1{
            background-color: #5bba47;
        }

        .btn-width{
            width: 80px !important;
        }

        .menu{
            position: absolute;
            cursor: pointer ;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .sidebar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .sidebar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        .sidebar{
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 1000;
            overflow-y: scroll;
            transition: all .3s;
        }

        .main {
            margin-left: 250px;
            transition: margin-left .3s;
            z-index: 1;
            display: flex;
            flex-direction: column;
            height: 100vh !important;
        }

        footer {
            margin-top: auto !important;
            padding: 20px;
        }

        .sidebar-change-1 {
            left: -270px;
        }

        .main-change-1 {
            margin-left: 0px;
        }


        .logoContainer {
            margin-top: 15px;
            /* background-color: rgba(0, 128, 0, 0.797); */
            background-color: #3c8132;
            border-radius: 10px;
            color: white;
        }

        .logoContainer > a {
            display: inline-block;
            width: 100% !important;
        }

        .linkHeader {
            font-size: 19px;
            font-weight: 500;
        }

        .link {
            display: inline-block;
            text-decoration: none;
            color: black;
            font-size: 18px;
            padding: 6px;
            width: 100%;
            transition: all .2s;
        }


        .link:hover {
            background-color: #5bba47 ;
            color: white;
            border-radius: 10px;
        }

        @media screen and (max-width: 992px) {
            .sidebar{
                position: absolute !important;
                top: 0;
                left: -270px;
            }
            .main {
                margin-left: 0;
            }
            .sidebar-change-2 {
                left: 0;
            }
        }
    </style>
</head>
<body>

<div class="sidebar p-3 bg-light shadow">
    <div class="d-flex justify-content-center mb-3">
        <img class="w-100" src="{{asset('freshmoe_logo.png')}}" alt="">
    </div>
    <div class="p-2 logoContainer">
        <a class="text-decoration-none text-light fw-bold" href="#"><i class="fa-solid fa-house-chimney"></i> Dashboard</a>
    </div>

    <ul class="list-unstyled p-2 mt-3">
        <li class="linkHeader mb-2">
            Products Management
        </li>
        <li class="linkContainer">
            <a href="" class="link"><i class="fa-solid fa-list me-2"></i>Materials</a>
        </li>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item bg-transparent">
                <h2 class="accordion-header " id="flush-headingOne">
                    <button class="accordion-button bg-transparent ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#products" aria-expanded="false" aria-controls="products">
                        Materials
                    </button>
                </h2>
                <div id="products" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled">
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </ul>

    <ul class="list-unstyled p-2 mt-3">
        <li class="linkHeader mb-2">
            Category Management
        </li>
        <li class="linkContainer">
            <a href="" class="link"><i class="fa-solid fa-list me-2"></i>Categories</a>
        </li>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item bg-transparent">
                <h2 class="accordion-header " id="flush-headingOne">
                    <button class="accordion-button bg-transparent ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="false" aria-controls="category">
                        Categories
                    </button>
                </h2>
                <div id="category" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled">
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </ul>

    <ul class="list-unstyled p-2 mt-3">
        <li class="linkHeader mb-2">
            User Management
        </li>
        <li class="linkContainer">
            <a href="" class="link"><i class="fa-solid fa-users me-2"></i>Users</a>
        </li>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item bg-transparent">
                <h2 class="accordion-header " id="flush-headingOne">
                    <button class="accordion-button bg-transparent ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false" aria-controls="users">
                        Users
                    </button>
                </h2>
                <div id="users" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled">
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </ul>

    <ul class="list-unstyled p-2 mt-3">
        <li class="linkHeader mb-2">
            Adsliders Management
        </li>
        <li class="linkContainer">
            <a href="" class="link"><i class="fa-sharp fa-solid fa-images me-2"></i>Adsliders</a>
        </li>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item bg-transparent">
                <h2 class="accordion-header " id="flush-headingOne">
                    <button class="accordion-button bg-transparent ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false" aria-controls="users">
                        Users
                    </button>
                </h2>
                <div id="users" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled">
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                            <li class="py-2"><a href="" class=" link">Item 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </ul>

</div>


<div class="main">
    <div class="p-3">
        <nav class="d-flex justify-content-between">
            <div class="menuContainer">
                <span class="menu pt-2" ><i class="fa-solid fa-bars fs-4"></i></span>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><div class="dropdown-item" >username: johndoe</div></li>
                    <li><div class="dropdown-item" >email: johndoe@gmail.com</div></li>
                    <li>
                        <form action="#" method="POST">
                            <button class="btn btn-link">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="body pt-5">

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi eligendi ab ipsam quos sapiente labore nostrum recusandae, iure quae libero molestiae eveniet soluta cumque similique delectus sed. Corporis, facilis cupiditate.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi eligendi ab ipsam quos sapiente labore nostrum recusandae, iure quae libero molestiae eveniet soluta cumque similique delectus sed. Corporis, facilis cupiditate.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi eligendi ab ipsam quos sapiente labore nostrum recusandae, iure quae libero molestiae eveniet soluta cumque similique delectus sed. Corporis, facilis cupiditate.

        </div>
    </div>
    <footer class="shadow-lg">
        Copyright © 2022 FreshMoe. All rights reserved.
    </footer>
</div>

<script src="script.js"></script>

<script>
    const menu = document.querySelector(".menu");
    const sidebar = document.querySelector(".sidebar");
    const main = document.querySelector(".main");
    const body = document.querySelector(".body");

    menu.addEventListener("click", () => {
        if (window.screen.width > 992) {
            if (menu.classList.contains("clicked")) {
                sidebar.classList.remove("sidebar-change-1");
                main.classList.remove("main-change-1");
                menu.classList.remove("clicked");
            } else {
                sidebar.classList.add("sidebar-change-1");
                main.classList.add("main-change-1");
                menu.classList.add("clicked");
            }
        } else {
            sidebar.classList.add("sidebar-change-2");
            menu.classList.add("clicked");
        }
    });

    body.addEventListener("click", () => {
        if (window.screen.width < 992) {
            sidebar.classList.remove("sidebar-change-2");
            menu.classList.remove("clicked");
        }
    });

</script>

</body>
</html>

