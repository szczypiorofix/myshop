<?php

namespace Controllers;

/**
 * Kontroler Home, która jest stroną domyślną
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class HomeController extends \Core\Framework\MVC\Controller {
    
    private $model;
    
    public function __construct(\Core\Framework\MVC\Model $model) {
        $this->model = $model;
    }
    
    public function home() {
        echo '<br>Home<br>';
    }
    
    public function index() {
        echo '<br>Index<br>';
    }
}
