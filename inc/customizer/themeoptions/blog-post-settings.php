<?php
/*Blog Page Settings*/

Kirki::add_section( 'post_loop_settings_section', array(
    'title'          => esc_html__( 'Post Loop Settings', 'rs-pet-blog' ),
    'panel'          => 'rs_pet_blog_global_panel',
) );

Kirki::add_field( 'rs_pet_blog_config', [
	'type'        => 'select',
	'settings'    => 'post_column',
	'label'       => esc_html__( 'Post Column', 'rs-pet-blog' ),
	'section'     => 'post_loop_settings_section',
	'default'    => '3',
	'priority'    => 10,
	'choices' => [
			'4' => __( '4 Colmun', 'rs-pet-blog' ),
			'3' => __( '3 Column', 'rs-pet-blog' ),
			'2' => __( '2 Column', 'rs-pet-blog' ),
		],
] );

Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_post_column',
    'label'       => '',
    'section'     => 'post_loop_settings_section',
    'default'     => '<hr>',
) );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_category',
    'label'       => esc_html__( 'Show Post Category', 'rs-pet-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => '1',
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_title',
    'label'       => esc_html__( 'Show Post Title', 'rs-pet-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => '1',
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author',
    'label'       => esc_html__( 'Show Post Author', 'rs-pet-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => '1',
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_thumbnail',
    'label'       => esc_html__( 'Thumbnail  On//Off', 'rs-pet-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => '1',
] );
Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_excerpt',
    'label'       => esc_html__( 'Show Post Excerpt', 'rs-pet-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => '1',
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_date',
    'label'       => esc_html__( 'Show Post Date', 'rs-pet-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => '1',
] );