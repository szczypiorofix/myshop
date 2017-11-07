<?php

namespace Templates\Components;

class LoginRegisterComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent($params) {

        return 
<<<HTML
<div class="mainpanel">
    <div class="login-register-main-panel">
        Podsumowanie zamówienia
    </div>
</div>
HTML;
    }
}