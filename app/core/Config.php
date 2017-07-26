<?php

namespace core;

/**
 * Description of Config
 *
 * @author Piotrek
 */
class Config {
    
    const CONFIG_FILE = CONFIG_PATH.'config.ini';
    private static $instance = null;
    private $config_data = array();
    
        private function __construct() {
        $this->config_data = parse_ini_file(self::CONFIG_FILE);
    }

    public function getInstance() {
        if (!self::$instance) {
          self::$instance = new Config();
        }
        return self::$instance;
    }

    public static function configFileExists() {
        return (file_exists(self::CONFIG_FILE) && is_file(self::CONFIG_FILE));
    }

    public static function get($key) {
        if (isset(self::getInstance()->config_data[$key])) {
           return self::getInstance()->config_data[$key];
        }
        return NULL;
    }
}
