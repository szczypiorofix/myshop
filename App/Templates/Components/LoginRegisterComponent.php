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
    <div class="login-register-main-div">
        <div class="login-register-main-div login">
            <p>Login</p>
            <div class="form-horizontal">
                <div class="input-group">
                    <label class="form-label">E-mail</label>
                    <div class="form-input">
                        <input type="text" placeholder="E-mail" required/>
                    </div>   
                </div>
                <div class="input-group">
                    <label class="form-label">Password</label>
                    <div class="form-input">
                        <input type="password" placeholder="Hasło" required/>
                    </div>   
                </div>
            </div>
        </div>
        <div class="login-register-main-div or">
            <p>-or-</p>
        </div>
        <div class="login-register-main-div register">
            <p>register</p>
        </div>
    </div>
</div>
HTML;
    }
}