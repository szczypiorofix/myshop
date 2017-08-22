<?php

namespace Controllers;

/**
 * Kontroler Home.
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class HomeController extends \Core\Framework\MVC\Controller {
    
    /**
     * Obiekt modelu.
     * @var object.
     */
    private $model;
    
    /**
     * Obiekt widoku.
     * @var object.
     */
    private $view;
    
    public function __construct(\Core\Framework\MVC\Model $model, \Core\Framework\MVC\View $view) {
        parent::__construct($model, $view);
        $this->model = $model;
        $this->view = $view;
    }
    
    public function index($params) {
        $this->model->addParams($params);
        //$this->model->setSettingsMVC($this->model, $this->view, $this);
        $this->view->show($this->model->getData());
    }
    
    public function itemslist($params) {
        $this->model->addParams($params);
        //$this->model->setSettingsMVC($this->model, $this->view, $this);
        $this->view->show($this->model->getData());
    }
    
    public function __toString() {
        return 'This is HomeController.';
    }
}
