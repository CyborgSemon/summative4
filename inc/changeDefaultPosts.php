<?php

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Services';
    $submenu['edit.php'][5][0] = 'Services';
    $submenu['edit.php'][10][0] = 'Add Service';
    $submenu['edit.php'][16][0] = 'Services Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
	$wp_post_types['post']->menu_icon = 'dashicons-hammer';
    $labels->name = 'Services';
    $labels->singular_name = 'Services';
    $labels->add_new = 'Add Service';
    $labels->add_new_item = 'Add Service';
    $labels->edit_item = 'Edit Service';
    $labels->new_item = 'Services';
    $labels->view_item = 'View Service';
    $labels->search_items = 'Search Service';
    $labels->not_found = 'No Services found';
    $labels->not_found_in_trash = 'No Services found in Trash';
    $labels->all_items = 'All Services';
    $labels->menu_name = 'Services';
    $labels->name_admin_bar = 'Services';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

?>