<?php

use Src\Controllers\HomeController;

require __DIR__.'/vendor/autoload.php';

$home = new HomeController;
$home->home();
