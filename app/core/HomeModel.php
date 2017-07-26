<?php

namespace core;
use core\framework\Model;

class HomeModel extends Model {
   
    private $name;
    
    public function __construct() {
        $this->name = '<br>Piotrek<br>';
    }
    
    public function getName() {
        return $this->name;
    }
}
