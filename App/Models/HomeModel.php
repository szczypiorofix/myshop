<?php

namespace Models;

class HomeModel extends \Core\Framework\MVC\Model {
    
    private $data = array();
    
    public function __construct() {
    }
    
    public function magageParams($params) {
        $this->setData(
                [
                    'settings' => [
                        'pageTitle' => 'MyShop',
                        'css' => 'style.css',
                        'js' => 'mainscript.js',
                        'model' => 'HomeModel 222',
                        'view' => 'HomeView 222',
                        'controller' => 'HomeController 222'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
    }
    
    public function __toString() {
        return 'This is HomeModel.';
    }
}
