<?php

namespace Views;

class HomeView extends \Core\Framework\MVC\View {

    
    public function __construct() {
    }
    
    public function show($params = []) {
        include_once parent::DEFAULT_TEMPLATE_FILENAME;
    }
    
    public function __toString() {
        return 'This is HomeView.';
    }
}