<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rs_pet_blog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Area', 'rs-pet-blog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rs-pet-blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar One', 'rs-pet-blog' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'rs-pet-blog' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-sidebar-1 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Two', 'rs-pet-blog' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'rs-pet-blog' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-sidebar-2 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Three', 'rs-pet-blog' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'rs-pet-blog' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-sidebar-3 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Four', 'rs-pet-blog' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'rs-pet-blog' ),
			'before_widget' => '<section id="%1$s" class="footer-sidebar widget footer-sidebar-4 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-title">',
        	'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rs_pet_blog_widgets_init' );
