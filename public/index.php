<?php

// ###### DEFINIOWANIE ŚCIEŻEK DOSTĘPU ###### //
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

// ####### AUTOLOADER CLASS ####### //
require_once APPCORE_DIR . 'AutoLoader.php';

// ####### APPLICATION LAUNCH ####### //
\Core\App::init();
