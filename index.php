<?php

define('BASE_DIR', '/MarkUp');
require_once 'vendor/autoload.php';
 
$fc = new Controller\FrontController(BASE_DIR);

$fc->run();

