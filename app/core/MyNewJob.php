<?php

namespace core;

class MyNewJob extends framework\Worker {
    
    public function job() {
        echo '<br>Przed triggerem<br>';
        \core\framework\Event::trigger('job', array("Witaj,", "świecie"));
        echo '<br>Po triggerze<br>';
    }
}
