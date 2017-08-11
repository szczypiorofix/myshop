<?php

namespace Core\Framework\MVC;

abstract class View {
    
    const DEFAULT_TEMPLATE_FILENAME = TEMPLATES_DIR.'default.php';
    
    public abstract function show($params = []);
}
