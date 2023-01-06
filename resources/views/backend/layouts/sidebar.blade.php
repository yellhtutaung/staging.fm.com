<div class="sidebar shadow">

    <div class="logo-container">
        <a href="/admin">
            <img class="logo" class="" src="{{ asset('freshmoe_logo.png') }}" alt="">
        </a>
    </div>
    <div class="aside-cover h-100">
        <aside class="p-2 pt-0 content-fm">
            <ul class=" m-0 p-0 pt-2">
                <li class="mt-0 "><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
            </ul>
            <ul class="m-0 p-0">
                <li id="comp" class="dropNav" >
                    <a href="javascript:void(0)" onclick="dropTagAction('comp')">
                        <i class="fa fa-diamond"></i>
                        <span>Fruits</span>
                        <i class="fa fa-angle-right aside-icon " id="comp-icon"></i>
                    </a>
                    <ul>
                        <li><a class="w-100" href="{{route('fruitList')}}">List</a></li>
                        <li><a class="w-100" href="{{route('addFruit')}}">Add</a></li>
                    </ul>

                </li>
{{--                <li id="chart"  class="dropNav">--}}
{{--                    <a href="javascript:void(0)" onclick="dropTagAction('chart')">--}}
{{--                        <i class="fa-solid fa-shield-halved"></i>--}}
{{--                        <span>Privacy Management</span>--}}
{{--                        <i class="fa fa-angle-right aside-icon " id="chart-icon"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li><p>Users Info</p></li>--}}
{{--                        <li><p>Posts guard</p></li>--}}
{{--                        <li><p>Bar chart</p></li>--}}
{{--                        <li><p>Histogram chart</p></li>--}}
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
