<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Test extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        echo(sprintf("<br/>Call widget: %s", __CLASS__));
    }

}

?>
