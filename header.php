<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo get_bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<?php if (is_front_page()): ?>
		<body>
	<?php else: ?>
		<body class="page">
	<?php endif; ?>
		<?php if (has_nav_menu('top_navigation')): ?>
			<?php if (!is_front_page()): ?>
				<div class="navBar">
					<div class="topNavContainer">
						<?php if (get_theme_mod('customLogo')): ?>
							<div class="navLogo">
								<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_mod('customLogo'); ?>" alt="Our Logo"></a>
							</div>
						<?php endif; ?>
						<?php
							wp_nav_menu(array(
								'theme_location' => 'top_navigation'
							));
						?>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
