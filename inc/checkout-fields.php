<?php
add_filter( 'woocommerce_form_field_args', 'rs_pet_blog_wc_form_field_args', 10, 3 );
function rs_pet_blog_wc_form_field_args( $args, $key, $value = null ) {
	// Start field type switch case
	switch ( $args['type'] ) {
		case 'select':
			$args['class'][] = 'form-group'; // Add a class to the field's html element wrapper - woocommerce input types (fields) are often wrapped within a <p></p> tag
			$args['input_class'] = array( 'form-control', 'input-lg' ); // Add a class to the form input itself

			$args['label_class'] = array( 'control-label' );
			$args['custom_attributes'] = array(
				'data-plugin'      => 'select2',
				'data-allow-clear' => 'true',
				'aria-hidden'      => 'true',
			); // Add custom data attributes to the form input itself
			break;
		case 'country':
			$args['class'][] = 'form-group single-country';
			$args['label_class'] = array( 'control-label' );
			break;
		case 'billing_state':
			$args['class'][] = 'form-group'; // Add class to the field's html element wrapper
			$args['input_class'] = array( 'form-control', 'input-lg' ); // add class to the form input itself
			$args['label_class'] = array( 'control-label' );
			$args['custom_attributes'] = array(
				'data-plugin'      => 'select2',
				'data-allow-clear' => 'true',
				'aria-hidden'      => 'true',
			);
			break;
		case 'password':
		case 'text':
		case 'email':
		case 'tel':
		case 'number':
			$args['class'][] = 'form-group';
			// $args['input_class'][] = 'form-control input-lg'; // will return an array of classes, the same as bellow
			$args['input_class'] = array( 'form-control', 'input-lg' );
			$args['label_class'] = array( 'control-label' );
			break;
		case 'textarea':
			$args['input_class'] = array( 'form-control', 'input-lg' );
			$args['label_class'] = array( 'control-label' );
			break;
		case 'checkbox':
			break;
		case 'radio':
			break;
		default:
			$args['class'][] = 'form-group';
			$args['input_class'] = array( 'form-control', 'input-lg' );
			$args['label_class'] = array( 'control-label' );
			break;
	}
	return $args;
}
