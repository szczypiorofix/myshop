<?php

namespace Routes;
use \Core\FrameworkException;

class Router {
    
    static private $routes = array();
    
    static public function addRoute($route, $controller, $method) {
        if (!isset(self::$routes[$route])) {
        self::$routes[$route] = ['controller' => $controller, 'method' => $method];
            return true;
        }
        throw new FrameworkException('Błąd!!! Podany route już istnieje!');
    }
    
    static public function routeExists($route) {
        if (isset(self::$routes[$route])) {
            return true;
        }
        return false;
    }
    
    static public function getAllRoutes() {
        return self::$routes;
    }
    
    static public function getMethod($route) {
        if (isset(self::$routes[$route])) {
            return self::$routes[$route]['method'];
        }
        throw new FrameworkException('Brak elementu '.$route.' !!!');
    }
    
    static public function getController($route) {
        if (isset(self::$routes[$route])) {
            return self::$routes[$route]['controller'];
        }
        throw new FrameworkException('Brak elementu '.$route.' !!!');
    }
    
    static public function getRoute($route) {
        if (isset(self::$routes[$route])) {
            return self::$routes[$route];
        }
        throw new FrameworkException('Brak elementu '.$route.' !!!');
    }
    
    static public function redirect404() {
        header("HTTP/1.0 404 Not Found");
        header("Location: page404.html");
        exit();
    }
    
}
