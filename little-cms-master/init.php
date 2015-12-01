<?php
$base_dir = dirname(__FILE__);
//$cfg_file = file_exists($base_dir . DIRECTORY_SEPARATOR . 'config.php') ? 'config.php' : 'config-min.php';
$cfg_file = defined('LT_INSTALL') ? 'config-min.php' : 'config.php';
if( defined('CFG_FILE') )
{
	$cfg_file = CFG_FILE;
}
if( !file_exists($base_dir . DIRECTORY_SEPARATOR . $cfg_file) )
{
	header('Location: install/index.php');die();
}
	
require_once $base_dir . DIRECTORY_SEPARATOR . $cfg_file;

if( DEVELOPMENT == 1 )
{
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}
require_once INCLUDE_DIR . SB_DS . 'functions.php';
require_once INCLUDE_DIR . SB_DS . 'formatting.php';
$classes = array(
		'class.object.php',
		'class.globals.php',
		'class.orm-object.php',
		'class.session.php',
		'class.request.php',
		'class.messages-stack.php',
		'class.module.php',
		'class.factory.php',
		'class.meta.php',
		'class.language.php',
		'class.route.php',
		'class.menu.php',
		'class.shortcode.php',
		'class.application.php',
		'class.controller.php',
		'class.html-doc.php',
		'class.compress.php'
);
$db_drivers = array(
		'database.class.php',
		'database.interface.php',
		'database.mysql.php'
);
foreach($classes as $class_file)
{
	require_once INCLUDE_DIR . SB_DS . 'classes' . SB_DS . $class_file;
}
foreach($db_drivers as $drv)
{
	require_once INCLUDE_DIR . SB_DS . 'database' . SB_DS . $drv;
}
$app = SB_Application::GetApplication(defined('APP_NAME') ? APP_NAME : null);
$app->Load();

if( defined('LT_INSTALL') )
{
	return true;
}

$dbh = SB_Factory::getDbh();
//##start and propagate settings
sb_initialize_settings();
$app->LoadLanguage();
//##load modules
$app->LoadModules();
$app->Start();