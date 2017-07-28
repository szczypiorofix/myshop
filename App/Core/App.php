<?php

namespace Core;

class App {
    
    const DEFAULT_CLASS = 'postlist'; // DEFAULT PAGE
    const DEFAULT_METHOD = 'defaultmethod';
    private static $class = self::DEFAULT_CLASS;
    
    private function __construct() {}
    private function __clone() {}
    
    public static function init() {
        
        //define('BASE_HREF', getcwd().DS);
        
//        echo 'APP.INIT();';
//        //var_dump($_SERVER);
//        
//        $mymodel = new \Core\HomeModel();
//        Framework\Helpers\Registry::set($mymodel);
//        
//        $read = Framework\Helpers\Registry::get('core\homemodel');
//        echo $read->getName();
//        
//        Framework\Helpers\Event::registerCallback('job', new LogCallback());
//        
//        Framework\Helpers\Event::registerCallback('job', function ($data) {
//            echo "Czyszczenie pamięci " . PHP_EOL;
//            var_dump($data);
//        });
//        
//        $data = new MyNewJob();
//        $data->job();
//        
//        
//        
//        
//        $router = new \Routes\MainRouter();
//        
        
        
        
        //self::route();
        self::launch();
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
    
    private static function launch() {
        $model = new \Models\DefaultModel();
        $controller = new \Controllers\DefaultController($model);
        $view = new \Views\DefaultView($controller, $model);
        echo $view->show();
    }
}
