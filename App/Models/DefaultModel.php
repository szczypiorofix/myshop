<?php

namespace Models;

class DefaultModel extends \Core\Framework\MVC\Model {
    
    public $data = array(
        'pageTitle' => 'MyShop',
        'css' => 'mainstyle.css',
        'js' => 'mainscript.js',
        'Model' => 'DefaultModel'
    );
    
    public function __toString() {
        return 'This is DefaultModel.';
    }
    
    public function setData($data) {
        $this->data[] = $data;
    }
}
