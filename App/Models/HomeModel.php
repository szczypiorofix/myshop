<?php

namespace Models;

class HomeModel extends \Core\Framework\MVC\Model {
    
    private $data = array();
    
    public function __construct() {
        $this->data = parent::getData();
    }
    
    public function __toString() {
        return 'This is HomeModel.';
    }
}
