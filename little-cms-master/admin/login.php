<?php
define('LT_ADMIN', 1);

require_once dirname(dirname(__FILE__)) . '/init.php';
require_once ADM_INCLUDE_DIR . SB_DS . 'functions.php';
require_once INCLUDE_DIR . SB_DS . 'template-functions.php';
$template_file = SB_Request::getString('tpl_file', 'login.php');
$mod = SB_Request::getString('mod');
if( $mod )
	sb_process_module($mod);
sb_process_template($template_file);
sb_show_template();