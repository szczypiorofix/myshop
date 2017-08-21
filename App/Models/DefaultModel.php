<?php

namespace Models;

class DefaultModel extends \Core\Framework\MVC\Model {
    
    public function __construct() {
        parent::setData(array(
        'settings' => array(
            'pageTitle' => 'MyShop',
            'css' => 'mainstyle.css',
            'js' => 'mainscript.js',
            'model' => 'DefaultModel 111',
            'view' => 'DefaultView 111',
            'controller' => 'DefaultController 111'
        ),
        'params' => array()
    ));
    }
    
    public function __toString() {
        return 'This is DefaultModel.';
    }
}
