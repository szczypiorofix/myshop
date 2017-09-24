<?php

namespace Controllers;


/**
 * Kontroler kasy
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class CheckOutController extends \Core\Framework\MVC\Controller {
    
    private $model;
    private $view;
    
    public function __construct(\Core\Framework\MVC\Model $model, \Core\Framework\MVC\View $view) {
        parent::__construct($model, $view);
        $this->model = $model;
        $this->view = $view;
    }
    
    public function index($params) {
        $this->model->addParams($params);
        $this->model->manageParams($params);
        $this->view->show($this->model->getData());
    }
    
    public function another($params) {
        $this->model->addParams($params);
        $this->view->show($this->model->getData());
    }
    
    public function itemslist($params) {
        $this->model->addParams($params);
        $this->view->show($this->model->getData());
    }
    
    public function __toString() {
        return 'This is CheckOutController.';
    }
}
