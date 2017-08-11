<?php

namespace Core\Framework\MVC;

abstract class Controller {
    
    const DEFAULT_CONTROLLER_METHOD = 'index';
    const DEFAULT_CONTROLLER = 'default';
    private $model = null;
    private $view = null;
    
    public function __construct(\Core\Framework\MVC\Model $model, \Core\Framework\MVC\View $view) {
        $this->model = $model;
        $this->view = $view;
    }
    
    abstract public function index($params);
}
