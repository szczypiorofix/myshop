<?php

namespace Core\Framework;
use Exception;

class Event {
    
    static protected $callbacks = array();
    
    static public function registerCallback($eventName, $callback) {
        if (!is_callable($callback)) {
            throw new Exception("Niepoprawna funkcja zwrotna!");
        }
        $eventName = strtolower($eventName);
        self::$callbacks[$eventName][] = $callback;
    }
    
    static public function trigger($eventName, $data) {
        if (isset(self::$callbacks[$eventName])) {
            foreach (self::$callbacks[$eventName] as $callback) {
                $callback($data);
            }
        }
    }
    
}
