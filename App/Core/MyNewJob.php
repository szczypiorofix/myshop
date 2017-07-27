<?php

namespace Core;

class MyNewJob extends Framework\Worker {

    public function job() {
        echo '<br>Przed triggerem<br>';
        \core\framework\Event::trigger('job', array("To,", "jest", "nowe", "zadanie"));
        echo '<br>Po triggerze<br>';
    }
}
