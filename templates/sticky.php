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
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>