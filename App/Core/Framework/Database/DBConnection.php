<?php

namespace Core\Framework\Database;
use PDO, Core\Config, Core\FrameworkException;

/**
 * Klasa połączenia z bazą danych
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class DBConnection {
    
    private static $instance = null;
    private $db = null;
    private static $fatalError = false;
    
    private function __construct() {
        $db_host = Config::get('DB_HOST');
        $db_name = Config::get('DB_NAME');
        $db_user = Config::get('DB_USER');
        $db_pass = Config::get('DB_PASS');
        try {
            $dsn = "mysql:host=$db_host;port=3306;dbname=$db_name;charset=UTF8;";
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $this->db = new \PDO($dsn, $db_user, $db_pass, $opt);
        } catch (\PDOException $exc) {
                try {
                    throw new FrameworkException("Wykryto błąd połączenia z bazą danych!<br>".$exc->getMessage());
                } catch (FrameworkException $ex) {
                    echo $ex->showError();
                    self::$fatalError = true;
                }
        }
    }
    
    public static function isError() {
        return self::$fatalError;
    }
    
    public function getDB() {
        return $this->db;
    }
    
    public static function get() {
        if (is_null(self::$instance)) {
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }
}
