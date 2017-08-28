<?php
namespace Views;
use Templates\Components\Component;
/**
 * Klasa DefaultView - domyślny widok domyślnego kontrolera (DefaultController).
 */
class DefaultView extends \Core\Framework\MVC\View {
    
    
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
        
        $jumbotronComponent = new Component("jumbotron");
        $jumbotronComponent->addToComponent('<div class="shopping-cart">
                    <button class="shopping-cart button" onclick="window.location=\''.BASE_HREF.'/cart\'">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span id="shopping-cart-price-id" class="shopping-cart price">0.00</span>
                        <span id="shopping-cart-currency-id" class="shopping-cart currency">PLN</span>
                    </button>
                </div>');
        $page['jumbotron'] = $jumbotronComponent->getComponent();
        
        $mainPanelComponent = new Component("mainpanel");
        $output = '<div class="products-list">';
        foreach($params['results'] as $product) {
            $arg = "{name: '".$product['name']."', price: '".$product['price']."', code: '".$product['code']."'}";
            $output .= ''
            . '<div class="product-on-list">'
                . '<h2><a href="'.BASE_HREF.'/product/'.$product['code'].'">'.$product['name'].'</a></h2>'
                . '<div class="products-list-img-price">'
                    . '<div class="products-list-image">'
                        . '<a href="'.BASE_HREF.'/product/'.$product['code'].'"><img class="img-responsive products-list-img" src="'.BASE_HREF.'/images/products/'.$product['image'].'"/></a>'
                    . '</div>'
                    . '<div class="products-list-price-button">'
                        . '<p class="products-list-price">'.$product['price'].' PLN</p>'
                        . '<button onclick="shoppingCart.add('.$arg.')">Dodaj do koszyka</button>'
                    . '</div>'
                . '</div>'
                . '<p class="products-list-description">'.$product['description'].'</p>'
            . '</div>';
        }
        $output .= '</div>';
        $mainPanelComponent->addToComponent($output);
        $page['mainpanel'] = $mainPanelComponent->getComponent();
        
        $sideBarComponent = new Component("sidebar");
        $sideBarComponent->addToComponent('<div class="sidebar-content">
                    <h3>Prognoza pogody:</h3>
                    <div id="spinner">
                    </div>
                    <div id="weather_forecast">
                    </div>
                </div>');
        $page['sidebar'] = $sideBarComponent->getComponent();
        
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
