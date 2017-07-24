<?php

namespace core;

/**
 * This is the first class of the shop app.
 *
 * @author Piotrek
 */
class App {
    
    private function __construct() {}
    private function __clone() {}
    
    public static function init() {
        define("DS", DIRECTORY_SEPARATOR);
        define("ROOT", getcwd().DS);
        echo 'APP.INIT();';
        self::show();
    }
    
    private static function show() {
        include ROOT.'view'.DS.'index.html';
    }
}
