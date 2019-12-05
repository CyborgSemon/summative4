	<?php if (has_nav_menu('bottom_navigation')): ?>
		<?php if (!is_front_page()): ?>
			<div class="footerBox">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'bottom_navigation',
						'container' => 'div',
						'container_class' => 'footer'
					));
				?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<div class="toTopButton" id="toTop">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>
		To Top
	</div>
	<?php wp_footer(); ?>
	</body>
</html>