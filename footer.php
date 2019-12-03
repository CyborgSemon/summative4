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
	<?php wp_footer(); ?>
	</body>
</html>