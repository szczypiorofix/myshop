<?php

namespace Models;

class DefaultModel extends \Core\Framework\MVC\Model {
    
    public $data = array(
        'settings' => array(
            'pageTitle' => 'MyShop',
            'css' => 'mainstyle.css',
            'js' => 'mainscript.js',
            'Model' => 'DefaultModel'
        ),
        'data' => array()
    );
    
    public function __toString() {
        return 'This is DefaultModel.';
    }
    
    public function getData() {
        return $this->data;
    }
    
    public function addData($data) {
        $this->data['data'] += $data;
    }

    public function setData($data) {
        $this->data['data'] = $data;
    }
}
