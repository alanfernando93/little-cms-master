<?php
function sb_build_admin_menu()
{
	SB_Menu::addMenuPage(SB_Text::_('Inicio'), SB_Route::_('index.php'), 'dashboard', 'manage_backend', 0);
	SB_Menu::addMenuPage(SB_Text::_('Administracion'), 'javascript:;', 'menu-management', 'manage_backend', 5);
	SB_Menu::addMenuPage(SB_Text::_('Configuracion'), SB_Route::_('settings.php'), 'menu-settings', 'manage_settings', 10);
	
	SB_Menu::addMenuChild('menu-settings', 
			'<span class="glyphicon glyphicon-cog"></span>'.SB_Text::_('Ajustes'), SB_Route::_('settings.php'), 'menu-general-settings', 'manage_general_settings');
	//SB_Menu::addMenuChild('menu-settings', SB_Text::_('Plantillas'), SB_Route::_('index.php?mod=templates'), 'menu-templates', 'manage_templates');
	SB_Menu::addMenuChild('menu-settings', 
			'<span class="glyphicon glyphicon-th"></span>'.SB_Text::_('Modulos'), SB_Route::_('index.php?mod=modules'), 'menu-modules', 'manage_modules');
	SB_Module::do_action('admin_menu');
	SB_Menu::buildMainMenu();
}