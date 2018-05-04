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
 *  Load Advanced Custom Fields from theme directory
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

 function my_myme_types($mime_types){
    $mime_types['stl'] = 'image/stl+xml'; //Adding stl extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


 // 3. Hide ACF field group menu item
 //add_filter('acf/settings/show_admin', '__return_false');


 // 4. Include ACF
 include_once( get_stylesheet_directory() . '/acf/acf.php' );

 /**
  * Load iFrame helper content
  */
 require get_template_directory() . '/inc/iframe.php';
// Game post type
// Register Custom Post Type
// Register Custom Post Type
function game() {

	$labels = array(
		'name'                  => _x( 'Branching scenario', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Branching scenario', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Branching scenario', 'text_domain' ),
		'name_admin_bar'        => __( 'Branching scenario', 'text_domain' ),
		'archives'              => __( 'Branching Scenario archives', 'text_domain' ),
		'attributes'            => __( 'Branching Scenario attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Game:', 'text_domain' ),
		'all_items'             => __( 'All Games', 'text_domain' ),
		'add_new_item'          => __( 'Add New Games', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Game', 'text_domain' ),
		'description'           => __( 'Builds a Branching Scenario for external access', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'game', $args );

}
add_action( 'init', 'game', 0 );

// Display advancecd custom fields in admin columns  

function my_page_columns($columns)
{
    $columns = array(
        'cb'         => '<input type="checkbox" />',
        'title'     => 'Last Name',
		'mod_by' => 'Last modified by',
		'first'     => 'Rich content',
		'date'        =>    'Date',
    );
    return $columns;
}

function my_custom_columns($column)
{
    global $post;
    
    if ($column == 'first') {
		echo get_field( "content_type", $post->ID );
		
    }
    else {
         echo '';
	}
	
  global $post;
    
    if ($column == 'mod_by') {
        echo the_modified_author() ;
    }
    else {
         echo '';
	}

}

add_action("manage_pages_custom_column", "my_custom_columns");
add_filter("manage_pages_columns", "my_page_columns");
// Allow sort by custom field



//Allow game fields to choose game pages

function dynamic_author_dropdown( $field ){
	
	$authors = get_users(array(
		'role' => 'author'
	));
	
	if(!empty($authors)){
		foreach($authors as $author){
			$field['choices'][$author->ID] = $author->display_name;
		}
	}
 
    return $field;
}
 
// acf/load_field/key={$field_key} - filter for a specific field based on it's key name , CHANGE THIS TO YOUR FIELDS KEY!
add_filter('acf/load_field/key=field_5a209938a0dce', 'dynamic_author_dropdown');

//custom dashboard content

// disable default dashboard widgets
function disable_default_dashboard_widgets() {

	//remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_activity', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');

	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	
}
add_action('admin_menu', 'disable_default_dashboard_widgets');
remove_action('welcome_panel', 'wp_welcome_panel');

//Support team page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Support',
		'menu_title'	=> 'Site Support',
		'menu_slug' 	=> 'site-support',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-groups', // Add this line and replace the second inverted commas with class of the icon you like
		'redirect'		=> false
	));
	
	
}
// Completely remove comments from the site

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

// Completely remove posts - we're only using pages

function post_remove ()      //creating functions post_remove for removing menu item
{ 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');   //adding action for triggering function call




// Dashboard content


// Site support widget

function dashboard_widget_function( $post, $callback_args ) {
	
	if( have_rows('field_5aaa08f0cbf4d', 'option') ): 

		while( have_rows('field_5aaa08f0cbf4d', 'option') ): 
		 
			the_row(); 
			
			echo '<h2>';
			echo the_sub_field('field_5aaa0948cbf4f' ) .'</h3>';
			echo the_sub_field('field_5aaa092bcbf4e').'<br>'; 
	  		the_sub_field('field_5aaa09a5cbf50');  
	endwhile; 
	 
	 endif; ;
}


function add_dashboard_widgets() {
	wp_add_dashboard_widget('dashboard_widget', 'Site Support', 'dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'add_dashboard_widgets' );



function dashboard_video_widget_function( $post, $callback_args ) {
	
	if( have_rows('field_5ab1efbf6b7cd', 'option') ): 

		while( have_rows('field_5ab1efbf6b7cd', 'option') ): 
		 
			the_row(); 
			
		
	  		the_sub_field('field_5ab1f16c05d2e');  
	endwhile; 
	 
	 endif; ;
}

function add_dashboard_video_widgets() {
	wp_add_dashboard_widget('dashboard_video_widget', 'How to Videos', 'dashboard_video_widget_function');
}
add_action('wp_dashboard_setup', 'add_dashboard_video_widgets' );