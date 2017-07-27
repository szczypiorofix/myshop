<?php

namespace Core\Framework\Helpers;

abstract class Router {
    
    public abstract function addRoute($route);
    
    public abstract function getRoute();
    
}
