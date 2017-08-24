<?php


namespace Core\Framework\Helpers;

class WeatherForecast {
    
    private static $instance = NULL;
    private static $data = NULL;
    
    private function __construct($key, $args) {
        $c = curl_init();
        curl_setopt($c, CURLOPT_HEADER, 0);
        curl_setopt($c, CURLOPT_VERBOSE, 0);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, 'https://api.darksky.net/forecast/'.$key.'/'.$args.'?lang=pl&exclude=hourly,minutely,daily,flags,alerts&units=si');
        curl_setopt($c, CURLOPT_HTTPGET, 1);
        $data = curl_exec($c);
        echo curl_error($c);
        curl_close($c);
        self::$data = json_decode($data);
    }
    
    public static function getData($key, $args) {
        if (is_null(self::$instance)) {
            $instance = new self($key, $args);
        }
        return self::$data;
    }
}
