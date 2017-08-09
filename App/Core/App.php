<?php

namespace Core;
use Routes\Router;
use Core\FrameworkException;
//use Models;
//use Controllers;
use Views;

/**
 * Klasa App - główna klasa aplikacji.
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class App {
    
    const DEFAULT_CLASS = 'default'; // DEFAULT PAGE
    const DEFAULT_METHOD = 'index';
    private static $useDefaultController = true;
    private static $useDefaultMethod = true;
    private static $class = self::DEFAULT_CLASS;
    private static $method = self::DEFAULT_METHOD;
    private static $model = null;
    private static $view = null;
    private static $controller = null;
    
    
    private function __construct() {}
    private function __clone() {}
    
    /**
     * App::init(); - funkcja inicjująca wywołaie aplikacji.
     */
    public static function init() {
        
        
//        echo 'APP.INIT();';
//        var_dump($_SERVER);
//        
//        $mymodel = new \Models\DefaultModel();
//        Framework\Helpers\Registry::set($mymodel);
//        
//        var_dump(Framework\Helpers\Registry::getAll());
//        
//        //$read = Framework\Helpers\Registry::get('models\homemodel');
//        //echo $read->getName();
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
        

//        23:30 - GThoro: bardziej tak, zeby po indeksie bylo latwo znalezc
//        23:32 - GThoro: np. ['url' => ['class' => 'HomeController', 'method' => 'home']]
//        23:33 - GThoro: i wtedy sobie raz dwa sprawdzasz
//        23:33 - GThoro: isset($routing[$url])
//        23:33 - GThoro: i jak tak to pobierasz dane
//        23:33 - GThoro: a jak nie to 404
        
        
        try {
            Router::addRoute('', 'HomeController', 'index');
            Router::addRoute('default', 'DefaultController', 'default');
            Router::addRoute('home', 'HomeController', 'home');
        } catch (FrameworkException $ex) {
            echo $ex->showError();
        }
        
        $url = self::parseUrl();
        if (!isset($url[0])) {
            self::$controller = self::DEFAULT_CLASS;
        }
        else {
            if (Router::routeExists($url[0])) {
                self::$controller = $url[0];
                unset($url[0]);
                self::$useDefaultController = false;
            }
            else {
                Router::redirect404();
            }
        }

        // Tworzenie modelu
        self::$model = "\Models\\".ucwords(self::$controller)."Model";
        self::$model = new self::$model();
        
        // Tworzenie kontrolera
        self::$controller = "\Controllers\\".ucwords(self::$controller)."Controller";
        self::$controller = new self::$controller(self::$model);

        if (!self::$useDefaultController) {
            if (isset($url[1]) || method_exists(self::$controller, self::$method)) {
                self::$method = $url[1]; 
                unset($url[1]);
            }
            else {
                self::$method = self::DEFAULT_METHOD;
            }            
        }
        

        echo 'Controller: '.self::$controller.'<br>';
        echo 'Method: '.self::$method.'<br>';
        
        $params = $url ? array_values($url) : [];
        call_user_func_array([self::$controller, self::$method], $params);
        
        
        
        //self::$model
        
        self::$model->setData($url);
        
        
        //self::$controller = "\Controllers\\".ucwords(self::$controller)."Controller";
        //self::$controller = new self::$controller(self::$model);
        
        //self::$controller = new Controllers\HomeController(self::$model);
        self::$view = new Views\HomeView(self::$controller, self::$model);
        echo self::$view->show();
    }
    
    private static function fileExists($filename) {
        if (file_exists($filename)) {
            return true;
        }
        $filename_lowercase = strtolower($filename);
        foreach (glob(dirname($filename) . '/*')  as $file) {
            if (strtolower($file) === $filename_lowercase) {
                return true;
            }
        }
        return false;
    }
    
    private static function route() {
        
        //var_dump($url);
        
        
        
//        if (self::fileExists(CONTROLLERS_DIR.$url[0].'Controller.php')) {
//            self::$class = $url[0];
//            self::$useDefaultClass = false;
//        }
//        else {
//            self::$class = self::DEFAULT_CLASS;
//            self::$useDefaultClass = true;
//        }
         

        
        
        
        //call_user_func_array([self::$class, self::$method], null);
        
        
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
}
