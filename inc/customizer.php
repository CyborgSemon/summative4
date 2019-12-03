<?php

function customizerOptions ($wp_customize) {
	// Background color of the entire website
	$wp_customize->add_setting('backgroundColor', array(
		'default' => '#FFF',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'backgroundColorController', array(
		'label' => __('Background Color', 'SimonSummative1'),
		'description' => 'Change the background color of the site',
		'section' => 'colors',
		'settings' => 'backgroundColor',
	)));
	// Text color of the entire site
	$wp_customize->add_setting('textColor', array(
		'default' => '#000',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'textColorController', array(
		'label' => __('Text Color', 'SimonSummative1'),
		'description' => 'The main color of the text',
		'section' => 'colors',
		'settings' => 'textColor',
	)));
	// Footer background color (Text field)
	$wp_customize->add_setting('footerBackgroundColor', array(
		'default' => '#B4B4B4',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footerBackgroundColorController', array(
		'label' => __('Footer Background Color', 'SimonSummative1'),
		'description' => 'Change the footer background color',
		'section' => 'colors',
		'settings' => 'footerBackgroundColor',
	)));
	// Footer text color (Text field)
	$wp_customize->add_setting('footerTextColor', array(
		'default' => '#FFF',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footerTextColorController', array(
		'label' => __('Footer Text Color', 'SimonSummative1'),
		'description' => 'The color of the text in the footer',
		'section' => 'colors',
		'settings' => 'footerTextColor',
	)));


	// Logo to sit on home page and on the nav bar on other pages (Image field)
	$wp_customize->add_section('customLogoSection', array(
		'title' => __('Custom Brand', 'SimonSummative1'),
		'priority' => 51
	));
	$wp_customize->add_setting('customLogo', array(
		'default' => get_template_directory_uri() . '/assets/images/defaultWhite.png',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'customLogoController', array(
		'label' => __('Custom Logo', 'SimonSummative1'),
		'description' => 'Change the logo of the theme',
		'section' => 'customLogoSection',
		'settings' => 'customLogo',
	)));


	// Learn more button toggle
	$wp_customize->add_setting('learnMoreButtonRadio', array(
		'default' => 'on',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'learnMoreButtonRadioController', array(
		'label' => __('Learn More Button Toggle', 'SimonSummative1'),
		'description' => 'Toggle the Learn More button on the home page',
		'section' => 'homePageSection',
		'settings' => 'learnMoreButtonRadio',
		'type' => 'radio',
		'choices' => array(
			'on' => 'On',
			'off' => 'Off'
		)
	)));
	// Learn more button page
	$allPages = array('' => '');
	$pages = get_pages();
	foreach($pages as $page) {
	    $allPages[get_page_link($page->ID)] = $page->post_title;
	}
	$wp_customize->add_setting('learnMoreRadioOptions', array(
		'default' => '',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'learnMoreRadioOptions', array(
		'label' => __('Learn More Button Page Link', 'SimonSummative1'),
		'description' => 'Select the page the Learn More button links to',
		'section' => 'homePageSection',
		'settings' => 'learnMoreRadioOptions',
		'type' => 'select',
		'choices' => $allPages
	)));


	// About Us slab toggle on and off (Radio toggle)
	$wp_customize->add_section('homePageSection', array(
		'title' => __('Home Page Options', 'SimonSummative1'),
		'priority' => 52
	));
	$wp_customize->add_setting('aboutUsRadio', array(
		'default' => 'on',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutUsRadioController', array(
		'label' => __('About Us Section Toggle', 'SimonSummative1'),
		'description' => 'Toggle the About Us section on the home page',
		'section' => 'homePageSection',
		'settings' => 'aboutUsRadio',
		'type' => 'radio',
		'choices' => array(
			'on' => 'On',
			'off' => 'Off'
		)
	)));
	// Anout Us text (Text field)
	$wp_customize->add_setting('aboutUsText', array(
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis sapien vel massa finibus, ac fermentum ligula egestas. Aenean imperdiet sodales dictum. Pellentesque cursus metus eros, et fermentum mi commodo sed. Nunc malesuada dui massa, vel rhoncus dolor ultricies et. Donec eu mi ullamcorper, vestibulum est at, venenatis ante. Pellentesque condimentum consectetur enim vel accumsan. Nulla fermentum risus et lacus porttitor, in aliquam justo commodo.',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aboutUsTextController', array(
		'label' => __('About Us Text', 'SimonSummative1'),
		'description' => 'The text that apperas in the About Us section',
		'section' => 'homePageSection',
		'settings' => 'aboutUsText',
		'type' => 'textarea'
	)));
	// About Us image (Image field)
	$wp_customize->add_setting('aboutUsImage', array(
		'default' => get_template_directory_uri() . '/assets/images/sunset.jpg',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutUsImageController', array(
		'label' => __('About Us Side Image', 'SimonSummative1'),
		'description' => 'Change the side image of the About us section',
		'section' => 'homePageSection',
		'settings' => 'aboutUsImage',
	)));


	// Testimonials slab (Radio toggle)
	$wp_customize->add_setting('testimonialsRadio', array(
		'default' => 'off',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonialsRadioController', array(
		'label' => __('Testimonials Section Toggle', 'SimonSummative1'),
		'description' => 'Toggle the Testimonials section on the home page',
		'section' => 'homePageSection',
		'settings' => 'testimonialsRadio',
		'type' => 'radio',
		'choices' => array(
			'on' => 'On',
			'off' => 'Off'
		)
	)));
	// Display Testimonials custom post type (Choose or just random) (Selects)
	$allTestimonials = array('' => '');
	$args = array(
		'post_type' => 'testimonial',
		'post_status' => 'publish'
	);
	$allPosts = get_posts($args);
	foreach($allPosts as $post) {
	    $allTestimonials[$post->ID] = $post->post_title;
	}
	for ($i=1; $i < 7; $i++) {
		$wp_customize->add_setting("featuredTestimonial{$i}", array(
			'default' => '',
			'transport' => 'refresh'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, "featuredTestimonial{$i}Controller", array(
			'label' => __("Testimonial {$i}", 'SimonSummative1'),
			'description' => "Select Testimonial number {$i}",
			'section' => 'homePageSection',
			'settings' => "featuredTestimonial{$i}",
			'type' => 'select',
			'choices' => $allPostsList
		)));
	}


	// Products / Services slab (Radio toggle)
	$wp_customize->add_setting('servicesRadio', array(
		'default' => 'on',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'servicesRadioController', array(
		'label' => __('Services Section Toggle', 'SimonSummative1'),
		'description' => 'Toggle the Services section on the home page',
		'section' => 'homePageSection',
		'settings' => 'servicesRadio',
		'type' => 'radio',
		'choices' => array(
			'on' => 'On',
			'off' => 'Off'
		)
	)));
	// Products / Services chosen products (min of 2, max of 3) (Selects)
	$allSerices = array('' => '');
	$args2 = array(
		'post_type' => 'post',
		'post_status' => 'publish'
	);
	$allPosts2 = get_posts($args2);
	foreach($allPosts2 as $post) {
	    $allSerices[$post->ID] = $post->post_title;
	}
	for ($i=1; $i < 4; $i++) {
		$wp_customize->add_setting("featuredService{$i}", array(
			'default' => '',
			'transport' => 'refresh'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, "featuredService{$i}Controller", array(
			'label' => __("Service {$i}", 'SimonSummative1'),
			'description' => "Select Service number {$i}",
			'section' => 'homePageSection',
			'settings' => "featuredService{$i}",
			'type' => 'select',
			'choices' => $allSerices
		)));
	}
}

add_action('customize_register', 'customizerOptions');


function customCSS () {
	?>
		<style type="text/css">
			:root {
				--background: <?php echo get_theme_mod('backgroundColor', '#FFF'); ?>;
				--textColor: <?php echo get_theme_mod('textColor', '#000'); ?>;
				--footerBackground: <?php echo get_theme_mod('footerBackgroundColor', '#B4B4B4') ?>;
				--footerTextColor: <?php echo get_theme_mod('footerTextColor', '#FFF') ?>;
			}
		</style>
	<?php
}

add_action('wp_head', 'customCSS');

?>