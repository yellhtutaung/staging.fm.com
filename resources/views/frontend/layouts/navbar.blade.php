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
        <div class="container">
            <nav class="navigation_bar web">
                <div class="left_navigation_bar">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" onclick="overlayOpen()" class="menu_button ">
                                <i class="fa-sharp fa-solid fa-bars"></i>
                            </a>
                            <a href="/">{{ __('message.home') }}</a>
                            <a href="{{route('mainPage')}}#services">{{ __('message.services') }}</a>
                            <a href="{{route('mainPage')}}#aboutus">{{ __('message.about') }}</a>
                        </li>
                    </ul>
                </div>
                <img href="{{route('mainPage')}}" src="{{asset('frontend-assets/images/freshmoe_logo.png')}}" alt="Freshmoe Logo" class="main_logo img-fluid" />
                <div class="right_navigation_bar">
                    <ul class="d-flex justify-content-end">
                        <li>
                            @if(auth()->check())
                                <a href='{{route('priceList')}}' >{{ __('message.price_list') }}</a>
                                <a href='{{route('profile')}}' >{{ __('message.profile') }}</a>
                            @else
                                <a href="#it_products">{{ __('message.web_and_app') }}</a>
                                <a href="{{route('mainPage')}}#mission">{{ __('message.mission') }}</a>
                            @endif
                            <a href="{{route('mainPage')}}#contact">{{ __('message.contact') }}</a>
                        </li>
                        <li>
                            <select class="form-select border-0 changeLang">
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                <option value="mm" {{ session()->get('locale') == 'mm' ? 'selected' : '' }}>မြန်မာ</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
        let language = $(this).val();
        $.post("/lang/change",
            {
                lang: language,
                token: csrf_token
            },
            function (data, status) {
                console.log(data.data, status);
                if(data.status == 200)
                {
                    window.location.reload();
                }
            }
        )

    });
</script>
