<?php

//SETTINGS:
ini_set('display_errors', 1); //Turn of or turn on errors
error_reporting(E_ALL); //Type of errors

//CONSTANTS DECLARATION
define('ROOT', $_SERVER['DOCUMENT_ROOT']); //

//FILES CONNECTION:
set_include_path(get_include_path()
                  .PATH_SEPARATOR.'application/controllers'
                  .PATH_SEPARATOR.'application/models'
                  .PATH_SEPARATOR.'application/views'
                  .PATH_SEPARATOR.'application/configuration');

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});


//CALL Router
$front = FrontController::getInstance();
$front->route();
echo $front->getBody();
