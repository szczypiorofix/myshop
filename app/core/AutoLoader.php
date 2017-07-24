<?php

namespace core;

/**
 * AutoLoader class
 *
 * @author Piotrek
 */
class AutoLoader {
    
    const DIR_CLASSES = 'app';

    private function __construct() {}
    private function __clone() {}
    
    public static function run() {
        self::autoload();
    }

    private static function autoload() {
        spl_autoload_register(array(self::class, 'loadClass'));
    }

    public static function loadClass($className) {
        $classFile = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        $classFileName = sprintf('%s%s%s.php', self::DIR_CLASSES, DIRECTORY_SEPARATOR, $classFile);
        if (file_exists($classFileName)) {
            include($classFileName);
        }
        else {
            throw new \RuntimeException(sprintf('Brak pliku %s dla klasy %s', $classFileName, $className));
        }
    }
}

AutoLoader::run();