<?php get_header(); ?>

  <div class="glossarize">
   		<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
  </div>
  <hr>
  <div class="glossarize">
   		<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
  </div>
 <?php get_footer(); ?>