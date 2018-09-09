<?php get_template_part( 'loop-templates/scorm/fssi', 'header' ); ?>
<div class="row">
<?php get_template_part( 'loop-templates/scorm/scorm', 'nav' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'loop-templates/scorm/scorm', 'content' ); ?>
<?php endwhile; // end of the loop. ?>
</div>
<?php get_template_part( 'loop-templates/scorm/fssi', 'footer' ); ?>


