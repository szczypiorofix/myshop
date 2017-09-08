<?php

namespace Models;

class LoginModel extends \Core\Framework\MVC\Model {
    
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
                        'body_js' => ['mainbodyscript.js'],
                        'body_script' => '',
                        'model' => 'LoginModel',
                        'view' => 'LoginView',
                        'controller' => 'LoginController'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
        
        //$this->results = $_COOKIE;
        
        $this->addResults($this->results);
    }
    
    public function __toString() {
        return 'This is LoginModel.';
    }
}
