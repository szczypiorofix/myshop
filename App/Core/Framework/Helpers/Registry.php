<?php

namespace Core\Framework\Helpers;
use Exception;

class Registry {
    
    static private $_store = array();
    
    private function __construct() {}
    private function __clone() {}
    
    static public function set($object, $name = null) {
        $name = (!is_null($name)) ?: get_class($object);
        $name = strtolower($name);
        $return = null;
        if (isset(self::$_store[$name])) {
            $return = self::$_store[$name];
        }
        self::$_store[$name] = $object;
        return $return;
    }
    
    static public function contains($name) {
        if (isset(self::$_store[$name])) {
            return true;
        }
        return false;
    }
    
    static public function get($name) {
        if (!self::contains($name)) {
            throw new Exception('NIE MA TAKIEGO OBIEKTU: '.$name);
        }
        return self::$_store[$name];
    }
    
    static public function remove($name) {
        if (self::contains($name)) {
            unset(self::$_store[$name]);
            return true;
        }
        return false;
    }
}
