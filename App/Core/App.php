<?php

namespace Core;

/**
 * This is the first class of the shop app.
 *
 * @author Piotrek
 */
class App {
    
    const DEFAULT_CLASS = 'postlist'; // DEFAULT PAGE
    const DEFAULT_METHOD = 'defaultmethod';
    private static $class = self::DEFAULT_CLASS;
    
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
        
        self::route();
        self::start();
    }
    
    
    private static function route() {
        $url = self::parseUrl();
        var_dump($url);
         
//         $calledDefaultClass = false;
//         if (file_exists(PAGES.$url[0].'.php')) {
//            self::$class = $url[0];
//            unset($url[0]);
//        }
//        else {
//           self::$class = self::DEFAULT_CLASS;
//           $calledDefaultClass = true;
//        }
//        
//        $class = "\pages\\".self::$class;
//        //self::$class = new $class();
//        
//         if ($calledDefaultClass) {
//            if (isset($url[0]) && method_exists(self::$class, $url[0])) {
//             $this->method = $url[0];
//             unset($url[0]);
//            }
//         }
//         else {
//            if (isset($url[1]) && method_exists(self::$class, $url[1])) {
//             $this->method = $url[1];
//             unset($url[1]);
//            }
//        }
//        
//        $params = $url ? array_values($url) : [];
        //call_user_func_array([$this->class, $this->method], array($params));
    }
    
    private static function parseUrl()
    {
        if (filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING) !== NULL) {
           //return $url = explode('/', filter_var(rtrim(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING),'/'), FILTER_SANITIZE_URL));
           return $url = explode('/', rtrim(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING),'/'));
        }
    }
    
    private static function start() {
        include ROOT.'view'.DS.'index.html';
    }
}
