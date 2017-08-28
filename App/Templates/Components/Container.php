<?php

namespace Templates\Components;

class Container {
   
    private $container = null;
    private $content = null;
    private $divOpen = '<div>';
    private $divClose = '</div>';
    
    
    public function __construct($c = "") {
        $this->divOpen = '<div class="'.$c.'">';
    }

    public function addToContainer($content) {
        return $this->content .= $content;
    }
    
    public function getContainer() {
        $this->container = $this->divOpen.$this->content.$this->divClose;
        return $this->container;
    }
    
}