<?php

/**
 * Template Name: About Us Template
 */
get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>