<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 5/20/2019
 * Time: 1:30 PM
 */
ini_set('display_error', 1);
error_reporting(E_ALL);

//require autoload file
require_once ('vendor/autoload.php');
require_once ('model/validation.php');

// create an instance of the base class
$f3 = Base::instance();

// Turn on Fat-free error reporting
$f3->set('DEBUG', 3);
