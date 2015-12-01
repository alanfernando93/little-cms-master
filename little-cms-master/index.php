<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'init.php';
sb_process_module(SB_Request::getString('mod', 'content'));
$template_file 	= SB_Request::getString('tpl', 'index.php');
sb_process_template($template_file);
sb_show_template();