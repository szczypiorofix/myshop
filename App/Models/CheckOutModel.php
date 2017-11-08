<?php

namespace Models;

class CheckOutModel extends \Core\Framework\MVC\Model {
    
    private $results = [];
    
    public function __construct() {
    }
    
    public function manageParams($params) {
        $this->setData(
                [
                    'settings' => [
                        'pageTitle' => 'MyShop',
                        'css' => parent::$default_css_files,
                        'head_js' => ['mainheadscript.js'],
                        'head_script' => '',
                        'body_js' => ['template_engine.js', 'mainbodyscript.js'],
                        'body_script' => '',
                        'model' => 'CheckOutModel',
                        'view' => 'CheckOutView',
                        'controller' => 'CheckOutController'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
        
        //$this->results = $_COOKIE;
        
        $this->addResults($this->results);
    }
    
    public function __toString() {
        return 'This is CheckOutModel.';
    }
}
