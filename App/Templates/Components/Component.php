<?php

namespace Templates\Components;

abstract class Component {
    
    private $component = '';
    
    abstract public function showComponent();
    
    abstract public function addToComponent();
}
