<?php

namespace Models;

class DefaultModel extends \Core\Framework\MVC\Model {
    
    public function __construct() {
        $this->setData(
                array(
                    'settings' => array(
                        'pageTitle' => 'MyShop',
                        'css' => 'mainstyle.css',
                        'js' => 'mainscript.js',
                        'model' => 'DefaultModel',
                        'view' => 'DefaultView',
                        'controller' => 'DefaultController'
                    ),
                    'params' => array()
                )
        );
    }
    
    public function __toString() {
        return 'This is DefaultModel.';
    }
}
