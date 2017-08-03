<?php

namespace Models;

class HomeModel extends \Core\Framework\MVC\Model {
    
    public $data = array(
        'pageTitle' => 'MyShop',
        'css' => 'mainstyle.css',
        'js' => 'mainscript.js',
        'content' => 'This is home page!'
    ); 
}
