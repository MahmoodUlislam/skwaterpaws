<?php
/**
 * Getting Started Help Notic
 **/
function rs_pet_blog_general_admin_notice(){

      $pro_msg = esc_html__('PRO Version Details & Documentation', 'rs-pet-blog');

       $msg = sprintf('<div data-dismissible="disable-done-notice-forever" class="notice notice-info" >
              <h3>%1$s</h3>
              <p>%2$s</p><p>
              <a class="rs-pet-blog-btn-get-started button button-primary button-hero rs-pet-blog-button-padding" href="#" data-name="" data-slug="">%3$s</a>
              <a href="%4$s" target="new" class="button">%5$s</a>
              <a href="%6$s" class="button">%7$s</a>
              <a href="?rs_pet_blog_notice_dismissed" style="text-decoration: none; float: right;" >%8$s</a>
              </p></div>',
              esc_html__('Get Most out of the theme','rs-pet-blog'),
              esc_html__('Congratulations! You have successfully activate RS PET BLOG theme. Go to Appearance->Customize->Global Settings. you will find all options in one panel.','rs-pet-blog'),
              esc_html__('Getting Started with Demos...', 'rs-pet-blog'),
              esc_url('https://rswpthemes.com/wpbeeg-multipurpose-wordpress-theme/'),
              $pro_msg,
              esc_url(admin_url()."customize.php"),
              esc_html__('Go to Customizer', 'rs-pet-blog'),
              esc_html__('Dismiss Notice', 'rs-pet-blog'));
       echo wp_kses_post($msg);
}

if ( isset( $_GET['rs_pet_blog_notice_dismissed'] ) ){
          //set notice value false
          update_option('rs_pet_blog_help_notice', 'notice_rs_pet_blog_dismissed');
}

$rs_pet_blog_help_notice = get_option('rs_pet_blog_help_notice', '');

if (($rs_pet_blog_help_notice != 'notice_rs_pet_blog_dismissed' || $rs_pet_blog_help_notice === '') ){
          add_action('admin_notices', 'rs_pet_blog_general_admin_notice');
}