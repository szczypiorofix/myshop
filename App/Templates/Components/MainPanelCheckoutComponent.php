<?php

namespace Templates\Components;

class MainPanelCheckoutComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent() {
        $checkoutUrl = BASE_HREF.'checkout';
        return 
<<<HTML
<div class="mainpanel">
        <h1>HELLO CHECKOUT</h1>
</div>
HTML;
    }
}