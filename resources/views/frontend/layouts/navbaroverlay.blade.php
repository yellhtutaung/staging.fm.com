<div id="navbar_overlay" class="overlay">
    <a href="javascript:void(0)" onclick="overlayClose()"  class="closebtn" >&times;</a>
    <div class="overlay-content">

        <a href="{{route('mainPage')}}">{{ __('message.home') }}</a>
        <a href="/employees">{{ __('message.employees_hero') }}</a>
        <a href="/client">{{ __('message.client_hero') }}</a>
        <a href="/partnerships">{{ __('message.partnerships') }}</a>
        <a href="/target-market">{{ __('message.target_market') }}</a>
        <a href="/coldchain-transport">{{ __('message.cold_chain_and_transport') }}</a>
        @if(auth()->check())
            <a href='{{route('priceList')}}' >{{ __('message.price_list') }}</a>
            <a href='{{route('profile')}}' >{{ __('message.profile') }}</a>
            <a href="javascript:void(0)" id="logout-btn">{{ __('message.logout') }}</a>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
        @else
            <a href="/register">{{ __('message.register') }}</a>
            <a href="{{route('login')}}">{{ __('message.login') }}</a>
        @endif
    </div>
</div>
<script>
    $('#logout-btn').click(function () {
        $('#logout-form').submit();
    })
</script>
