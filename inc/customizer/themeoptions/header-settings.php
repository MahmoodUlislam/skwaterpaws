<?php
Kirki::add_section( 'rs_pet_blog_theme_header_settings', array(
    'title'          => esc_html__( 'Header Settings', 'rs-pet-blog' ),
    'panel'          => 'rs_pet_blog_global_panel',
) );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'color',
    'settings'    => 'header_bgc_color',
    'label'       => __( 'Header Background Color', 'rs-pet-blog' ),
    'section'     => 'rs_pet_blog_theme_header_settings',
    'default'     => '#ffffff',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => 'header#masthead',
            'property' => 'background',
        ),
    ),
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'typography',
    'settings'    => 'header_title_typography',
    'label'       => esc_html__( 'Site Title Typography', 'rs-pet-blog' ),
    'section'     => 'rs_pet_blog_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1.25rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding .site-title a',
        ],
    ],
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'typography',
    'settings'    => 'header_desc_typography',
    'label'       => esc_html__( 'Site Description Typography', 'rs-pet-blog' ),
    'section'     => 'rs_pet_blog_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1rem',
        'line-height'    => '1.4',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding p.site-description',
        ],
    ],
] );

Kirki::add_field( 'rs_pet_blog_config', [
    'type'        => 'typography',
    'settings'    => 'header_menu_typography',
    'label'       => esc_html__( 'Menu Typography', 'rs-pet-blog' ),
    'section'     => 'rs_pet_blog_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#cssmenu>ul>li>a',
        ],
    ],
] );
