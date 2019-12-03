<?php

$dir = get_template_directory();

require_once $dir . '/inc/customAssets.php';
require_once $dir . '/inc/customMenus.php';
require_once $dir . '/inc/customHeader.php';
require_once $dir . '/inc/customPosts.php';
require_once $dir . '/inc/changeDefaultPosts.php';

require_once $dir . '/inc/customizer.php';

add_theme_support('wp-block-styles');
add_theme_support('post-thumbnails');

?>