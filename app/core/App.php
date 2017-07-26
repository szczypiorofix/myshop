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
        define('UPLOADED_IMAGES', MEDIA.'images'.DS);
        define('UPLOADED_FILES', MEDIA.'files'.DS);
        define('BASE_HREF', \core\Config::get("BASE_HREF"));
        echo 'APP.INIT();';
        //var_dump($_SERVER);
        
        $mymodel = new \core\HomeModel();
        framework\Registry::set($mymodel);
        
        $read = framework\Registry::get('core\homemodel');
        echo $read->getName();
        
        framework\Event::registerCallback('job', new LogCallback());
        
        framework\Event::registerCallback('job', function ($data) {
            echo "Czyszczenie pamięci " . PHP_EOL;
            var_dump($data);
        });
        
        $data = new MyNewJob();
        $data->job();
        
        self::start();
    }
    
    private static function start() {
        include ROOT.'view'.DS.'index.html';
    }
}
