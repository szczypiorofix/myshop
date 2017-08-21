<?php

namespace Core\Framework\MVC;

abstract class View {
    
    /**
    * Nazwa pliku domyslnego template'a. 
    * @const DEFAULT_TEMPLATE_FILENAME
    */
    const DEFAULT_TEMPLATE_FILENAME = TEMPLATES_DIR.'default.php';
    
    /**
     * Metoda wywołująca widok.
     * @param array $params Parametry przekazywane do pliku template'a.
     */
    abstract public function show($params);
}
