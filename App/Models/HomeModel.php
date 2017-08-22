<?php

namespace Models;

class HomeModel extends \Core\Framework\MVC\Model {
    
    private $data = array();
    
    public function __construct() {
        $this->setData(
                [
                    'settings' => [
                        'pageTitle' => 'MyShop',
                        'css' => 'mainstyle.css',
                        'js' => 'mainscript.js',
                        'model' => 'HomeModel 222',
                        'view' => 'HomeView 222',
                        'controller' => 'HomeController 222'
                    ],
                    'params' => [],
                    'results' => []
                ]
        );
    }
    
    public function __toString() {
        return 'This is HomeModel.';
    }
}
