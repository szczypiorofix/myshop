<?php

// ###### DEFINIOWANIE PODSTAWOWEJ ŚCIEŻKI DOSTĘPU ###### //
define('BASE_DIR', dirname(__DIR__).DIRECTORY_SEPARATOR);

// ####### AUTOLOADER CLASS ####### //
require_once BASE_DIR.'App/Core/AutoLoader.php';

// ####### APPLICATION INIT ####### //
\Core\App::init();
