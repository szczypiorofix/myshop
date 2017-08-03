<?php

namespace Controllers;

class DefaultController extends \Core\Framework\MVC\Controller {
    
    private $model;
    
    public function __construct(\Core\Framework\MVC\Model $model) {
        $this->model = $model;
    }
}
