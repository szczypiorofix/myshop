<?php

namespace Controllers;

/**
 * Kontroler Home.
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class HomeController extends \Core\Framework\MVC\Controller {
    
    private $model;
    private $view;
    
    public function __construct(\Core\Framework\MVC\Model $model, \Core\Framework\MVC\View $view) {
        parent::__construct($model, $view);
        $this->model = $model;
        $this->view = $view;
    }
    
    public function index($params) {
        //var_dump($params);
        echo 'This is index method!<br>';
        //var_dump($this->model->getData());
        $this->model->addData($params);
        $this->view->show($this->model->getData());
        //var_dump($params);
    }
    
    public function itemslist() {
        echo 'This is itemslist method<br>';
    }
    
    public function __toString() {
        return 'This is HomeController.';
    }
}
