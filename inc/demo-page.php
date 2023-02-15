<?php
add_filter('advanced_import_welcome_message', 'rs_pet_blog_modify_welcome_message');
function rs_pet_blog_modify_welcome_message(){
  $message = '
   <div class="ai-header">
      <h1>
         '.esc_html__('Welcome to Rs Pet Blog Demo Import Page. What is the', 'rs-pet-blog').' <a href="'.esc_url('https://rswpthemes.com/rs-pet-blog-pro-wordpress-theme/').'" target="_blank">'.esc_html__('Difference Between Free & Pro Version.?', 'rs-pet-blog').'</a>
      </h1>
      <p>'.esc_html__( 'Thank you for choosing the RS Pet Blog theme. This quick demo import setup will help you configure your new website like theme demo. It will install the required WordPress plugins, default content and tell you a little about Help &amp; Support options. It should only take less than 5 minutes.', 'rs-pet-blog' ).'</p>
   </div>
   ';

      return $welcome_msg;
}