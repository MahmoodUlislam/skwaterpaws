<?php
/**
 * Template Name: Blank Page
 * Template Post Type: post, page
 *
 * @package RS Pet Blog
 */
get_header();
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content', 'page' );
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
		endif;
	endwhile; // End of the loop.
get_footer();
