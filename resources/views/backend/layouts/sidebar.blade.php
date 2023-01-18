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
                <li id="user" class="dropNav {{ Route::currentRouteName() == 'userList'  ?  'open-drop' : null }}" >
                    <a class="{{ Route::currentRouteName() == 'userList' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('user')">
                        <i class="fa-solid fa-users"></i>
                        <span>Users Management</span>
                        <i class="fa fa-angle-right aside-icon " id="user-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'userList' ? 'active-route' : null}}"><a class="w-100 " href="{{route('userList')}}">List</a></li>
                    </ul>
                </li>
                <hr>

                <small class="text-muted " style="margin-left: 10px">Fruits Management</small>
                <li id="fruit" class="dropNav {{ Request::segment(2) == 'fruit'  ?  'open-drop' : null }}" >
                    <a class="{{ Request::segment(2) == 'fruit' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('fruit')">
                        <i class="fa-solid fa-list"></i>
                        <span>Fruits Management</span>
                        <i class="fa fa-angle-right aside-icon " id="fruit-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'fruitList' || Route::currentRouteName() == 'fruitHistory' || Route::currentRouteName() == 'editFruit' ? 'active-route' : null}}">
                            <a class="w-100 " href="{{route('fruitList')}}">List</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'addFruit' ? 'active-route' : null}}"><a class="w-100 " href="{{route('addFruit')}}">Add</a></li>
                    </ul>
                </li>
                <hr>

                <small class="text-muted " style="margin-left: 10px">Country Management</small>
                <li id="country" class="dropNav {{ Request::segment(2) == 'country'  ?  'open-drop' : null }}" >
                    <a class="{{ Request::segment(2) == 'country' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('country')">
                        <i class="fa-solid fa-flag"></i>
                        <span>Country Management</span>
                        <i class="fa fa-angle-right aside-icon " id="country-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'countryList' || Route::currentRouteName() == 'editCountry' ? 'active-route' : null}}"><a class="w-100 " href="{{route('countryList')}}">List</a></li>
                        <li class="{{ Route::currentRouteName() == 'addCountry' ? 'active-route' : null}}"><a class="w-100 " href="{{route('addCountry')}}">Add</a></li>
                    </ul>
                </li>
                <hr>

                <small class="text-muted " style="margin-left: 10px">Contact Management</small>
                <li id="contact" class="dropNav {{ Request::segment(2) == 'contact'  ?  'open-drop' : null }}" >
                    <a class="{{ Request::segment(2) == 'contact' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('contact')">
                        <i class="fa-solid fa-flag"></i>
                        <span>Contact Management</span>
                        <i class="fa fa-angle-right aside-icon " id="contact-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'contactMessageList' ? 'active-route' : null}}"><a class="w-100 " href="{{route('contactMessageList')}}">List</a></li>
                    </ul>
                </li>
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
