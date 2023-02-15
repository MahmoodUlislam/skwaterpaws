<?php
/**
 * RS Pet Blog Theme Global Options
 */

Kirki::add_panel( 'rs_pet_blog_global_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Global Settings', 'rs-pet-blog' ),
) );

require get_theme_file_path('inc/customizer/themeoptions/header-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/banner-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/sidebar-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/post-page-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/theme-color-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/blog-post-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/copyright-settings.php');