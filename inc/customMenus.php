<?php

function addCustomMenu () {
	add_theme_support('menus');

	register_nav_menu('top_navigation', __('This is a top nav bar', 'SimonSummative1'));
	register_nav_menu('bottom_navigation', __('This is a bottom nav bar', 'SimonSummative1'));
}

add_action('after_setup_theme', 'addCustomMenu');

?>