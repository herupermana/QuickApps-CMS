<?php
class QaMenuLink {
	public $table = 'menu_links';
	public $records = array(
		array(
			'id' => '1',
			'menu_id' => 'management',
			'lft' => '1',
			'rght' => '2',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/system/dashboard',
			'description' => '',
			'link_title' => 'Dashboard',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '2',
			'menu_id' => 'management',
			'lft' => '3',
			'rght' => '12',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/system/structure',
			'description' => '',
			'link_title' => 'Structure',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '3',
			'menu_id' => 'management',
			'lft' => '13',
			'rght' => '14',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/node/contents',
			'description' => '',
			'link_title' => 'Content',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '4',
			'menu_id' => 'management',
			'lft' => '15',
			'rght' => '16',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/system/themes',
			'description' => '',
			'link_title' => 'Appearance',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '5',
			'menu_id' => 'management',
			'lft' => '17',
			'rght' => '18',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/system/modules',
			'description' => '',
			'link_title' => 'Modules',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '6',
			'menu_id' => 'management',
			'lft' => '19',
			'rght' => '20',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/user',
			'description' => '',
			'link_title' => 'Users',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '7',
			'menu_id' => 'management',
			'lft' => '23',
			'rght' => '24',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/system/configuration',
			'description' => '',
			'link_title' => 'Configuration',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '8',
			'menu_id' => 'management',
			'lft' => '25',
			'rght' => '26',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/system/help',
			'description' => '',
			'link_title' => 'Help',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '9',
			'menu_id' => 'management',
			'lft' => '4',
			'rght' => '5',
			'parent_id' => '2',
			'link_path' => '',
			'router_path' => '/admin/block',
			'description' => 'Configure what block content appears in your site\'s sidebars and other regions.',
			'link_title' => 'Blocks',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '10',
			'menu_id' => 'management',
			'lft' => '6',
			'rght' => '7',
			'parent_id' => '2',
			'link_path' => '',
			'router_path' => '/admin/node/types',
			'description' => 'Manage content types.',
			'link_title' => 'Content Types',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '11',
			'menu_id' => 'management',
			'lft' => '8',
			'rght' => '9',
			'parent_id' => '2',
			'link_path' => '',
			'router_path' => '/admin/menu',
			'description' => 'Add new menus to your site, edit existing menus, and rename and reorganize menu links.',
			'link_title' => 'Menus',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '12',
			'menu_id' => 'management',
			'lft' => '10',
			'rght' => '11',
			'parent_id' => '2',
			'link_path' => '',
			'router_path' => '/admin/taxonomy',
			'description' => 'Manage tagging, categorization, and classification of your content.',
			'link_title' => 'Taxonomy',
			'options' => '',
			'module' => 'System',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '13',
			'menu_id' => 'main-menu',
			'lft' => '3',
			'rght' => '4',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/page/hooktags.html',
			'description' => '',
			'link_title' => 'Hooktags',
			'options' => '',
			'module' => 'Menu',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '17',
			'menu_id' => 'main-menu',
			'lft' => '5',
			'rght' => '6',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/page/about.html',
			'description' => '',
			'link_title' => 'About',
			'options' => '',
			'module' => 'Menu',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '18',
			'menu_id' => 'management',
			'lft' => '21',
			'rght' => '22',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/admin/locale',
			'description' => '',
			'link_title' => 'Languages',
			'options' => '',
			'module' => 'Locale',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '21',
			'menu_id' => 'main-menu',
			'lft' => '1',
			'rght' => '2',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/',
			'description' => '',
			'link_title' => 'Home',
			'options' => '',
			'module' => 'Menu',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '22',
			'menu_id' => 'user-menu',
			'lft' => '1',
			'rght' => '2',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/user/my_account',
			'description' => '',
			'link_title' => 'My account',
			'options' => '',
			'module' => 'Menu',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '23',
			'menu_id' => 'user-menu',
			'lft' => '3',
			'rght' => '4',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/user/logout',
			'description' => '',
			'link_title' => 'Logout',
			'options' => '',
			'module' => 'Menu',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '24',
			'menu_id' => 'main-menu',
			'lft' => '7',
			'rght' => '8',
			'parent_id' => '0',
			'link_path' => '',
			'router_path' => '/s/type:article',
			'description' => '',
			'link_title' => 'Blog',
			'options' => '',
			'module' => 'Menu',
			'target' => '_self',
			'expanded' => '0',
			'selected_on' => '/article/*.html
/s/type:article*',
			'selected_on_type' => 'reg',
			'status' => '1'
		),
		array(
			'id' => '25',
			'menu_id' => 'navigation',
			'lft' => '1',
			'rght' => '2',
			'parent_id' => '0',
			'link_path' => 'http://cms.quickapps.es',
			'router_path' => '',
			'description' => '',
			'link_title' => 'QuickApps Site',
			'options' => '',
			'module' => 'Menu',
			'target' => '_blank',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
		array(
			'id' => '26',
			'menu_id' => 'navigation',
			'lft' => '3',
			'rght' => '4',
			'parent_id' => '0',
			'link_path' => 'https://github.com/QuickAppsCMS/QuickApps-CMS/wiki',
			'router_path' => '',
			'description' => '',
			'link_title' => 'Wiki',
			'options' => '',
			'module' => 'Menu',
			'target' => '_blank',
			'expanded' => '0',
			'selected_on' => '',
			'selected_on_type' => '',
			'status' => '1'
		),
	);

}
