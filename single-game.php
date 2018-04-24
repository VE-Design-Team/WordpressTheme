<?php
/**
 * @package understrap
 */

get_header();

$sidebar_pos = get_theme_mod('understrap_sidebar_position');

?>

<div class="wrapper" id="page-wrapper">

	<div id="content" tabindex="-1">

			<!-- Do the left sidebar check -->
			<div class=" content-area" id="primary">

			<main class="site-main" id="main">

				<?php while (have_posts()): the_post();?>
				
					<?php get_template_part('loop-templates/content', 'game');?>

				<?php endwhile; // end of the loop.?>

			</main><!-- #main -->

		</div><!-- #primary -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer();?>