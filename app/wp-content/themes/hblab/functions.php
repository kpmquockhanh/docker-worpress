<?php
add_action('wp_enqueue_scripts', 'my_register_styles');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 378, 252);
function my_register_styles(){
	wp_register_style('fa', get_template_directory_uri().'/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_register_style('yakuhanjp', get_template_directory_uri().'/assets/fonts/yakuhanjp-master/dist/css/yakuhanjp_s.min.css');
	wp_register_style('main', get_template_directory_uri().'/assets/css/main.css');
	wp_register_script('modernizr', get_template_directory_uri().'/assets/js/libs/modernizr.min.js');
	wp_register_script('jquery', get_template_directory_uri().'/assets/js/libs/jquery.min.js');
	wp_register_script('velocity', get_template_directory_uri().'/assets/js/libs/velocity.min.js');
	wp_register_script('jquery.ua', get_template_directory_uri().'/assets/js/libs/jquery.ua.min.js');
	wp_register_script('jquery.easing', get_template_directory_uri().'/assets/js/libs/jquery.easing.min.js');
//	wp_register_script('style', get_template_directory_uri().'/assets/js/style.min.js');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');
function my_enqueue_styles () {
	wp_enqueue_style( 'fa' );
	wp_enqueue_style( 'yakuhanjp' );
	wp_enqueue_style( 'main' );
	wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery');
	wp_enqueue_script('velocity');
	wp_enqueue_script('jquery.ua');
	wp_enqueue_script('jquery.easing');
//	wp_enqueue_script('style');
}
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
function register_my_menu() {
    register_nav_menu('main-menu',__( 'MainMenu' ));
}
add_action( 'init', 'register_my_menu' );

?>
