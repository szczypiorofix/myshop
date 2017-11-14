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
    <div class="login-register">
        <h3>LOGIN</h3>
        <div class="input-group">
            <p>login:</p>
            <input type="text">
            <p>password:</p>
            <input type="text">
            <button>Login</button>
        </div>
        <h3>OR REGISTER</h3>
        <div class="input-group">
            <p>login:</p>
            <input type="text">
            <p>e-mail:</p>
            <input type="email">
            <p>password:</p>
            <input type="password">
            <p>re-type password:</p>
            <input type="password">
            <button>Login</button>
        </div>
    </div>
</div>
HTML;
    }
}