<?php

//SETTINGS:
ini_set('display_errors',1); //Turn of or turn on errors
error_reporting(E_ALL); //Type of errors

//FILES CONNECTION:
define('ROOT', dirname(__FILE__));
require_once(ROOT."/application/components/Router.php");

//CALL Router
$router = new Router();
$router->run();
