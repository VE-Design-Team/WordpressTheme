<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */
get_header();
$sidebar_pos = get_theme_mod('understrap_sidebar_position');
?>
<div class="wrapper" id="page-wrapper">
	<div id="content" tabindex="-1">
				<!-- Do the left sidebar check -->
			<div class="col-md-12 content-area" id="primary">
			<main class="site-main" id="main">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('loop-templates/content', 'glossary'); ?>
				<?php endwhile; // end of the loop.?>
			</main><!-- #main -->
		</div><!-- #primary -->
</div><!-- Container end -->
</div><!-- Wrapper end -->
<?php get_footer(); ?>