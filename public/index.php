<?php

// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
//require '../twiliophpmaster/Twilio/autoload.php';
//
//// Use the REST API Client to make requests to the Twilio REST API
//use Twilio\Rest\Client;
//
//// Your Account SID and Auth Token from twilio.com/console
//$sid = ' ';
//$token = ' ';
//$client = new Client($sid, $token);
//
//// Use the client to do fun stuff like send text messages!
//$client->messages->create(
//    // the number you'd like to send the message to
//    '+48724115371',
//    array(
//        // A Twilio phone number you purchased at twilio.com/console
//        'from' => '+48799449735',
//        // the body of the text message you'd like to send
//        'body' => "To jest próbna wiadomość wysłana przez API."
//    )
//);



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
define("CONFIG_FILE", BASE_DIR . "config");

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


include_once HELPERS_DIR.'Phpqrcode/qrlib.php';
//QRcode::png('SEE THAT MOUNTAIN? YOU CAN CLIMB IT!');
QRcode::png('IT JUST WORKS ! - Todd Howard', 'qrcode.png', 4, 4);

// ####### START APLIKACJI ####### //

/**
 * Bazowa lokalizacja plików js i css. 
 * @const BASE_HREF
 */
define("BASE_HREF", \Core\Config::get("BASE_HREF"));

// ### Uruchomienie głównej części aplikacji ### //
\Core\App::init();
