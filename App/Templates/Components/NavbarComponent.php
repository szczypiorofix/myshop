<?php

namespace Templates\Components;

class NavbarComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent($params) {
        $username = 'Login / Register';
        $route = 'login';
        if ($params['loggedIn']) {
            $username = 'Janek';
            $route = 'admin';
        }

        return 
<<<HTML
<div class="navbar">
    <a class="navbar-btn" href="/myshop">..:: MyShop ::..</a>
    <input type="text" class="navbar-input" placeholder="Szukaj...">
    <button class="navbar-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
    <a class="navbar-btn" href="/myshop/{$route}">{$username}</a>
    <a class="navbar-btn" href="/myshop/contact">Kontakt</a>
</div>
HTML;
    }
}
