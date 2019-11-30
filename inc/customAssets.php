<?php

function addCustomThemeStyles () {
	wp_enqueue_style('customCSS', get_template_directory_uri() . '/assets/css/main.min.css', array(), '0.0.1', 'all');
	wp_enqueue_script('customJS', get_template_directory_uri() . '/assets/js/main.min.js', array(), '0.0.1', true);
}

add_action('wp_enqueue_scripts', 'addCustomThemeStyles');

?>