<nav class="d-flex justify-content-between align-items-center header p-3">
    <div class="menuContainer">
        <span  style="margin-left: 10px"  class="menu" ><i class="fa-solid fa-bars fs-4 "></i></span>
    </div>


    <div class="dropdown">
        <a class="text-decoration-none text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
{{--             <img style="width: 40px;" src="{{ asset('images/red_setting_icon.png') }}" alt=""> <span class="fs-6 ms-2">Aung Zaw Phyo</span>--}}
            <span class="material-symbols-rounded p-2" style="font-size: 25px">
                        account_circle
                    </span>
        </a>
        <ul class="dropdown-menu std-box-shadow content-fm" aria-labelledby="dropdownMenuButton1">
            <li class="list-item d-flex align-items-center">
                <span class="material-symbols-rounded me-3">admin_panel_settings</span>
                <span>{{Auth::guard('admin')->user()->name}}</span>
{{--                <small> ( {{Auth::guard('admin')->user()->roleInfo->name}} )</small>--}}
            </li >
            <li class="list-item d-flex align-items-center" id="goPublic">
                <span class="material-symbols-rounded me-3">public</span> <span>Public Site</span>
            </li>
            <li class="list-item d-flex align-items-center" id="profileInfo">
                <span class="material-symbols-outlined me-3">badge</span> <span>Profile Information</span>
            </li>
            <li class="list-item d-flex align-items-center" id="updateProfile">
                <span class="material-symbols-rounded me-3">settings_suggest</span> <span>Update Profile</span>
            </li>
            <li class="list-item d-flex align-items-center" id="logout">
                <span class="material-symbols-rounded me-3">logout</span> <span>Logout</span>
            </li>
            <form action="{{ route('admin.logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
        </ul>
    </div>

</nav>


<script>
    $(document).ready(function () {
        $('#logout').on('click', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: '{{ __('message.logout_confirm') }}',
                showCancelButton: true,
                cancelButtonText: '{{ __('message.cancel_btn') }}',
                confirmButtonText: '{{ __('message.confirm_btn') }}',
                denyButtonText: `Don't save`,
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.logout') }}",
                        type: "POST",
                        success: function () {
                            window.location.reload()
                        }
                    })
                }
            })

        })

        $('#goPublic').on('click', function () {
            window.open('/', '_blank');
        })

        $('#profileInfo').on('click', function () {
            window.location.replace('{{route('accountDetails', Auth::guard('admin')->user()->token)}}')
        })

        $('#updateProfile').on('click', function () {
            window.location.replace('{{route('editAccount', Auth::guard('admin')->user()->token)}}')
        })

    })

</script>
