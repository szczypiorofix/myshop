<?php

namespace Controllers;

/**
 * Kontroler Default - domyślny
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class DefaultController extends \Core\Framework\MVC\Controller {
    
    private $model;
    
    public function __construct(\Core\Framework\MVC\Model $model) {
        $this->model = $model;
    }
    
    public function index() {
        
    }
    
    public function __toString() {
        return 'This is DefaultController.';
    }
}
