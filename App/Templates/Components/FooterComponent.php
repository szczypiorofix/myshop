<?php

namespace Templates\Components;

class FooterComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent() {
          return 
<<<HTML
<div class="footer">
    <p>Wróblewski Piotr 2017. All rights reserved.</p>
</div>
HTML;
    }
}