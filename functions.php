<?php

$dir = get_template_directory();

require_once $dir . '/inc/customAssets.php';
require_once $dir . '/inc/customMenus.php';
require_once $dir . '/inc/customHeader.php';
require_once $dir . '/inc/customPosts.php';
require_once $dir . '/inc/changeDefaultPosts.php';
require_once $dir . '/inc/metaBoxes.php';

require_once $dir . '/inc/adminStyles.php';

require_once $dir . '/inc/customizer.php';


require get_parent_theme_file_path('./inc/alert.php');


add_theme_support('wp-block-styles');
add_theme_support('post-thumbnails');



?>