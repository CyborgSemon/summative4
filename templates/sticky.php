<?php
/*
Template Name: Sticky
Template Post Type: page
*/
?>


<?php get_header(); ?>

<?php if (have_posts()): ?>
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
		<div class="pageContent">
			<?php echo the_content(); ?>
			<div class="stickyItemsContainer">
				<div class="sideImage" id="sideStickyImage"></div>
				<div class="stickyItems">
					<?php

					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'cat' => get_post_meta(get_the_ID(), 'postCatagory', true)
					);
					$allServices = new WP_Query($args);
					$indecator = 0;

					?>
					<?php if ($allServices->have_posts()): ?>
						<?php while ($allServices->have_posts()): $allServices->the_post(); ?>
							<?php

							$image = '';
							if (has_post_thumbnail()) {
								$image = 'data-image-link="' . get_the_post_thumbnail_url() . '"';
							}

							?>
							<div class="item" <?php echo $image; ?>>
								<div class="mobileImage" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
								<a class="button dark" href="<?php the_permalink(); ?>">Learn More</a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>