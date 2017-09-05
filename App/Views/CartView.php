<?php

namespace Views;
use Templates\Components\Component;

class CartView extends \Core\Framework\MVC\View {
    
    
    /**
    * Metoda wywołująca wyświetlenie widoku.
    * @param array $params Parametry przekazywane do pliku template'a.
    */
    public function show($params) {
        $page = [];
        $navbarComponent = new Component("navbar");
        $navbarComponent->addToComponent(
                '<a class="navbar-btn" href="/myshop">..:: MyShop ::..</a>
                <input type="text" class="navbar-input" placeholder="Szukaj...">
                <button class="navbar-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                <a class="navbar-btn" href="/myshop/userpanel">User</a>
                <a class="navbar-btn" href="/myshop/contact">Kontakt</a>');
        $page['navbar'] = $navbarComponent->getComponent();
        
        $page['jumbotron'] = '';
        
        $mainPanelComponent = new Component("mainpanel");
        $output = '<div class="cart-list" id="cartlist"><h3>Zawartość koszyka:</h3>'
               .'<div style="margin-top: 20px;">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Ilość</th>
                                <th>Nazwa</th>
                                <th>Cena</th>
                                <th>Usuń</th>
                            </tr>
                        </thead>
                        <tbody id="cartlist-items">
                        </tbody>
                    </table>
                </div>';
        $output .= '<div class="cart-sum"> Suma: <span id="cart-sum-value">0</span>';
        $output .= '</div>';      
        $output .= '</div>';
        $output .= '<button class="remove-all-button" onclick="shoppingCart.clear();">Wyczyść koszyk</button>';
        $mainPanelComponent->addToComponent($output);
        $page['mainpanel'] = $mainPanelComponent->getComponent();
        
        
        $page['sidebar'] = '';
        
        $footerComponent = new Component("footer");
        $footerComponent->addToComponent('<p>Wróblewski Piotr 2017. All rights reserved.</p>');
        $page['footer'] = $footerComponent->getComponent();
        
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
