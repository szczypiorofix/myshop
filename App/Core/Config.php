<?php
namespace Core;
use Core\FrameworkException;

final class Config {
    
    private static $instance = null;
    private $config_data = array();
    
    private function __construct() {
        $this->config_data = parse_ini_file(CONFIG_FILE);
    }

    private function __clone() {}
    
    final private static function getInstance() {
        if (!self::$instance) {
          self::$instance = new Config();
        }
        return self::$instance;
    }

    final private static function configFileExists() {
        return (file_exists(CONFIG_FILE) && is_file(CONFIG_FILE));
    }

    final public static function get($key) {
        if (self::configFileExists()) {
            if (isset(self::getInstance()->config_data[$key])) {
                return self::getInstance()->config_data[$key];
            }
            else {
                try {
                    throw new FrameworkException("Brak takiego klucza: ".$key);
                } catch (FrameworkException $ex) {
                    echo $ex->showError();
                }
            }
        }
        else {
            try {
                throw new FrameworkException("Plik konfiguracji 'config' nie istnieje!");
            } catch (FrameworkException $ex) {
                echo $ex->showError();
            }
            
        }
        return NULL;
    }
}
