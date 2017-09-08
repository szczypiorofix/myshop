<?php

namespace Templates\Components;

class SideBarComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent() {
          return 
<<<HTML
<div class="sidebar">
    <p>Hello sidebar!</p>
</div>
HTML;
    }
}
