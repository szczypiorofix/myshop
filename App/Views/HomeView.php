<?php

namespace Views;
use Templates\DefaultTemplate;

class HomeView extends \Core\Framework\MVC\View {
    
    private $model;
    private $controller;
    
    public function __construct(\Core\Framework\MVC\Controller$controller, \Core\Framework\MVC\Model $model) {
        $this->controller = $controller;
        $this->model = $model;
    }
    
    public function show() {
        return DefaultTemplate::getTemplate(array('model' => $this->model, 'view' => $this, 'controller' => $this->controller, 'modelData' => $this->model->data));
    }
    
    public function __toString() {
        return 'This is HomeView.';
    }
}