<?php

//$url = "https://www.wroblewskipiotr.pl/gethalloffameresults.php";
//$ch = curl_init($url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$result = curl_exec($ch);
//var_dump($result);
//curl_close($ch);



// ####### DEFINIOWANIE ŚCIEŻEK DOSTĘPÓW ####### //
// ### Tutaj definiowane są wszystkie ścieżki dostępów do poszczególnych składników i modułów aplikacji ### //

define("DS", DIRECTORY_SEPARATOR);
define('BASE_DIR', dirname(__DIR__) . DS);
define("CONFIG_FILE", BASE_DIR . "config");
define("APP_DIR", BASE_DIR . "App" . DS);
define("CONTROLLERS_DIR", APP_DIR . "Controllers" . DS);
define("APPCORE_DIR", APP_DIR . "Core" . DS);
define("MODELS_DIR", APP_DIR . "Models" . DS);
define("ROUTES_DIR", APP_DIR . "Routes" . DS);
define("TEMPLATES_DIR", APP_DIR . "Templates" . DS);
define("VIEWS_DIR", APP_DIR . "Views" . DS);
define("FRAMEWORK_DIR", APPCORE_DIR . "Framework" . DS);
define("HELPERS_DIR", FRAMEWORK_DIR . "Helpers" . DS);
define("MVC_DIR", FRAMEWORK_DIR . "MVC" . DS);


// ####### KLASA AUTOLOADER ####### //
// ### Ładowanie klasy Autoloader, służącej do ładowania plików klas w momencie ich inicjowania ### //

require_once APPCORE_DIR.'AutoLoader.php';

// ####### START APLIKACJI ####### //
// ### Wczytanie 'base_href' z pliku konfiguracji ### //
// ### Uruchomienie głównej części aplikacji ### //

define("BASE_HREF", \Core\Config::get("BASE_HREF"));
\Core\App::init();
