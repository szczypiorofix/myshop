<?php

namespace Templates\Components;

class JumbotronComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent() {
        $route = 'window.location.href = \''.BASE_HREF.'cart\'';
        return 
<<<HTML
    <div class="jumbotron">
        <div class="shopping-cart">
            <button class="shopping-cart button" onclick="{$route}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span id="shopping-cart-price-id" class="shopping-cart price">0.00</span>
                <span id="shopping-cart-currency-id" class="shopping-cart currency">PLN</span>
            </button>
        </div>
    </div>
HTML;
    }
}