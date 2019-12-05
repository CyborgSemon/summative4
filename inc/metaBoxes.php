<?php

function categories_add_custom_box () {
	add_meta_box(
		'categoriesId',
		'Categories Meta Box',
		'categories_custom_box_html',
		'page',
		'normal',
		'default',
		null
    );
	add_meta_box(
		'testimonialPerson',
		'Testimonial Person Meta Box',
		'testimonial_person_custom_box_html',
		'testimonial',
		'normal',
		'default',
		null
    );
}

add_action('add_meta_boxes', 'categories_add_custom_box');

function categories_custom_box_html ($post) {
	$categories = get_categories(array(
		'taxonomy' => 'category'
	));
    ?>
    <label for="categories">The service type that you would like displayed on this page</label>
    <select id="categories" name="postCatagory">
        <?php foreach ($categories as $category): ?>
			<?php
			$selected = '';
			if ($category->term_id == get_post_meta(get_the_ID(), 'postCatagory', true)) {
				$selected = 'selected';
			}
			?>
			<option value="<?php echo $category->term_id;?>" <?php echo $selected; ?>><?php echo $category->name;?></option>
        <?php endforeach; ?>
    </select>
    <?php
}

function testimonial_person_custom_box_html ($post) {
	?>
	<label for="testimonialPersonInput">The service type that you would like displayed on this page</label>
	<input id="testimonialPersonInput" type="text" name="testimonialPerson" value="<?php echo get_post_meta(get_the_ID(), 'testimonialPerson', true) ?>">
	<?php
}

function custom_save_meta_boxes ($post_id) {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	$fields = ['postCatagory', 'testimonialPerson'];

	foreach ($fields as $field) {
		if (array_key_exists($field, $_POST)) {
			update_post_meta($post_id, $field, $_POST[$field]);
		}
	}
}

add_action('save_post', 'custom_save_meta_boxes');

?>