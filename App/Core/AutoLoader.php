<?php

namespace Core;
use RuntimeException;

/**
 * Klasa Autoloader - ładuje pliki klas, które są wywoływane do użycia
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class AutoLoader {

    private function __construct() {}
    private function __clone() {}

    /**
     * Funkcja run - inicjuje klasę autoloader.
     */
    public static function run() {
        spl_autoload_register(array(self::class, 'loadClass'));
    }

    /**
     * Funkcja loadClass - funkcja pomocnicza, która ustala reguły ładowania pliku z klasą w momencie jej użycia.
     * @param String $className - nazwa klasy
     * @throws RuntimeException
     */
    public static function loadClass($className) {
        $classFile = str_replace('\\', DS, $className);
        $classFileName = sprintf('%s%s%s.php', APP_DIR, DS, $classFile);
        if (file_exists($classFileName)) {
            include($classFileName);
        }
        else {
            throw new \RuntimeException(sprintf('Brak pliku %s dla klasy %s', $classFileName, $className));
        }
    }
}
