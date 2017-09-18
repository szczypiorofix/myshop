<?php

if ($argc > 1) {
    if (isset($argv[1]) && isset($argv[2]) && isset($argv[3]) && $argv[1] === 'create') {
        switch ($argv[2]) {
            case 'class': {
                $className = ucfirst($argv[3]);
                echo 'Creating class file ... '.$className;
                $myfile = fopen($className.".php", "w") or die("Unable to open file!");
                $txt = 
<<<HTML
<?php

class {$className} {

    public function __construct() {

    }

    public function index() {

    }
}

HTML;
                fwrite($myfile, $txt);
                fclose($myfile);
                break;
            }
            default: {
                echo 'Parameters are not valid. Please use: "php builder create class your_class_name".';
            }
        }
    }
    else {
        echo 'Parameters are not valid. Please use: "php builder create class your_class_name".';
    }
}
else {
    echo 'No parameters found.';
}