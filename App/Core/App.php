<?php

namespace Core;
use Routes\Router;
use Core\FrameworkException;
use Core\Framework\MVC\Controller;

//use Models;
//use Controllers;
//use Views;


/**
 * Klasa App - główna klasa aplikacji.
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class App {
    
    private static $useDefaultController = true;
    private static $useDefaultMethod = true;
    private static $class = Controller::DEFAULT_CONTROLLER;
    private static $method = Controller::DEFAULT_CONTROLLER_METHOD;
    private static $model = null;
    private static $view = null;
    private static $controller = null;
    
    
    private function __construct() {}
    private function __clone() {}
    
    /**
     * App::init(); - funkcja inicjująca wywołaie aplikacji.
     */
    public static function init() {
        
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
        
        try {
            Router::addRoute('', 'HomeController', 'index');
            Router::addRoute('default', 'DefaultController', 'default');
            Router::addRoute('home', 'HomeController', 'home');
        } catch (FrameworkException $ex) {
            echo $ex->showError();
        }

        $url = self::parseUrl();
        if (!isset($url[0])) {
            self::$controller = Controller::DEFAULT_CONTROLLER;
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
        
        // Tworzenie widoku
        self::$view = "\Views\\".ucwords(self::$controller)."View";
        self::$view = new self::$view();
        
        // Tworzenie kontrolera
        self::$controller = "\Controllers\\".ucwords(self::$controller)."Controller";
        self::$controller = new self::$controller(self::$model, self::$view);

        if (self::$useDefaultController) {
            if (isset($url[1]) && method_exists(self::$controller, self::$method)) {
                self::$method = $url[1]; 
                unset($url[1]);  
            }
            else {
                self::$method = Controller::DEFAULT_CONTROLLER_METHOD;
            }            
        }
        else {
            if (isset($url[0]) && method_exists(self::$controller, self::$method)) {
                self::$method = $url[0]; 
                unset($url[0]);  
            }
            else {
                self::$method = Controller::DEFAULT_CONTROLLER_METHOD;
            }  
        }

        echo 'Controller: '.self::$controller.'<br>';
        echo 'Method: '.self::$method.'<br>';
        echo 'Model: '.self::$model.'<br>';
        echo 'View: '.self::$view.'<br>';
        
        $params[] = $url ? array_values($url) : [];
        //var_dump($params);
        call_user_func_array([self::$controller, self::$method], $params);
    }
    
    /**
     * Metoda sprawdzająca obecność pliu na serwerze o podanej nazwie - case sensitive.
     * @param type $filename - nazwa pliku
     * @return boolean - true jeśli plik istnieje
     */
    private static function fileExists($filename) {
        if (file_exists($filename)) {
            return true;
        }
        $filename_lowercase = strtolower($filename);
        foreach (glob(dirname($filename) . '/*') as $file) {
            if (strtolower($file) === $filename_lowercase) {
                return true;
            }
        }
        return false;
    }
    
    /**
     * Metoda rozbijająca url na tablicę parametrów.
     * @return type - zwracana tablica parametrów url
     */
    private static function parseUrl()
    {
        if (filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING) !== NULL) {
           //return $url = explode('/', filter_var(rtrim(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING),'/'), FILTER_SANITIZE_URL));
           return $url = explode('/', rtrim(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING),'/'));
        }
    }
}
