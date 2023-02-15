<?php
/**
 * RS Pet Blog Hero Home two
 */

$banner_title = get_theme_mod('banner_title', __('Welcome to Reptiles World', 'rs-pet-blog'));
$banner_description = get_theme_mod('banner_descriptions', __('Simply dummy text of the printing and typesetting industry.
has been theindustry\'s standard dummy text ever since the
1500s, when an unknownprinter', 'rs-pet-blog'));
$get_banner_image = get_theme_mod('banner_image');
$button_text = get_theme_mod('banner_button_text', __( 'Discover', 'rs-pet-blog' ));
$button_link = get_theme_mod('banner_button_link', '#');
?>
<section id="hero-section" class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
               <div class="hero-content mb-4 mb-md-0">
                <?php
                if(!empty($banner_title)) :
                ?>
                   <h2 class="banner-title mt-0"><?php echo wp_kses_post($banner_title); ?></h2>
               <?php endif;
               if (!empty($banner_description)) :
               ?>
                   <p class="banner-descriptions"><?php echo wp_kses_post($banner_description); ?></p>
               <?php endif;
               if (!empty($button_text)):
               ?>
                   <div class="discover-me-button">
                       <a href="<?php echo esc_url($button_link);?>"><?php echo esc_html( $button_text );?></a>
                   </div>
                <?php endif; ?>
               </div>
            </div>
            <div class="col-md-6 text-right">
               <div class="hero-right-img">
                  <?php
                    if(!empty($get_banner_image)):
                        echo wp_get_attachment_image( $get_banner_image['id'], 'full' );
                    endif;
                  ?>
               </div>
            </div>
        </div>
    </div>
</section>
