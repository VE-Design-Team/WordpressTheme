<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if (! function_exists('understrap_scripts')) {
    /**
     * Load theme's JavaScript sources.
     */
    function understrap_scripts()
    {
        // Get the theme data.
        $the_theme = wp_get_theme();
       // wp_enqueue_script( 'jquery');
        wp_enqueue_script('popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
      //  wp_enqueue_script('understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get('Version'), true);

    }

    function restapitesting(){

    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array(), true);

    }

} // endif function_exists( 'understrap_scripts' ).

add_action('wp_enqueue_scripts', 'understrap_scripts');

/**
 * Enqueue a script in the WordPress admin, excluding edit.php.
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function wpdocs_selectively_enqueue_admin_script( $hook ) {

    wp_enqueue_script( 'my_custom_script', get_template_directory_uri() . '/js/codeCopy.js' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );
