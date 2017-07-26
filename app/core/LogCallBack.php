<?php

namespace core;

class LogCallBack {

//    public function __construct() {
//        echo 'LogCallBack created!';
//    }
    
    public function __invoke($data) {
        echo 'Zarejestrowano dane: '.PHP_EOL;
        var_dump($data);
    }
}
