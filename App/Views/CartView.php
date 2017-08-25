<?php

namespace Views;

class CartView extends \Core\Framework\MVC\View {
    
    
    /**
    * Metoda wywołująca wyświetlenie widoku.
    * @param array $params Parametry przekazywane do pliku template'a.
    */
    public function show($params) {

        $output = '<p>Widok koszyka</p>';
        
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
