<?php
// Recomended Posts Section For Reader
function rs_pet_blog_cats_related_post() {
    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );
    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;
    $current_post_type = get_post_type($post_id);
    $query_args = array(
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post_not_in'    => array($post_id),
        'posts_per_page'  => '3'
     );
    $post_el_is_on = array(
        'show_post_category' => get_theme_mod('show_post_category', true),
        'show_post_thumbnail' => get_theme_mod('show_post_thumbnail', true),
        'show_post_date' => get_theme_mod('show_post_date', true),
        'show_post_author' => get_theme_mod('show_post_author', true),
        'show_post_title' => get_theme_mod('show_post_title', true),
        'show_post_excerpt' => get_theme_mod('show_post_excerpt', true),
    );
    $get_post_page_sidebar = get_theme_mod('post_sidebar', 'no');
    $sidebar_layouts = $get_post_page_sidebar;
    $post_columns_class =  'col-md-6 col-lg-4 blog-grid-layout';
    if ('no' == $sidebar_layouts) {
        $post_columns_class =  'col-md-6 col-lg-4 blog-grid-layout';
    }elseif('right' == $sidebar_layouts || 'left' == $sidebar_layouts){
        $post_columns_class =  'col-md-12 col-lg-6 col-xl-6 blog-grid-layout';
    }
    $related_cats_post = new WP_Query( $query_args );
    if($related_cats_post->have_posts()):
    	?>
        <div class="recommended-post-section mt-5 mb-5">
			<h4 class="related-post-title text-center"><?php esc_html_e( 'Recommended Posts', 'rs-pet-blog' ); ?></h4>
        	<?php
        	echo '<div class="related-post-slider row">';
             while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                   <div class="<?php echo esc_attr($post_columns_class);?>">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('rs-pet-blog-standard-post'); ?>>
                            <div class="rs-pet-blog-standard-post__entry-content text-left">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="rs-pet-blog-standard-post__thumbnail post-header">
                                        <?php
                                        if (true == $post_el_is_on['show_post_thumbnail']) :
                                            rs_pet_blog_post_thumbnail();
                                        endif;
                                        if(true === $post_el_is_on['show_post_category']) :
                                        ?>
                                            <div class="rs-pet-blog-standard-post__overlay-category">
                                                <?php rs_pet_blog_categories(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif;?>
                                <div class="rs-pet-blog-standard-post__content-wrapper">
                                    <div class="rs-pet-blog-standard-post__post-title">
                                        <?php
                                        if(true == $post_el_is_on['show_post_title']) :?>
                                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                        <?php
                                            endif;
                                        if(true == $post_el_is_on['show_post_excerpt']) :
                                            the_excerpt();
                                        endif;
                                    ?>
                                    </div>
                                    <div class="rs-pet-blog-standard-post__blog-meta">
                                        <?php
                                        if (true == $post_el_is_on['show_post_author']) :
                                            rs_pet_blog_posted_by( true );
                                        endif;
                                        if(true == $post_el_is_on['show_post_date']) :
                                            rs_pet_blog_posted_on();
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </article><!-- #post-<?php the_ID(); ?> -->
                    </div>
            <?php endwhile;
            echo '</div>';
        echo '</div>';
        // Restore original Post Data
        wp_reset_postdata();
     endif;
}?>
