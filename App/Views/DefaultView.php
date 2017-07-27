<?php
namespace Views;
use Template\DefaultTemplate;

class DefaultView extends \Core\Framework\MVC\View {
    
    private $model;
    private $controller;
    
    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }
    
    public function show() {
        return DefaultTemplate::getTemplate($this->model->data);
    }
}
