<?php
/*
 * Template Name: New Template
 * Template Post Type: post
 */

get_header();  ?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {

		the_post(); ?>

		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>

	<?php }
}
get_footer();
