<?php

namespace Templates;

class DefaultTemplate {
    const DEFAULT_TEMPLATE_FILENAME = TEMPLATES_DIR.'default.php';
    
    private function __construct() {}
    private function __clone() {}

    public static function getTemplate($params) {
        include_once self::DEFAULT_TEMPLATE_FILENAME;
    }
}
