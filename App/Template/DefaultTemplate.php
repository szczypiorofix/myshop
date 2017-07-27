<?php

namespace Template;

class DefaultTemplate {
    
    private static $instance = null;
    
    private function __construct() {}
    private function __clone() {}

    public static function getTemplate($params) {
        return '<html><head></head><body><h1>DEFAULT TEMPLATE: '.$params['imię'].' '.$params['nazwisko'].'</h1></body></html>';
    }
}
