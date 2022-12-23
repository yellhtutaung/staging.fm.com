<nav class="d-flex justify-content-between align-items-center header p-3">
    <div class="menuContainer">
        <span class="menu" ><i class="fa-solid fa-bars fs-4"></i></span>
    </div>
{{--    <div class="dropdown">--}}
{{--        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--            <i class="fa-solid fa-user"></i>--}}
{{--        </button>--}}
{{--        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--            <li><div class="dropdown-item" >username: johndoe</div></li>--}}
{{--            <li><div class="dropdown-item" >email: johndoe@gmail.com</div></li>--}}
{{--            <li>--}}
{{--                <form action="{{route('admin.logout')}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <button class="btn btn-link">Logout</button>--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}

    <div class="dropdown">
        <a class="text-decoration-none text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{-- <img style="width: 40px;" src="{{ asset('images/red_setting_icon.png') }}" alt=""> <span class="fs-6 ms-2">Aung Zaw Phyo</span> --}}
            <span class="material-symbols-rounded p-2" style="font-size: 25px">
                        account_circle
                    </span>
        </a>
        <ul class="dropdown-menu std-box-shadow content-fm" aria-labelledby="dropdownMenuButton1">
            <li class="list-item d-flex align-items-center">
                <span class="material-symbols-rounded me-3">admin_panel_settings</span> <span>{{auth()->guard('admin')->user()->name}}</span>
            </li >
            <li class="list-item d-flex align-items-center">
                <span class="material-symbols-rounded me-3">task_alt</span> <span>User Analyst</span>
            </li>
            <li class="list-item d-flex align-items-center">
                <span class="material-symbols-rounded me-3">settings_suggest</span> <span>Profile Setting</span>
            </li>
            <li class="list-item d-flex align-items-center" id="logout">
                <span class="material-symbols-rounded me-3">logout</span> <span>Logout</span>
            </li>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
        </ul>
    </div>

</nav>


<script>
    $(document).ready(function () {
        $('#logout').on('click', function () {
            $('#logout-form').submit()
        })
    })
</script>
