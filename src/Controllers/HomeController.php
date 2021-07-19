<?php

namespace Src\Controllers;

/**
 * HomeController
 */
class HomeController {

    /**
     * index
     *
     * Gretting
     * @return void
     */
    public function home () {
        require_once __DIR__.'/../../resources/views/index.php';
    }
}
