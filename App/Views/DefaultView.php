<?php
namespace Views;

class DefaultView extends \Core\Framework\MVC\View {
    
    public function __construct() {
    }
    
    public function show($params = []) {
        //var_dump($params);
        include_once parent::DEFAULT_TEMPLATE_FILENAME;
    }
    
    public function __toString() {
        return 'This is DefaultView.';
    }
}
