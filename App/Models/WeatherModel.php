<?php

namespace Models;
//use Core\Framework\Database\DBConnection, Core\FrameworkException;

class WeatherModel extends \Core\Framework\MVC\Model {
   
    private $results = null;
    
    public function __construct() {
    }
    
    public function manageParams($params) {
        $this->setData(
                [
                    'settings' => [
                        'pageTitle' => 'MyShop',
                        'css' => 'style.css',
                        'head_js' => 'mainheadscript.js',
                        'body_js' => 'mainbodyscript.js',
                        'model' => 'DefaultModel',
                        'view' => 'DefaultView',
                        'controller' => 'DefaultController'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
        $key = \Core\Config::get('DARKSKY_KEY');
        $args = $params[0].','.$params[1];
        
        $this->results = \Core\Framework\Helpers\WeatherForecast::getData($key, $args);
        $temp = [
            'latitude' => $this->results->latitude,
            'longitude' => $this->results->longitude,
            'timezone' => $this->results->timezone,
            'summary' => $this->results->currently->summary,
            'icon' => $this->results->currently->icon,
            'temperature' => $this->results->currently->temperature,
            'apparentTemperature' => $this->results->currently->apparentTemperature,
            'humidity' => $this->results->currently->humidity,
            'cloudcover' => $this->results->currently->cloudCover,
            'pressure' => $this->results->currently->pressure,
            'windSpeed' => $this->results->currently->windSpeed
        ];
        $this->addResults($temp);
    }
    
    public function __toString() {
        return 'This is DefaultModel.';
    }
}
