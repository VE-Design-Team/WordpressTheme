<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';





/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';



/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';
/**
 *  Load Advanced Custom Fields
 */
 // 1. customize ACF path
 add_filter('acf/settings/path', 'my_acf_settings_path');

 function my_acf_settings_path( $path ) {

     // update path
     $path = get_stylesheet_directory() . '/acf/';

     // return
     return $path;

 }


 // 2. customize ACF dir
 add_filter('acf/settings/dir', 'my_acf_settings_dir');

 function my_acf_settings_dir( $dir ) {

     // update path
     $dir = get_stylesheet_directory_uri() . '/acf/';

     // return
     return $dir;

 }


 // 3. Hide ACF field group menu item
 add_filter('acf/settings/show_admin', '__return_false');


 // 4. Include ACF
 include_once( get_stylesheet_directory() . '/acf/acf.php' );
