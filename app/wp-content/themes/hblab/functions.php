<?php
add_action('wp_enqueue_scripts', 'my_register_styles');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 378, 252);
function my_register_styles(){
	wp_register_style('fa', get_template_directory_uri().'/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_register_style('yakuhanjp', get_template_directory_uri().'/assets/fonts/yakuhanjp-master/dist/css/yakuhanjp_s.min.css');
	wp_register_style('main', get_template_directory_uri().'/assets/css/main.css');
	wp_register_style('post', get_template_directory_uri(). '/assets/css/postStyle.css');
	wp_register_script('modernizr', get_template_directory_uri().'/assets/js/libs/modernizr.min.js');
	wp_register_script('jquery', get_template_directory_uri().'/assets/js/libs/jquery.min.js');
	wp_register_script('velocity', get_template_directory_uri().'/assets/js/libs/velocity.min.js');
	wp_register_script('jquery.ua', get_template_directory_uri().'/assets/js/libs/jquery.ua.min.js');
	wp_register_script('jquery.easing', get_template_directory_uri().'/assets/js/libs/jquery.easing.min.js');
	wp_register_script('style', get_template_directory_uri().'/assets/js/formatStyle.min.js');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');
function my_enqueue_styles () {
	wp_enqueue_style( 'fa' );
	wp_enqueue_style( 'yakuhanjp' );
	wp_enqueue_style( 'main' );
	wp_enqueue_style('post');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery');
	wp_enqueue_script('velocity');
	wp_enqueue_script('jquery.ua');
	wp_enqueue_script('jquery.easing');
	wp_enqueue_script('style');
}

/**
 *  Register menu to show
 */
function register_my_menu() {
	register_nav_menu('main-menu',__( 'Main menu' ));
	register_nav_menu('footer-menu',__( 'Footer menu' ));


	/**
	 *  Add class to a tag in menu
	 */
	add_filter( 'nav_menu_link_attributes', function($atts, $item, $args) {
		if ($args->theme_location === 'main-menu') {
			$atts['class'] = "te-gnav__list__item__hit";
		}
		if ($args->theme_location === 'footer-menu') {
			$atts['class'] = "te-footer__nav__list__item__hit";
		}
		return $atts;
	}, 100, 3 );

	/**
	 *  Add class to li tag in menu
	 */
	add_filter('nav_menu_css_class', function($atts, $item, $args) {
		if ($args->theme_location === 'main-menu') {
			$atts['class'] = "te-gnav__list__item";
		}
		if ($args->theme_location === 'footer-menu') {
			$atts['class'] = 'te-footer__nav__list__item';
		}
		return $atts;
	}, 100, 3 );

}
add_action( 'init', 'register_my_menu' );



/**
 * Add custom logo
 */
add_theme_support( 'custom-logo', [
	'height' => 45,
	'width'  => 224,
]);

/**
 * Create control setting your word
 */
function add_your_word_setting($wp_customize) {
	// add a setting for the site logo
	$wp_customize->add_setting('your_word');
	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'your_word',
			array(
				'label' => 'Your word',
				'section' => 'title_tagline',
				'settings' => 'your_word',
			)
		)
	);
}
add_action( 'customize_register', 'add_your_word_setting' );

/**
 *
 * Get views of post
 * @return string
 *
 */
function gt_get_post_view() {
	$count = get_post_meta( get_the_ID(), 'post_views_count', true );
	return "$count views";
}

/**
 * Increase post view when user view a post
 * Check if viewer is in session
 */
function gt_set_post_view() {
	$key = 'post_views_count';
	$post_id = get_the_ID();
	if(!isset($_SESSION["viewed_post" . $post_id])) {
		$_SESSION["viewed_post" . $post_id] = 1;
		$old_views = get_post_meta( $post_id, $key, true );
		$new_views = absint( $old_views ) + 1;
		update_post_meta( $post_id, $key, $new_views, $old_views );
	}
}

/**
 * Add column post_views
 * @param $columns
 * @return mixed
 */
function gt_posts_column_views( $columns ) {
	$columns['post_views'] = 'Views';
	return $columns;
}

/**
 * @param $column
 */
function gt_posts_custom_column_views( $column ) {
	if ( $column === 'post_views') {
		echo gt_get_post_view();
	}
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

?>
