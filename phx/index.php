<?php
// set error reporting level
error_reporting(E_ALL);

// include dBug class
include('./core/debug/dBug.php');

// define paths of folders
define('DS', DIRECTORY_SEPARATOR);
define('PATH_BASE', __DIR__ . DS);
define('PATH_APP', PATH_BASE . 'app' . DS); 
define('PATH_ASSETS', PATH_BASE . 'assets' . DS); 
define('PATH_CORE', PATH_BASE . 'core' . DS); 

// define paths of files
define('EXT', '.php');
define('FILE_BASE', PATH_BASE . 'index' . EXT);

//$constants = get_defined_constants(true);
//new dBug($constants['user']);

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

new dBug($GLOBALS['GLOBALS']['GLOBALS']);die;
die;

/*
get config value via : Config::get('application.environment');
set config value via : Config::set('application.environment');
*/






die;
$conf = 'aaa';

die;
function foobar() {
	global $conf;
}
foobar();
new dBug($GLOBALS);die;
die;







	$system_path = 'system';


	$application_folder = 'application';

	// Path to the system folder
	define('BASEPATH', str_replace("\\", "/", $system_path));

	// Path to the front controller (this file)
	define('FCPATH', str_replace(SELF, '', __FILE__));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

	//paygentモジュールの経路
	define('DIR_MODULES', dirname(__FILE__).'/application/modules/');
	//Soapエラー時の戻り値 systemerror
	define('SOAP_MESSAGETYPE_E', 'E');
	//Soapエラー時の戻り値 warning
	define('SOAP_MESSAGETYPE_W', 'W');
	// The path to the "application" folder
	if (is_dir($application_folder))
	{
		define('APPPATH', $application_folder.'/');
	}
	else
	{
		if ( ! is_dir(BASEPATH.$application_folder.'/'))
		{
			exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);
		}

		define('APPPATH', BASEPATH.$application_folder.'/');
	}




require_once BASEPATH.'core/CodeIgniter.php';
