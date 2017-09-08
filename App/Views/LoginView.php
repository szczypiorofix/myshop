<?php

namespace Views;

use Templates\Components\NavbarComponent;
use Templates\Components\FooterComponent;
use Templates\Components\SideBarComponent;
use Templates\Components\JumbotronComponent;
use Templates\Components\LoginRegisterComponent;

class LoginView extends \Core\Framework\MVC\View {
    
    
    /**
    * Metoda wywołująca wyświetlenie widoku.
    * @param array $params Parametry przekazywane do pliku template'a.
    */
    public function show($params) {
        $page = [];
        
        $page['navbar'] = NavbarComponent::getContent(['loggedIn' => false]);
        
        $page['jumbotron'] = '';
        
        $page['mainpanel'] = LoginRegisterComponent::getContent([]);

        $page['sidebar'] = SideBarComponent::getContent();

        $page['footer'] = FooterComponent::getContent();
        
        include_once parent::DEFAULT_TEMPLATE_FILENAME;
    }
    
    /**
     * Metoda magiczna wywoływana w momencie wyświetlania nazwy klasy.
     * @return string Krótka nazwa klasy.
     */
    public function __toString() {
        return 'This is DefaultView.';
    }
}
