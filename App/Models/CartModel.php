<?php

namespace Models;

class CartModel extends \Core\Framework\MVC\Model {
    
    private $results = [];
    
    public function __construct() {
    }
    
    public function manageParams($params) {
        $this->setData(
                [
                    'settings' => [
                        'pageTitle' => 'MyShop',
                        'css' => 'style.css',
                        'head_js' => ['mainheadscript.js'],
                        'body_js' => ['mainbodyscript.js', 'localstorage.js'],
                        'model' => 'DefaultModel',
                        'view' => 'DefaultView',
                        'controller' => 'DefaultController'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
        
        //$this->results = $_COOKIE;
        
        $this->addResults($this->results);
    }
    
    public function __toString() {
        return 'This is ShoppingCartModel.';
    }
}
