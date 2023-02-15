<?php
Kirki::add_section( 'rs_pet_blog_theme_color', array(
    'title'          => esc_html__( 'Color Settings', 'rs-pet-blog' ),
    'description'    => esc_html__( 'Customize the colors of your website.', 'rs-pet-blog' ),
    'panel'          => 'rs_pet_blog_global_panel',
) );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'color',
	'settings'    => 'primary_color',
	'label'       => __( 'Primary Background Color', 'rs-pet-blog' ),
	'section'     => 'rs_pet_blog_theme_color',
	'default'     => '#00af00',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.rs-pet-blog-standard-post__overlay-category span.cat-links a, .widget .tagcloud a, blockquote.wp-block-quote.is-style-red-qoute, .scrooltotop a:hover, .discover-me-button a, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce ul.products li.product .onsale, .woocommerce span.onsale, .pagination li.page-item a, .pagination li.page-item span,.rs-pet-blog-standard-post__blog-meta .cat-links a, .post_categories_on_thumbnail .cat-links a',
			'property' => 'background-color',
		),
		array(
			'element'  => '.rs-pet-blog-standard-post__blog-meta .cat-links a, .post_categories_on_thumbnail .cat-links a',
			'property' => 'border-color',
		),
	),
] );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'color',
	'settings'    => 'primary_text_color',
	'label'       => __( 'Primary Text Color', 'rs-pet-blog' ),
	'section'     => 'rs_pet_blog_theme_color',
	'transport'   => 'auto',
	'default'     => '#00af00',
	'output' => array(
		array(
			'element'  => '.rs-pet-blog-standard-post__blog-meta>span.posted_by a i, .rs-pet-blog-standard-post__blog-meta>span.posted-on a, .widget-area .widget.widget_rss a.rsswidget, .widget ul li a:hover, .widget ul li a:visited, .widget ul li a:focus, .widget ul li a:active, .widget ol li a:hover, .widget ol li a:visited, .widget ol li a:focus, .widget ol li a:active, .rs-pet-blog-standard-post .rs-pet-blog-standard-post__full-summery a, a:hover, a:focus, a:active, span.opacity-none:before, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce ul.products li.product .price, span.opacity-none a:before',
			'property' => 'color',
		),
		array(
			'element'  => '.rs-pet-blog-standard-post__blog-meta>span.posted-on i.line',
			'property' => 'background-color',
		),
	),
] );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'color',
	'settings'    => 'footer_bg_color',
	'label'       => __( 'Footer Background Color', 'rs-pet-blog' ),
	'section'     => 'rs_pet_blog_theme_color',
	'default'     => '#091a44',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => 'footer.site-footer, .site-copyright',
			'property' => 'background-color',
		),
	),
] );



Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'color',
	'settings'    => 'footer_title_color',
	'label'       => __( 'Footer Title Color', 'rs-pet-blog' ),
	'section'     => 'rs_pet_blog_theme_color',
	'default'     => '#5cB85c',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.footer-content .widget h2.widget-title.footer-title',
			'property' => 'color',
		),
		array(
			'element'  => '.footer-content .widget h2.widget-title.footer-title:before',
			'property' => 'background-color',
		),
	),
] );


Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'color',
	'settings'    => 'footer_br_color',
	'label'       => __( 'Copyright Top Border Color', 'rs-pet-blog' ),
	'section'     => 'rs_pet_blog_theme_color',
	'default'     => '1px solid rgba(221, 221, 221, 0.1)',
	'choices'     => [
		'alpha' => true,
	],
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.site-copyright',
			'property' => 'border-color',
		),
	),
] );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'color',
	'settings'    => 'copyright_text_color',
	'label'       => __( 'Copyright Text Color', 'rs-pet-blog' ),
	'section'     => 'rs_pet_blog_theme_color',
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => '.site-copyright',
			'property' => 'color',
		),
	),
] );
