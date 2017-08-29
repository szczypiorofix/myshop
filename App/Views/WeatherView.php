<?php


namespace Views;

class WeatherView extends \Core\Framework\MVC\View {
    
    /**
     * Metoda wywołująca wyświetlenie widoku.
     * @param array $params Parametry przekazywane do pliku template'a.
     */
    public function show($params) {
        $output = 
         'Długość geogr.: '.$params['results']['longitude'].'<br>'
        .'Szerokość geogr.: '.$params['results']['latitude'].'<br>'
        .'Strefa czasowa: '.$params['results']['timezone'].'<br>'
        .$params['results']['summary'].'<br>'
        .'Temperatura: '.$params['results']['temperature'].' &#186C<br>'
        .'Temperatura odczuwalna: '.$params['results']['apparentTemperature'].' &#186C<br>'
        .'Wilgotność powietrza: '.($params['results']['humidity']*100).' %<br>'
        .'Ciśnienie atmosferyczne: '.$params['results']['pressure'].' hPa<br>'
        .'Prędkość wiatru: '.round(($params['results']['windSpeed'])*1.609, 1).' km/h<br></p>';
        echo $output;
    }
    
    /**
     * Metoda magiczna wywoływana w momencie wyświetlania nazwy klasy.
     * @return string Krótka nazwa klasy.
     */
    public function __toString() { 
        return 'This is DefaultView.';
    }
}
