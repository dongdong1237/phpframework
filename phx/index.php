<?php
// set timzone
date_default_timezone_set('Asia/Shanghai');

// include dBug class
include('./core/debug/dBug.php');

require('constants.php');

// set error reporting level
error_reporting(E_ALL);

require(PATH_CORE_HELPERS . 'error.php');
$error_handler = set_error_handler('custom_error_handler');


// load configuration files
$config_files = glob(PATH_APP . 'config' . DS . '*' . EXT);

// retrieve configuration array
$config = array();
foreach ($config_files as $config_file) {
    $key = substr(strrchr($config_file, DS), 1, -strlen(EXT));
    $config[$key] = include($config_file);
    unset($key);
    unset($config_file);
}
unset($config_files);

// load config class, intitialize configuration mechanism
include(PATH_CORE_LIBS . 'config.php');
$CFG = new Config($config);
unset($config);

//echo $CFG::get('application.aaa.ddd.eee');

/*
new dBug($GLOBALS);

$constants = get_defined_constants(true);
new dBug($constants['user']);
*/
