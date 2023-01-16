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
                        <a href="/">{{ __('messages.home') }}</a>
                        <a href="#services">{{ __('messages.service') }}</a>
                        <a href="#aboutus">{{ __('messages.about') }}</a>
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
                        <select class="form-control changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="mm" {{ session()->get('locale') == 'mm' ? 'selected' : '' }}>Myanmar</option>
                        </select>
{{--                        <div class="lan-dropdown">--}}
{{--                            <a href="javascript:void(0);" id="lan_action">English</a>--}}
{{--                            <ul class="lan-dropdown-menu">--}}
{{--                                <li class="first"><a class="" href="#">Myanmar</a></li>--}}
{{--                                <li class="last"><a class="" href="#">English</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
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

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(){
        console.log($(this).val());
        window.location.href = url + "?lang="+ $(this).val();
    });


</script>
