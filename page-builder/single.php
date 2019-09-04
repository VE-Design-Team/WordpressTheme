<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();

$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<div class="col-md-12 content-area" id="primary">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
	

		<?php endif; ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->
<style>
#nav-tab .tab-content
{
	border: none;
}
<?php the_field('field_5b2849d5b9d0c'); ?>

</style>
<?php get_footer(); ?>
