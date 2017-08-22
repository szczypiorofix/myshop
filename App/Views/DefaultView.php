<?php
namespace Views;

/**
 * Klasa DefaultView - domyślny widok domyślnego kontrolera (DefaultController).
 */
class DefaultView extends \Core\Framework\MVC\View {
    
    private $params = null;
    
    /**
     * Metoda wywołująca wyświetlenie widoku.
     * @param array $params Parametry przekazywane do pliku template'a.
     */
    public function show($params) {
        $this->params = $params ?? array();
        $output = '';
        foreach($this->params['results'] as $product) {
            $output .= '<p>'.$product['name'].'</p>'
                    . '<img style="max-width: 160px;" src="images/products/'.$product['image'].'"/><br>'
                    . '';
        }
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
