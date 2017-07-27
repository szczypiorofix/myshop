<?php

namespace Core;

class LogCallBack {
    
    public function __invoke($data) {
        echo 'Invoke: Zarejestrowano dane: '.PHP_EOL;
        var_dump($data);
        
    }
}
