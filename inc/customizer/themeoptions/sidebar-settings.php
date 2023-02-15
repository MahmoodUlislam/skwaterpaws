<?php
/*Blog Page Settings*/

Kirki::add_section( 'sidebar_settings_section', array(
    'title'          => esc_html__( 'Sidebar Settings', 'rs-pet-blog' ),
    'description'          => esc_html__( 'Control Sidebar Of Your Website', 'rs-pet-blog' ),
    'panel'          => 'rs_pet_blog_global_panel',
) );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'select',
	'settings'    => 'blog_page_sidebar',
	'label'       => esc_html__( 'Blog Page Sidebar', 'rs-pet-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'rs-pet-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'rs-pet-blog' ),
		'no' => esc_html__( 'No Sidebar', 'rs-pet-blog' ),
	],
] );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'select',
	'settings'    => 'archive_page_sidebar',
	'label'       => esc_html__( 'Archive Page Sidebar', 'rs-pet-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'rs-pet-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'rs-pet-blog' ),
		'no' => esc_html__( 'No Sidebar', 'rs-pet-blog' ),
	],
] );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'select',
	'settings'    => 'page_sidebar',
	'label'       => esc_html__( 'Page Sidebar', 'rs-pet-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'rs-pet-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'rs-pet-blog' ),
		'no' => esc_html__( 'No Sidebar', 'rs-pet-blog' ),
	],
] );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'select',
	'settings'    => 'post_sidebar',
	'label'       => esc_html__( 'Post Sidebar', 'rs-pet-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'rs-pet-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'rs-pet-blog' ),
		'no' => esc_html__( 'No Sidebar', 'rs-pet-blog' ),
	],
] );
