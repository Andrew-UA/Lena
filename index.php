<?php

//SETTINGS:
ini_set('display_errors', 1); //Turn of or turn on errors
error_reporting(E_ALL); //Type of errors

//FILES CONNECTION:
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
set_include_path(get_include_path()
                  .PATH_SEPARATOR.'application/controllers'
                  .PATH_SEPARATOR.'application/models'
                  .PATH_SEPARATOR.'application/views'
                  .PATH_SEPARATOR.'application/components');

function __autoload($class)
{
    require_once $class.'.php';
}

//CALL Router
$front = FrontController::getInstance();
$front->route();
echo $front->getBody();
