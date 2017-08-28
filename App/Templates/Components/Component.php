<?php

namespace Templates\Components;
use Templates\Components\Container;

class Component {
        
    private $content = null;
    private $navbarContainer = null;
    
    public function __construct($c = "") {
        $this->navbarContainer = new Container($c);
    }

    public function getComponent() {
        return $this->navbarContainer->getContainer();
    }

    public function addToComponent($content) {
        $this->navbarContainer->addToContainer($content);
    }
}
