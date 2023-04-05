
<div class="col-md-3 side-col border-success">
    <div class="card w-100 profile-card border-0 card-body animate__animated animate__fadeLeft " style="border: 1px solid green!important;">
        <div class="text-center">
            <div class="avatar avatar-xl mb-2">
                {{--<img class="avatar-img rounded-circle border border-2 border-white" width="80" height="80" src="{{asset("frontend-assets/images/employee_profile_1.jpg")}}" alt="">--}}
                <i class="fa-solid fa-circle-user"></i>
            </div>
            <h6 class="mb-0 name title-fm">{{$user->name}}</h6>
            <a href="#" class="text-reset title-fm text-primary-hover small d-block d-md-none d-lg-block">{{$user->email}}</a>
            <hr>
        </div>
        <ul class="nav nav-pills-primary-soft flex-column ">
            <li class="nav-item">
                <a class="nav-link title-fm {{ Request::is('pricelist') || Request::segment(1) == 'pricelist' ? 'active' : '' }}" href="{{route('priceList')}}"><i class="fa-solid fa-list me-2"></i><span>{{ __('message.price_list') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link title-fm {{ Request::is('profile') ? 'active' : '' }}" href="{{route('profile')}}"><i class="fa fa-user me-2"></i><span>{{ __('message.my_profile') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link title-fm {{ Request::is('edit-profile') ? 'active' : '' }}" href="{{route('edit-profile')}}"><i class="fa-solid fa-pen-to-square me-2"></i><span>{{ __('message.edit_profile') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link title-fm {{Request::is('change-password') ? 'active': ''}}" href="{{route('change-password')}}"><i class="fa-solid fa-lock me-2"></i><span class="d-inline d-md-none d-lg-inline">{{ __('message.change_password') }}</span><span class="d-none d-md-inline d-lg-none">{{ __('message.change_password') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" id="logout">
                    <i class="fa-solid fa-right-from-bracket me-2"></i><span class="title-fm">{{ __('message.logout') }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>


