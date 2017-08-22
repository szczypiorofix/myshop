<?php

namespace Models;

class HomeModel extends \Core\Framework\MVC\Model {
    
    private $data = array();
    
    public function __construct() {
        $this->setData(
                array(
                    'settings' => array(
                        'pageTitle' => 'MyShop',
                        'css' => 'mainstyle.css',
                        'js' => 'mainscript.js',
                        'model' => 'HomeModel 222',
                        'view' => 'HomeView 222',
                        'controller' => 'HomeController 222'
                    ),
                    'params' => array()
                )
        );
    }
    
    public function __toString() {
        return 'This is HomeModel.';
    }
}
