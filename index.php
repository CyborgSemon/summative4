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
	<div class="homeContainer" id="homeContainer">
		<section class="homeSection">
			<div class="homeBackground" style="background-image: url(<?php echo get_header_image(); ?>);"></div>
			<div class="navBar" id="topNav">
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
				<?php
				$image = '';
				if (get_theme_mod('aboutUsImage') != '') {
					$image = 'class="aboutUsImage" style="background-image: url(' . get_theme_mod('aboutUsImage') . ')"';
				} else {
					$image = 'class="aboutUsImage noTopImage"';
				}

				?>
				<div <?php echo $image; ?>>
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
				<div class="servicesHeading">
					<h2>Testimonials</h2>
				</div>
				<?php

				$testimonialString = '';
				$buttonString = '';
				$counter = 1;
				for ($i=1; $i < 7; $i++) {
					if (get_theme_mod("featuredTestimonial{$i}") != '') {
						$post = get_post(get_theme_mod("featuredTestimonial{$i}"));
						$image = '';
						if (has_post_thumbnail($post)) {
							$image = '<div class="testimonialImage" style="background-image: url(' . get_the_post_thumbnail_url($post) . ')"></div>';
						}
						$person = '';
						if (get_post_meta(get_the_ID(), 'testimonialPerson', true) != '') {
							$person = '<div class="testimonialPerson">- ' . get_post_meta(get_the_ID(), 'testimonialPerson', true) . '</div>';
						}
						$testimonialString .= '<div class="testimonial">' . $image . '<p class="testimonialText">' . get_the_excerpt($post) . '</p>' . $person . '</div>';
						$buttonString .= '<span class="dot" data-slide-num="' . $counter . '"></span>';
						$counter++;
					}
				}

				?>

				<div class="testimonialBox">
					<?php if ($testimonialString != ''): ?>
						<div id="testimonials">
							<?php echo $testimonialString; ?>
							<div class="dotsContainer">
								<?php echo $buttonString; ?>
							</div>
						</div>
					<?php else: ?>
						<div class="testimonialError">
							<h3>There are no active testimonials</h3>
						</div>
					<?php endif; ?>
				</div>
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
							<?php
							$image = '';
							if (has_post_thumbnail($post1)) {
								$image = 'style="background-image: url(' . get_the_post_thumbnail_url($post1) . ');"';
							}

							?>
							<div class="serviceImage" <?php echo $image; ?>></div>
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
		<div class="pageTop">
			<?php
			$thumbnail = '';
			$headingClass = '';
			if (has_post_thumbnail()) {
				$thumbnail = 'style="background-image: url(' . get_the_post_thumbnail_url() . ');"';
				$headingClass = 'class="hasImage"';
			}

			?>
			<div class="pageBackground" <?php echo $thumbnail; ?>></div>
			<div class="pageHeading">
				<h2 <?php echo $headingClass; ?>><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="pageContent singlePage">
			<?php echo the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>