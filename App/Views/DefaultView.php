<?php
namespace Views;
use Templates\DefaultTemplate;

class DefaultView extends \Core\Framework\MVC\View {
    
    private $model;
    private $controller;
    
    public function __construct(\Core\Framework\MVC\Controller$controller, \Core\Framework\MVC\Model $model) {
        $this->controller = $controller;
        $this->model = $model;
    }
    
    public function show() {
        return DefaultTemplate::getTemplate($this->model->data);
    }
}
