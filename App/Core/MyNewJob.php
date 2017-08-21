<?php

namespace Core;

class MyNewJob extends Framework\Helpers\Worker {

    public function job() {
        //echo '<br>Przed triggerem<br>';
        \Core\Framework\Helpers\Event::trigger('job', array("To,", "jest", "nowe", "zadanie"));
        //echo '<br>Po triggerze<br>';
    }
}
