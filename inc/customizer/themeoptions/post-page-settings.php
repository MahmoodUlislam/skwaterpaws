<?php
/**
 * Blog single content customization
 */

Kirki::add_section( 'post_page_section', array(
    'title'          => esc_html__( 'Post Page Settings', 'rs-pet-blog' ),
    'description'    => esc_html__( 'Customize The Looks of Post Page', 'rs-pet-blog' ),
    'panel'          => 'rs_pet_blog_global_panel',
) );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_category',
    'label'       => esc_html__( 'Show Post Category', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 11,
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_author',
    'label'       => esc_html__( 'Show Post Author', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 12,
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_thumbnail',
    'label'       => esc_html__( 'Show Post Thumbnail', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 13,

] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_title',
    'label'       => esc_html__( 'Show Post Title', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 13,
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_date',
    'label'       => esc_html__( 'Show Post Date', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 15,

] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_tags',
    'label'       => esc_html__( 'Show Post Tags', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 15,

] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author_box',
    'label'       => esc_html__( 'Show Post Author Box', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 15,
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_recommend_posts',
    'label'       => esc_html__( 'Show Recommend Posts', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 16,
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_navigation',
    'label'       => esc_html__( 'Show Post Navigation', 'rs-pet-blog' ),
    'section'     => 'post_page_section',
    'default'     => '1',
    'priority'    => 16,
] );

