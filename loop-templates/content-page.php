<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		


<?php get_template_part('loop-templates/acf');?>

	</div><!-- .entry-content -->



</article><!-- #post-## -->
