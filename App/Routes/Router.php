<?php

namespace Routes;
use \Core\FrameworkException;

/**
 * Klasa Routera aplikacji.
 */
final class Router {
    
    static private $routes = array();
    
    final public static function addRoute($route, $controller, $method) {
        if (!isset(self::$routes[$route])) {
        self::$routes[$route] = ['controller' => $controller, 'method' => $method];
            return true;
        }
        throw new FrameworkException('Błąd!!! Podany route już istnieje!');
    }
    
    final public static function routeExists($route) {
        if (isset(self::$routes[$route])) {
            return true;
        }
        return false;
    }
    
    final public static function getAllRoutes() {
        return self::$routes;
    }
    
    final public static function getMethod($route) {
        if (isset(self::$routes[$route])) {
            return self::$routes[$route]['method'];
        }
        throw new FrameworkException('Brak elementu '.$route.' !!!');
    }
    
    final public static function getController($route) {
        if (isset(self::$routes[$route])) {
            return self::$routes[$route]['controller'];
        }
        throw new FrameworkException('Brak elementu '.$route.' !!!');
    }
    
    final public static function getRoute($route) {
        if (isset(self::$routes[$route])) {
            return self::$routes[$route];
        }
        throw new FrameworkException('Brak elementu '.$route.' !!!');
    }
    
    final public static function redirect404() {
        header("HTTP/1.0 404 Not Found");
        header("Location: page404.html");
        exit();
    }
    
}
