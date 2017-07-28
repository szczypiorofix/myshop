<?php

namespace Core;
use RuntimeException;

class AutoLoader {

    private function __construct() {}
    private function __clone() {}
    
    public static function run() {
        spl_autoload_register(array(self::class, 'loadClass'));
    }

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

AutoLoader::run();