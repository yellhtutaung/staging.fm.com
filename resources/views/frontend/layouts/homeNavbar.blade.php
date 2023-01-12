<div>

    {{--    navbaroverlay start--}}
    <?php echo View::make ('frontend.layouts.navbaroverlay'); ?>
    {{--    navbaroverlay end --}}

    <section id="top_brand_bar">
        <div class="green_block"></div>
        <div class="white_block"></div>
        <div class="red_block"></div>
        <nav class="navigation_bar mobile">
            <div class="mobile_menu_icon">
                <a href="javascript:void(0)" onclick="overlayOpen()" class="menu_button ">
                    <i class="fa-sharp fa-solid fa-bars"></i>
                </a>
            </div>
            <a href="{{route('mainPage')}}"  >
                <img src="{{asset('frontend-assets/images/freshmoe_logo.png')}}" alt="Freshmoe Logo" class="main_logo img-fluid" />
            </a>
        </nav>
        <nav class="navigation_bar web">
            <div class="left_navigation_bar">
                <ul>
                    <li>
                        <a href="javascript:void(0)" onclick="overlayOpen()" class="menu_button ">
                            <i class="fa-sharp fa-solid fa-bars"></i>
                        </a>
                        <a href="/"> Home</a>
                        <a href="#services">Services</a>
                        <a href="#aboutus">About Us</a>
                    </li>
                </ul>
            </div>
            <img href="{{route('mainPage')}}" src="{{asset('frontend-assets/images/freshmoe_logo.png')}}" alt="Freshmoe Logo" class="main_logo img-fluid" />
            <div class="right_navigation_bar">
                <ul>
                    <li>
                        @if(auth()->check())
                            <a href='/pricelist' >Price List</a>
                        @else
                            <a href="#it_products">Website & Apps</a>
                        @endif
                        <a href="#mission">Mission</a>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <div class="lan-dropdown">
                            <a href="javascript:void(0);" id="lan_action">English</a>
                            <ul class="lan-dropdown-menu">
                                <li class="first"><a class="" href="#">Myanmar</a></li>
                                <li class="last"><a class="" href="#">English</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</div>

<script>

    $('document').ready(function () {
        $('.lan-dropdown-menu').hide()
    })

    $('#lan_action').on('click', function (e) {
        $('.lan-dropdown-menu').slideToggle()
    })

    const overlayOpen = () => {
        document.getElementById("navbar_overlay").style.height = "100%";
        console.log('click')
    }
    const overlayClose = () => {
        document.getElementById("navbar_overlay").style.height = "0%";
    }



</script>
