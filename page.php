<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress rs_pet_blogt of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RS Pet Blog
 */
get_header();
?>
<!-- add code for adding page -->
<div id="primary" class="content-area section-padding">
    <main id="main" class="site-main">

        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content/content', 'page');
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

    <?php
    get_footer(); ?>