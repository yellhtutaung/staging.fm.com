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
            <div>
                <img src="{{asset('frontend-assets/images/freshmoe_logo.png')}}" alt="Freshmoe Logo" class="main_logo img-fluid" />
            </div>
        </nav>
        <nav class="navigation_bar web">
            <div class="left_navigation_bar">
                <ul>
                    <li>
                        <a href="javascript:void(0)" onclick="overlayOpen()" class="menu_button ">
                            <i class="fa-sharp fa-solid fa-bars"></i>
                        </a>
                        <a href="/"> Home</a>
                    </li>
                </ul>
            </div>
            <img src="{{asset('frontend-assets/images/freshmoe_logo.png')}}" alt="Freshmoe Logo" class="main_logo img-fluid" />
            <div class="right_navigation_bar">

            </div>
        </nav>
    </section>
</div>

<script>
    const overlayOpen = () => {
        document.getElementById("navbar_overlay").style.height = "100%";
        console.log('click')
    }
    const overlayClose = () => {
        document.getElementById("navbar_overlay").style.height = "0%";
    }
</script>
