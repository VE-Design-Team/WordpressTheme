<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();


$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="error-404-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<div class="row">
							<div class="">
								
<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
  <div class="card-header">404 : Content missing</div>
  <div class="card-body">
        <p class="card-text">This content failed to load or needs be relinked. Contact your course administrator for assistance
			

		</p>
  </div>
							</div>	
	
					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
