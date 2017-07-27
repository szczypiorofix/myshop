<?php

namespace Controllers;

class DefaultController extends \Core\Framework\MVC\Controller {
    
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
}
