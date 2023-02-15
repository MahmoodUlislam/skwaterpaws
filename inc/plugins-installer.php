<?php
/**************************
 *   Plugin Installer
 **************************/

 //Admin Enqueue for Admin
function rs_pet_blog_admin_enqueue_scripts(){
	wp_enqueue_script( 'rs-pet-blog-admin-script', get_theme_file_uri('/js/admin.js'), array( 'jquery' ), '', true );
    wp_localize_script( 'rs-pet-blog-admin-script', 'rs_pet_blog_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'rs_pet_blog_admin_enqueue_scripts' );

add_action( 'wp_ajax_install_act_plugin', 'rs_pet_blog_admin_install_plugin' );

function rs_pet_blog_admin_install_plugin() {

    /**
     * Install Plugin.
     */
    include_once ABSPATH . '/wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    if ( ! file_exists( WP_PLUGIN_DIR . '/rs-wp-themes-one-click-demo-content' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'rs-wp-themes-one-click-demo-content' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );
        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }
    if ( ! file_exists( WP_PLUGIN_DIR . '/advanced-import' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'advanced-import' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );
        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }
    if ( ! file_exists( WP_PLUGIN_DIR . '/rs-author-info-box' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'rs-author-info-box' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );
        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }
    // Activate plugin.
    if ( current_user_can( 'activate_plugin' ) ) {
        $result = activate_plugin( 'rs-author-info-box/rs-author-info-box.php' );
        $result = activate_plugin( 'advanced-import/advanced-import.php' );
        $result = activate_plugin( 'rs-wp-themes-one-click-demo-content/rs-wp-themes-one-click-demo-content.php' );
    }

}
