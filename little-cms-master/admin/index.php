<?php
define('LT_ADMIN', 1);

require_once dirname(dirname(__FILE__)) . '/init.php';
require_once INCLUDE_DIR . SB_DS . 'template-functions.php';
require_once ADM_INCLUDE_DIR . SB_DS . 'functions.php';
if( !sb_is_user_logged_in() )
{
	header('Location: ' . SB_Route::_('login.php'));die();
}
$template_file = SB_Request::getString('tpl_file', 'index.php');
$mod = SB_Request::getString('mod', 'dashboard');
$app->ProcessModule($mod);
sb_process_template($template_file);
sb_show_template();