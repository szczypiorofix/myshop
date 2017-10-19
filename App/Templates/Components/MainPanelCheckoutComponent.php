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
        <h2>Tutaj będzie zawartość podsumowania zamówienia ...</h2>
        <h3>Zawartość koszyka</h3>
</div>
HTML;
    }
}