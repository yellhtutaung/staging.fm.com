<div>
    <div id="open_go_to_shop" onclick="openCard()">
        <button>
            <i class="fa-solid fa-angle-left fs-3"></i>
        </button>
    </div>
    <div id="go_to_shop">
        <div class="shop_redirect_card">
            <div class="header">{{ __('message.cart_question') }}</div>
            <div class="body">{{ __('message.order_click') }}</div>
            <span onclick="closeCard()" class="close_card">&times;</span>
            <a href="" class="redirect_btn secondary-radius w-100 text-center fw-bold">{{ __('message.go_shoping') }}</a>
{{--            https://staging.freshmoe.shop--}}
        </div>
    </div>
</div>
