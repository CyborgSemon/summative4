<?php

function customPostTypes() {
	$args = array(
		'labels' => array(
			'name' => 'Testimonials',
			'singular_name' => 'testimonial',
			'add_new_item' => 'Add New Testimonial'
		),
		'description' => 'A list of all out testimonials',
		'public' => true,
		'hierarchical' => true,
		'show_in_nav_menus' => false,
		'show_in_rest' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'post-formats'
		),
		'delete_with_user' => false

	);
	register_post_type('testimonial', $args);
}

add_action('init', 'customPostTypes');

?>