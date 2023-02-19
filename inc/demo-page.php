<?php
add_filter('advanced_import_welcome_message', 'rs_pet_blog_modify_welcome_message');
function rs_pet_blog_modify_welcome_message(){
  $message = '
   <div class="ai-header">
      <h1>
         '.esc_html__('Saskatoon’s only heated indoor dog pool offering recreation, swims, and hydrotherapy', 'Saskatoon Waterpaws').' <a href="'.esc_url('https://rswpthemes.com/rs-pet-blog-pro-wordpress-theme/').'" target="_blank">'.esc_html__('Difference Between Free & Pro Version.?', 'rs-pet-blog').'</a>
      </h1>
      <p>'.esc_html__( 'Created by Mahmood', 'Saskatchewan Polytechnic' ).'</p>
   </div>
   ';

      return $welcome_msg;
}