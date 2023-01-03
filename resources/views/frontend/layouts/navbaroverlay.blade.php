<div id="navbar_overlay" class="overlay">
    <a href="javascript:void(0)" onclick="overlayClose()"  class="closebtn" >&times;</a>
    <div class="overlay-content">

        <a href="/">Home</a>
        <a href="/employees">Employees</a>
        <a href="/client">Client and Future Plans</a>
        <a href="/partnerships">About Partnerships</a>
        <a href="/target-market">Target of Market</a>
        <a href="/coldchain-transport">Cold Chain and Transportation</a>
        @if(auth()->check())
            <a href='/pricelist' >Price List</a>
            <a href="javascript:void(0)" id="logout-btn">Logout</a>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
        @else
            <a href="/register">Register</a>
        @endif
    </div>
</div>
<script>
    $('#logout-btn').click(function () {
        $('#logout-form').submit();
    })
</script>
