<?php
//Start Session
session_start();

//Include Configuration
require_once('config/config.php');

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');
require_once('libraries/Database.php');
require_once('libraries/Toppic.php');
require_once('libraries/User.php');


//Autoload Classes
function my_autoloader($class_name) {
    require_once('libraries/' . $class_name . '.php');
}

spl_autoload_register('my_autoloader');
