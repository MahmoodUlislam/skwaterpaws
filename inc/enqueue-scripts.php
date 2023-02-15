<?php
/**
 * Enqueue scripts and styles.
 */
function rs_pet_blog_scripts() {
	wp_enqueue_style( 'fontawesome', esc_url(get_theme_file_uri('assets/css/fontawesome.css')) );
	wp_enqueue_style( 'rs-pet-blog-style', get_stylesheet_uri() );
	wp_enqueue_script( 'imagesloaded.pkgd', esc_url( get_template_directory_uri() ) . '/assets/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'rs-pet-blog-menu', esc_url( get_template_directory_uri() ) . '/assets/js/menu.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'rs-pet-blog-active', esc_url( get_template_directory_uri() ) . '/assets/js/active.js', array( 'jquery' ), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rs_pet_blog_scripts' );

add_action('customize_controls_enqueue_scripts', 'rs_pet_blog_customizer_scripts');
function rs_pet_blog_customizer_scripts(){
	wp_enqueue_style('customizer-style', esc_url(get_theme_file_uri('inc/customizer/customizer-style.css')), array(), '49879', 'all');
}
