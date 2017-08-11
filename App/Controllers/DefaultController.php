<?php

namespace Controllers;

/**
 * Kontroler Default - domyślny
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class DefaultController extends \Core\Framework\MVC\Controller {
    
    private $model;
    private $view;
    
    public function __construct(\Core\Framework\MVC\Model $model, \Core\Framework\MVC\View $view) {
        parent::__construct($model, $view);
        $this->model = $model;
        $this->view = $view;
    }
    
    public function index($params) {
        //var_dump($params);
        echo 'This is index method!!!<br>';
        $this->model->addData($params);
        //$params += $this->model->getData();
        //var_dump($this->model->getData());
        //var_dump($params); - parametry z URL
        $this->view->show($this->model->getData()); 
    }
    
    public function another($params) {
        //var_dump($params);
        echo 'This is another method!!!<br>';
        $this->model->addData($params);
        //$params += $this->model->getData();
        //var_dump($this->model->getData());
        //var_dump($params); - parametry z URL
        $this->view->show($this->model->getData()); 
    }
    
    public function itemslist() {
        echo 'This is itemslist method<br>';
    }
    
    public function __toString() {
        return 'This is DefaultController.';
    }
}
