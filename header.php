<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo get_bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php if (has_nav_menu('top_navigation')): ?>
			<?php if (!is_front_page()): ?>
				<div class="navBar">
					<?php
						// IDEA: If there is a logo present in the customiser and it is turned on in the menu
					?>

					<?php
						wp_nav_menu(array(
							'theme_location' => 'top_navigation',
							'container' => 'div',
							'container_class' => 'topNavContainer'
						));
					?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
