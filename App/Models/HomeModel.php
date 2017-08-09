<?php

namespace Models;

class HomeModel extends \Core\Framework\MVC\Model {
    
    public $data = array(
        'pageTitle' => 'MyShop',
        'css' => 'mainstyle.css',
        'js' => 'mainscript.js',
        'Model' => 'HomeModel'
    );
    
    public function __toString() {
        return 'This is HomeModel.';
    }

    public function setData($data) {
        $this->data[] = $data;
    }

}
