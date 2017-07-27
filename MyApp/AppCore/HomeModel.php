<?php

namespace Core;
use Core\Framework\Model;

class HomeModel extends Model {
   
    private $name;
    
    public function __construct() {
        $this->name = '<br>Piotrek<br>';
    }
    
    public function getName() {
        return $this->name;
    }
}
