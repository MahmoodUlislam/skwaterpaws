<?php
add_filter( 'comment_form_default_fields', 'rs_pet_blog_comment_form' );
function rs_pet_blog_comment_form( $rs_pet_blog_comment_field ) {
	$rs_pet_blog_comment_field['author'] = '<input type="text" class="form-control" name="author" id="name-cmt" placeholder="' . esc_attr__( 'Your Name', 'rs-pet-blog' ) . '">';
	$rs_pet_blog_comment_field['email']  = '<input type="email" class="form-control" name="email" id="email-cmt" placeholder="' . esc_attr__( 'Your Email', 'rs-pet-blog' ) . '">';
	$rs_pet_blog_comment_field['url']    = '
                    <input type="text" class="form-control" name="url" id="website" placeholder="' . esc_attr__( 'Your Website', 'rs-pet-blog' ) . '">';
	return $rs_pet_blog_comment_field;
}
add_filter( 'comment_form_defaults', 'rs_pet_blog_comment_default_form' );
function rs_pet_blog_comment_default_form( $default_form ) {
	$default_form['comment_field']        = '<textarea class="form-control" name="comment" rows="7" placeholder="' . esc_attr__( 'Message goes here', 'rs-pet-blog' ) . '"></textarea>';
	$default_form['submit_button']        = '<button type="submit" class="btn btn-primary">' . esc_attr__( 'Post Comment', 'rs-pet-blog' ) . '</button>';
	$default_form['comment_notes_before'] = '';
	$default_form['title_reply']          = esc_attr__( 'Leave A Comment', 'rs-pet-blog' );
	$default_form['title_reply_before']   = '<h4>';
	$default_form['title_reply_after']    = '</h4>';
	return $default_form;
}

function rs_pet_blog_comment_form_structure( $fields ) {
		$author_field = $fields['author'];
		$email_field = $fields['email'];
		$url_field = $fields['url'];
		$comment_field = $fields['comment'];
		$cookies_field = $fields['cookies'];
		unset( $fields['author'] );
		unset( $fields['email'] );
		unset( $fields['url'] );
		unset( $fields['comment'] );
		unset( $fields['cookies'] );
		$fields['author'] = $author_field;
		$fields['email'] = $email_field;
		$fields['url'] = $url_field;
		$fields['comment'] = $comment_field;
		$fields['cookies'] = $cookies_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'rs_pet_blog_comment_form_structure' );