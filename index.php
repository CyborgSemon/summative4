<?php get_header(); ?>

<?php

function runFooter() {
	return wp_nav_menu(array(
		'theme_location' => 'bottom_navigation',
		'container' => 'div',
		'container_class' => 'footer'
	));
}

?>

<?php if (is_front_page()): ?>
	<?php
	$finalArea = '';
	if (get_theme_mod('aboutUsRadio') == 'on') {
		$finalArea = 'aboutUsRadio';
	}
	if (get_theme_mod('testimonialsRadio') == 'on') {
		$finalArea = 'testimonialsRadio';
	}
	if (get_theme_mod('servicesRadio') == 'on') {
		$finalArea = 'servicesRadio';
	}

	?>
	<div class="homeContainer">
		<section class="homeSection" id="landingSection">
			<div class="homeBackground" style="background-image: url(<?php echo get_header_image(); ?>);"></div>
			<div class="navBar">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'top_navigation',
						'container' => 'div',
						'container_class' => 'topNavContainer'
					));
				?>
			</div>
			<div class="homeMain">
				<div class="mainLogo">
					<img src="<?php echo get_theme_mod('customLogo', get_template_directory_uri() . '/assets/images/defaultWhite.png'); ?>">
				</div>
				<div class="buttons">
					<?php if (get_theme_mod('aboutUsRadio') == 'on'): ?>
						<button id="aboutUsButton" class="button">About Us</button>
					<?php endif; ?>
					<?php if (get_theme_mod('learnMoreButtonRadio') == 'on'): ?>
						<a class="button" href="<?php echo get_theme_mod('learnMoreRadioOptions'); ?>">Learn More</a>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<?php if (get_theme_mod('aboutUsRadio') == 'on'): ?>
			<section class="homeSection" id="aboutUsSection">
				<div class="aboutUsImage" style="background-image: url(<?php echo get_theme_mod('aboutUsImage') ?>)">
					<h2 class="mobile">About Us</h2>
				</div>
				<div class="aboutUsContent">
					<h2 class="desktop">About Us</h2>
					<p><?php echo get_theme_mod('aboutUsText'); ?></p>
				</div>
				<?php if ($finalArea == 'aboutUsRadio'): ?>
					<div class="footerBox">
						<?php
							runFooter();
						?>
					</div>
				<?php endif; ?>
			</section>
		<?php endif; ?>
		<?php if (get_theme_mod('testimonialsRadio') == 'on'): ?>
			<section class="homeSection">
				This is the testimonials page
				<?php if ($finalArea == 'testimonialsRadio'): ?>
					<div class="footerBox">
						<?php
							runFooter();
						?>
					</div>
				<?php endif; ?>
			</section>
		<?php endif; ?>
		<?php if (get_theme_mod('servicesRadio') == 'on'): ?>
			<section class="homeSection">
				<div class="servicesHeading">
					<h2>Services</h2>
				</div>
				<div class="serviceOptions">
					<?php if (get_theme_mod('featuredService1') != ''): ?>
						<?php $post1 = get_post(get_theme_mod('featuredService1')); ?>
						<div class="service">
							<div class="serviceImage"style="background-image: url(<?php echo get_the_post_thumbnail_url($post1); ?>)"></div>
							<div class="serviceInfo">
								<h3><?php echo $post1->post_title; ?></h3>
								<a class="button" href="<?php echo $post1->guid; ?>">Learn More</a>
							</div>
						</div>
					<?php endif; ?>
					<?php if (get_theme_mod('featuredService2') != ''): ?>
						<?php $post2 = get_post(get_theme_mod('featuredService2')); ?>
						<div class="service">
							<div class="serviceImage"style="background-image: url(<?php echo get_the_post_thumbnail_url($post2); ?>)"></div>
							<div class="serviceInfo">
								<h3><?php echo $post2->post_title; ?></h3>
								<a class="button" href="<?php echo $post2->guid; ?>">Learn More</a>
							</div>
						</div>
					<?php endif; ?>
					<?php if (get_theme_mod('featuredService3') != ''): ?>
						<?php $post3 = get_post(get_theme_mod('featuredService3')); ?>
						<div class="service">
							<div class="serviceImage"style="background-image: url(<?php echo get_the_post_thumbnail_url($post3); ?>)"></div>
							<div class="serviceInfo">
								<h3><?php echo $post3->post_title; ?></h3>
								<a class="button" href="<?php echo $post3->guid; ?>">Learn More</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<?php if ($finalArea == 'servicesRadio'): ?>
					<div class="footerBox">
						<?php
							runFooter();
						?>
					</div>
				<?php endif; ?>
			</section>
		<?php endif; ?>
	</div>
<?php elseif (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
		<div class="container">
			<h2 class="blog-title"><?php the_title(); ?></h2>
			<div class="blog-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>