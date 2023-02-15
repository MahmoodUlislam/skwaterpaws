<?php
/**
 * Search Form
 *
 * @package RS Pet Blog
 */
?>
<div class="sidebarsearch">
<form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="form-control" id="search" placeholder="<?php esc_attr_e( 'Search Here.....', 'rs-pet-blog' ); ?>" value="<?php echo esc_attr( the_search_query() ); ?>" name="s">
	<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
</div>
