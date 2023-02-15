<?php
/**
 * rs_pet_blog_is_woocommerce_exist
 */
if ( ! function_exists( 'rs_pet_blog_is_woocommerce_exists' ) ) {
	function rs_pet_blog_is_woocommerce_exists() {
		if ( class_exists( 'woocommerce' ) && is_woocommerce() ) {
			return true;
		}
		return false;
	}
}
/**
 * rs_pet_blog is default page
 */
if ( ! function_exists( 'rs_pet_blog_is_default_page' ) ) {
	function rs_pet_blog_is_default_page() {
		if ( is_home() || is_archive() || is_404() || is_author() || is_category() || rs_pet_blog_is_woocommerce_exists() || is_search() || is_tag() ) {
			return true;
		}
		return false;
	}
}
/**
 * Fix skip link focus in IE11.
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function rs_pet_blog_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'rs_pet_blog_skip_link_focus_fix' );
