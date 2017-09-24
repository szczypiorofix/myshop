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
                        'head_script' => '',
                        'body_js' => ['template_engine.js', 'mainbodyscript.js'],
                        'body_script' => 'shoppingCart.showPanel();',
                        'model' => 'CartModel',
                        'view' => 'CartView',
                        'controller' => 'CartController'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
                
        $this->addResults($this->results);
    }
    
    public function __toString() {
        return 'This is ShoppingCartModel.';
    }
}
