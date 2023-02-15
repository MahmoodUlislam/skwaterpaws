<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RS Pet Blog
 */

$s_post_el_is_on = array(
	'show_post_category' => get_theme_mod('show_single_post_category', true),
	'show_post_thumbnail' => get_theme_mod('show_single_post_thumbnail', true),
	'show_post_date' => get_theme_mod('show_single_post_date', true),
	'show_post_author' => get_theme_mod('show_single_post_author', true),
	'show_post_title' => get_theme_mod('show_single_post_title', true),
	'show_recommend_posts' => get_theme_mod('show_recommend_posts', true),
	'show_post_navigation' => get_theme_mod('show_post_navigation', true),
	'show_post_tags' => get_theme_mod('show_single_post_tags', true),
);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'rs-pet-blog-standard-post' ); ?>>
	<div class="rs-pet-blog-standard-post__entry-content text-left">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="rs-pet-blog-standard-post__thumbnail post-header p-0">
				<?php
				if (true == $s_post_el_is_on['show_post_thumbnail']) :
					rs_pet_blog_post_thumbnail();
				endif;
				if(true == $s_post_el_is_on['show_post_category']) :
				?>
					<div class="rs-pet-blog-standard-post__overlay-category">
						<?php rs_pet_blog_categories(); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif;?>
		<div class="rs-pet-blog-standard-post__content-wrapper">
			<div class="rs-pet-blog-standard-post__post-title">
				<?php
				if(true == $s_post_el_is_on['show_post_title']) :?>
					<h1 class="single-post-title"><?php the_title(); ?></h1>
				<?php endif;
					$nolinebetweenmeta = '';
					if (false == $s_post_el_is_on['show_post_author']) {
						$nolinebetweenmeta = ' no-line-between-meta';
					}
				?>
			</div>
			<div class="rs-pet-blog-standard-post__blog-meta<?php echo esc_attr($nolinebetweenmeta);?>">
				<?php
				if (true == $s_post_el_is_on['show_post_author']) :
					rs_pet_blog_posted_by( true );
				endif;
				if(true == $s_post_el_is_on['show_post_date']) :
					rs_pet_blog_posted_on();
				endif;
				?>
			</div>
			<div class="rs-pet-blog-standard-post__full-summery text-left">
				<?php
					the_content();
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rs-pet-blog' ),
							'after'  => '</div>',
						)
					);
					?>
			</div>
			<?php if( true == $s_post_el_is_on['show_post_tags']) : ?>
				<div class="rs-pet-blog-standard-post_post-meta text-center">
					<?php rs_pet_blog_post_tag(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

</article>
<!-- #post-<?php the_ID();?>-->

