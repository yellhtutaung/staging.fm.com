<div class="sidebar shadow bg-light">

    <div class="logo-container">
        <a href="/admin">
            <img class="logo" class="" src="{{ asset('freshmoe_logo.png') }}" alt="">
        </a>
    </div>
    <div class="aside-cover h-100">
        <aside class="p-2 pt-0 content-fm">

            <ul class=" m-0 p-0 pt-2">
                <li class="mt-0 ">
                    <a class=" {{ Route::currentRouteName() == 'home' ? 'active-link' : null}}" href="/admin">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="m-0 p-0">
                <small class="text-muted hide-sidebar-account d-none" style="margin-left: 10px">Account Management</small>
                <li id="account" class="hide-sidebar-account d-none dropNa d-nonev {{ Request::segment(2) == 'account'  ?  'open-drop' : null }}" >
                    <a class="{{ Route::currentRouteName() == 'accountList' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('account')">
                        <i class="fa-solid fa-users"></i>
                        <span>Account </span>
                        <i class="fa fa-angle-right aside-icon " id="account-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'accountList' || Route::currentRouteName()  == 'addAccount' || Route::currentRouteName()  == 'editAccount' || Route::currentRouteName()  == 'accountDetails' ? 'active-route' : null}}">
                            <a class="w-100 " href="{{route('accountList')}}">List</a>
                        </li>
                    </ul>
                </li>
                <hr class="d-none hide-hr-sidebar-account">

                <small class="text-muted hide-sidebar-user d-none" style="margin-left: 10px">Users Management</small>
                <li id="user" class="dropNav  hide-sidebar-user d-none {{ Request::segment(2) == 'user'  ?  'open-drop' : null }}" >
                    <a class="{{ Route::currentRouteName() == 'userList' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('user')">
                        <i class="fa-solid fa-user"></i>
                        <span>Users </span>
                        <i class="fa fa-angle-right aside-icon " id="user-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'userList' || Route::currentRouteName() == 'editUser' || Route::currentRouteName() == 'userDetails' ? 'active-route' : null}}"><a class="w-100 " href="{{route('userList')}}">List</a></li>
                    </ul>
                </li>
                <hr class="d-none hide-hr-sidebar-user ">

                <small class="text-muted hide-sidebar-fruit d-none" style="margin-left: 10px">Fruits Management</small>
                <li id="fruit" class="hide-sidebar-li-fruit d-none dropNav {{ Request::segment(2) == 'fruit'  ?  'open-drop' : null }}" >
                    <a class="{{ Request::segment(2) == 'fruit' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('fruit')">
                        <i class="fa-solid fa-list"></i>
                        <span>Fruits </span>
                        <i class="fa fa-angle-right aside-icon " id="fruit-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'fruitList' || Route::currentRouteName() == 'fruitHistory' || Route::currentRouteName() == 'editFruit' ? 'active-route' : null}}">
                            <a class="w-100 " href="{{route('fruitList')}}">List</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'addFruit' ? 'active-route' : null}}"><a class="w-100 " href="{{route('addFruit')}}">Add</a></li>
                    </ul>
                </li>
                <hr class="d-none hide-hr-sidebar-fruit">

                <small class="text-muted hide-sidebar-country d-none" style="margin-left: 10px">Country Management</small>
                <li id="country" class="hide-sidebar-li-country d-none dropNav {{ Request::segment(2) == 'country'  ?  'open-drop' : null }}" >
                    <a class="{{ Request::segment(2) == 'country' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('country')">
                        <i class="fa-solid fa-flag"></i>
                        <span>Country </span>
                        <i class="fa fa-angle-right aside-icon " id="country-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'countryList' || Route::currentRouteName() == 'editCountry' ? 'active-route' : null}}"><a class="w-100 " href="{{route('countryList')}}">List</a></li>
                        <li class="{{ Route::currentRouteName() == 'addCountry' ? 'active-route' : null}}"><a class="w-100 " href="{{route('addCountry')}}">Add</a></li>
                    </ul>
                </li>
                <hr class="d-none hide-hr-sidebar-country">

                <small class="text-muted hide-sidebar-permission d-none" style="margin-left: 10px">Permissions Management</small>
                <li id="permission" class="dropNav hide-sidebar-li-permission d-none d-none {{ Request::segment(2) == 'permission'  ?  'open-drop' : null }}" >
                    <a class="{{ Request::segment(2) == 'permission' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('permission')">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Permissions </span>
                        <i class="fa fa-angle-right aside-icon " id="permission-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'permissionList' || Route::currentRouteName() == 'addPermission' || Route::currentRouteName() == 'editPermission' || Route::currentRouteName() == 'permissionDetails' ? 'active-route' : null}}">
                            <a class="w-100 " href="{{route('permissionList')}}">List</a>
                        </li>
                    </ul>
                </li>
                <hr class="hide-hr-sidebar-permission d-none">

                <small class="text-muted hide-sidebar-contact d-none" style="margin-left: 10px">Contact SMS</small>
                <li class="hide-sidebar-li-contact d-none {{ Route::currentRouteName() == 'contactMessageList' ? 'theme_bg text-white border-radius-5' : null}}">
                    <a class="{{ Request::segment(2) == 'contact' ? 'active-link text-white' : null}} " href="{{route('contactMessageList')}}">
                        <i class="fa fa-envelope"></i> Contact
                    </a>
                </li>

{{--                <li id="contact" class="dropNav {{ Request::segment(2) == 'contact'  ?  'open-drop' : null }}" >--}}
{{--                    <a class="{{ Request::segment(2) == 'contact' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('contact')">--}}
{{--                        <i class="fa-solid fa-envelope"></i>--}}
{{--                        <span>Contact Management</span>--}}
{{--                        <i class="fa fa-angle-right aside-icon " id="contact-icon"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li class="{{ Route::currentRouteName() == 'contactMessageList' ? 'active-route' : null}}"><a class="w-100 " href="{{route('contactMessageList')}}">List</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>

        </aside>
    </div>

</div>



























{{--<div class="sidebar bg-light shadow pt-2">--}}
{{--    <div class="d-flex justify-content-center img-logo-container p-3">--}}
{{--        <img class="img-logo" src="{{asset('freshmoe_logo.png')}}" alt="">--}}
{{--    </div>--}}

{{--    <aside class="px-3">--}}
{{--        <ul class="list-unstyled mt-3">--}}
{{--            <li class="logoContainer">--}}
{{--                <a href="" class="link"><i class="fas fa-home"></i> Dashboard</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <ul class="list-unstyled mt-3">--}}
{{--            <small class="my-3 text-muted ml-4">Price List</small>--}}
{{--            <li class="logoContainer">--}}
{{--                <a href="{{route('fruitList')}}" class="link">--}}
{{--                    <span class="material-symbols-rounded">nutrition</span>--}}
{{--                Fruits</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <ul>--}}

{{--        </ul>--}}
{{--    </aside>--}}

{{--</div>--}}
