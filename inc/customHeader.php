<?php

register_default_headers(array(
	'defaultImage' => array(
		'url' => get_template_directory_uri() . '/assets/images/sunset.jpg',
		'thumbnail_url' => get_template_directory_uri() . '/assets/images/sunset.jpg',
		'description' => __('This is a default image', 'SimonSummative1')
	)
));

$customHeaderDefaults = array(
	'width' => 1280,
	'height' => 720,
	'default-image' => get_template_directory_uri() . '/assets/images/sunset.jpg'
);

add_theme_support('custom-header', $customHeaderDefaults);

?>