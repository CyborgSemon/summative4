<?php

function admin_style() {
	wp_enqueue_script('adminJS', get_template_directory_uri().'/assets/js/admin.min.js');
	wp_enqueue_style('adminCSS', get_template_directory_uri().'/assets/css/admin.min.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


?>