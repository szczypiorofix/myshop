<?php

namespace Templates;

class DefaultTemplate {
    const DEFAULT_TEMPLATE_FILENAME = 'default.php';
    private function __construct() {}
    private function __clone() {}

    public static function getTemplate($params) {
        include_once VIEWS_DIR . self::DEFAULT_TEMPLATE_FILENAME;
    }
}
