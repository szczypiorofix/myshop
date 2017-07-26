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
        define("APP_PATH", ROOT . 'app' . DS);
        define("APP_CORE_PATH", APP_PATH . 'core' . DS);
        define('APP_LIBS', APP_CORE_PATH.'libs'.DS);
        define("CONFIG_PATH", "");
        define('DB_PATH', APP_CORE_PATH . "database" . DS);
        define('PAGES', APP_PATH . "pages" . DS);
        define('IMAGES', ROOT.'images'.DS);
        define('MEDIA', 'media'.DS);
        define('DB_MYSQL', APP_CORE_PATH.'mysql'.DS);
        define('DB_UPDATES', DB_MYSQL.'updates'.DS);
        define('UPLOADED_IMAGES', MEDIA.'images'.DS);
        define('UPLOADED_FILES', MEDIA.'files'.DS);
        define('BASE_HREF', \core\Config::get("BASE_HREF"));
        echo 'APP.INIT();';
        self::show();
    }
    
    private static function show() {
        include ROOT.'view'.DS.'index.html';
    }
}
