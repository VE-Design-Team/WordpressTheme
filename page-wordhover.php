<?php
/*
Template Name: wordhover
*/
?>

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


$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="page-wrapper">

	<div id="content" tabindex="-1">

				<!-- Do the left sidebar check -->
			<div class="col-md-12 content-area" id="primary">

			<main class="site-main" id="main">

				<p class="display-4 text-center"> <span class="on-hover-blue" data-toggle="tooltip" data-placement="top" title="'Haema' means blood">Haema</span><span>t</span><span class="on-hover-orange" data-toggle="tooltip" data-placement="bottom" title="'ology' at the end of a word means the study of">ology</span></p>
        <p class="display-4 text-center"><span class="on-hover-aqua" data-toggle="tooltip" data-placement="top" title="'Haema' means blood">Haema</span><span>t</span><span class="on-hover-purple" data-toggle="tooltip" data-placement="bottom" title="'ologist' on the end of the word means the person who studies it">ologist</span></p>
        <p class="display-4 text-center"><span class="on-hover-orange" data-toggle="tooltip" data-placement="top" title="'Audi' means hearing">Audi</span><span class="on-hover-lavender" data-toggle="tooltip" data-placement="bottom" title="'Ology' at the end of a word means the study of">ology</span></p>
        <p class="display-4 text-center"> <span class="on-hover-purple" data-toggle="tooltip" data-placement="top" title="'Psych' means mental process">Psych</span><span class="on-hover-blue" data-toggle="tooltip" data-placement="bottom" title="'ology' at the end of a word means the study of">ology</span></p>
        <p class="display-4 text-center"> <span class="on-hover-aqua" data-toggle="tooltip" data-placement="top" title="'Cardio' refers to the heart">Cardio</span><span class="on-hover-lavender" data-toggle="tooltip" data-placement="bottom" title="'pulmonary' refers to the lungs">pulmonary</span></p>

			</main><!-- #main -->

		</div><!-- #primary -->











</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
