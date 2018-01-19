<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110457633-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-110457633-1');
</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!-- ensure iframe links are opened in a new tab in the parent -->
	<base target="_blank">
	   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="hfeed site" id="page">
<?php if (is_front_page() || is_home() || is_front_page() || is_home()) {
    // Default homepage ?>
<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e(
     'Skip to content',
    'understrap'
 ); ?></a>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container">
				<!-- Your site title as branding in the menu -->
				<?php if (! has_custom_logo()) {
     ?>
					<?php if (is_front_page() && is_home()) : ?>
						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a></h1>
					<?php else : ?>
						<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
				<?php
 } else {
     the_custom_logo();
 } ?><!-- end custom logo -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarNavDropdown',
                    'menu_class'      => 'navbar-nav',
                    'fallback_cb'     => '',
                    'menu_id'         => 'main-menu',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                )
            ); ?>
		</div><!-- .container -->
	</nav><!-- .site-navigation -->
</div><!-- .wrapper-navbar end -->
<?php
} else {
                //any other page
            } ?>