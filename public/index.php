<?php
//$my_img = imagecreate(200, 80);
//$background = imagecolorallocate($my_img, 100, 80, 255);
//$text_colour = imagecolorallocate($my_img, 255, 255, 0);
//$line_colour = imagecolorallocate($my_img, 28, 255, 0);
//imagestring($my_img, 4, 30, 25, "Hello image!", $text_colour);
//imagesetthickness($my_img, 5);
//imageline($my_img, 30, 45, 165, 45, $line_colour);
//
//header("Content-type: image/png");
//imagepng($my_img);
//imagecolordeallocate($line_color);
//imagecolordeallocate($text_color);
//imagecolordeallocate($background);
//imagedestroy($my_img);
//
//exit();


// ####### DEFINIOWANIE ŚCIEŻEK DOSTĘPÓW ####### //
// ### Tutaj definiowane są wszystkie ścieżki dostępów do poszczególnych składników i modułów aplikacji ### //

/**
 * Directory separator. 
 * @const DS
 */
define("DS", DIRECTORY_SEPARATOR);

/**
 * Bazowa lokalizacja plików aplikacji. 
 * @const BASE_DIR
 */
define('BASE_DIR', dirname(__DIR__) . DS);

/**
 * Nazwa pliku konfiguracji. 
 * @const CONFIG_FILE
 */
define("CONFIG_FILE", BASE_DIR . "config.ini");

/**
 * Lokalizacja głównych plików aplikacji. 
 * @const APP_DIR
 */
define("APP_DIR", BASE_DIR . "App" . DS);

/** 
 * Lokalizacja głównych plików aplikacji.
 * @const APPCORE_DIR
 */
define("APPCORE_DIR", APP_DIR . "Core" . DS);

/**
 * Lokalizacja kontrolerów aplikacji. 
 * @const CONTROLLERS_DIR
 */
define("CONTROLLERS_DIR", APP_DIR . "Controllers" . DS);

/**
 * Lokalizacja modeli aplikacji. 
 * @const MODELS_DIR
 */
define("MODELS_DIR", APP_DIR . "Models" . DS);

/**
 * Lokalizacja routerów aplikacji. 
 * @const ROUTES_DIR
 */
define("ROUTES_DIR", APP_DIR . "Routes" . DS);

/**
 * Lokalizacja template'ów aplikacji. 
 * @const TEMPLATES_DIR
 */
define("TEMPLATES_DIR", APP_DIR . "Templates" . DS);

/**
 * Lokalizacja widoków aplikacji. 
 * @const VIEWS_DIR
 */
define("VIEWS_DIR", APP_DIR . "Views" . DS);

/**
 * Lokalizacja plików frameworka aplikacji. 
 * @const FRAMEWORK_DIR
 */
define("FRAMEWORK_DIR", APPCORE_DIR . "Framework" . DS);

/**
 * Lokalizacja plików pomoczniczych aplikacji. 
 * @const HELPERS_DIR
 */
define("HELPERS_DIR", FRAMEWORK_DIR . "Helpers" . DS);

/**
 * Lokalizacja plików klas abstrakcyjnych MVC aplikacji. 
 * @const MVC_DIR
 */
define("MVC_DIR", FRAMEWORK_DIR . "MVC" . DS);


// ####### KLASA AUTOLOADER ####### //

// ### Ładowanie klasy Autoloader, służącej do ładowania plików klas w momencie ich inicjowania ### //
require_once APPCORE_DIR.'AutoLoader.php';
\Core\AutoLoader::run();


// ####### START APLIKACJI ####### //

/**
 * Bazowa lokalizacja plików js i css. 
 * @const BASE_HREF
 */
define("BASE_HREF", \Core\Config::get("BASE_HREF"));

// ### Uruchomienie głównej części aplikacji ### //
\Core\App::init();
