<?php

namespace Templates\Components;

class MainPanelCartComponent {
    
    private static $content = '';

    public function __construct() {}
    public function __clone() {}

    public static function getContent() {
          return 
<<<HTML
<div class="mainpanel">
    <div class="cart-list" id="cartlist">
        <h3>Zawartość koszyka:</h3>
        <div style="margin-top: 20px;">
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
        </div>
        <div class="cart-sum"> Suma: <span id="cart-sum-value">0</span>
        </div>
    </div>
    <div class="buttons-group">
        <button class="remove-all-button" onclick="shoppingCart.clear();">Wyczyść koszyk</button>
        <button class="buy-button" onclick="console.log(this)">Przejdź do kasy</button>
    </div>
</div>
HTML;
    }
}