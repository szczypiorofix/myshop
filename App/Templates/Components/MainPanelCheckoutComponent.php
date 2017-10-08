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
        <h1>This is checkout view</h1>
        <h2>Tutaj będzie zawartość podsumowania zamówienia ...</h2>
</div>
HTML;
    }
}