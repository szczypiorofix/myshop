<?php

namespace Templates\Components;

class MainPanelProductComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent($params) {
        $output = '';
        foreach($params as $product) {
            $arg = "{name: '".$product['name']."', price: '".$product['price']."', code: '".$product['code']."'}";
            $output .= ''
            . '<div class="product-on-list">'
                . '<h2><a href="'.BASE_HREF.'product/'.$product['code'].'">'.$product['name'].'</a></h2>'
                . '<div class="products-list-img-price">'
                    . '<div class="products-list-image">'
                        . '<a href="'.BASE_HREF.'product/'.$product['code'].'"><img class="img-responsive products-list-img" src="'.BASE_HREF.'/images/products/'.$product['image'].'"/></a>'
                    . '</div>'
                    . '<div class="products-list-price-button">'
                        . '<p class="products-list-price">'.$product['price'].' PLN</p>'
                        . '<button onclick="shoppingCart.add('.$arg.')">Dodaj do koszyka</button>'
                    . '</div>'
                . '</div>'
                . '<p class="products-list-description">'.$product['description'].'</p>'
            . '</div>';
        }

        return 
<<<HTML
<div class="mainpanel">
    <div class="products-list">
        {$output}
    </div>
</div>
HTML;
    }
}