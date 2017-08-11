<?php

namespace Core\Framework\MVC;

abstract class Model {
 
    abstract public function setData($data);
    
    abstract public function getData();
    
    abstract public function addData($data);
}
