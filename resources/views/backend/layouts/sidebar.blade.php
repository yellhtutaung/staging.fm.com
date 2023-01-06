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

            <ul class="m-0 p-0">
                <li id="user" class="dropNav" >
                    <a class="{{ Route::currentRouteName() == 'userList' ? 'active-link' : null}}" href="" onclick="dropTagAction('user')">
                        <i class="fa fa-diamond"></i>
                        <span>Users Management</span>
                    </a>
                </li>

                <li id="fruit" class="dropNav {{ Request::segment(2) == 'fruit'  ?  'open-drop' : null }}" >
                    <a class="{{ Request::segment(2) == 'fruit' ? 'active-link' : null}}" href="javascript:void(0)" onclick="dropTagAction('fruit')">
                        <i class="fa fa-diamond"></i>
                        <span>Fruits Management</span>
                        <i class="fa fa-angle-right aside-icon " id="fruit-icon"></i>
                    </a>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'fruitList' ? 'active-route' : null}}"><a class="w-100 " href="{{route('fruitList')}}">List</a></li>
                        <li class="{{ Route::currentRouteName() == 'addFruit' ? 'active-route' : null}}"><a class="w-100 " href="{{route('addFruit')}}">Add</a></li>
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
