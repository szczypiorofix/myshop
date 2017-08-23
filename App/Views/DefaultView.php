<?php
namespace Views;

/**
 * Klasa DefaultView - domyślny widok domyślnego kontrolera (DefaultController).
 */
class DefaultView extends \Core\Framework\MVC\View {
    
    
    /**
     * Metoda wywołująca wyświetlenie widoku.
     * @param array $params Parametry przekazywane do pliku template'a.
     */
    public function show($params) {

        $output = '<div class="products-list">';
        foreach($params['results'] as $product) {
            $output .= ''
            . '<div class="product-on-list">'
                . '<h2><a href="product/'.$product['code'].'">'.$product['name'].'</a></h2>'
                . '<div class="products-list-img-price">'
                    . '<div class="products-list-image">'
                        . '<a href="product/'.$product['code'].'"><img class="img-responsive products-list-img" src="images/products/'.$product['image'].'"/></a>'
                    . '</div>'
                    . '<div class="products-list-price-button">'
                        . '<p class="products-list-price">'.$product['price'].' PLN</p>'
                        . '<button>Kup teraz</button>'
                    . '</div>'
                . '</div>'
                . '<p class="products-list-description">'.$product['description'].'</p>'
            . '</div>';
        }
        $output .= '</div>';
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
