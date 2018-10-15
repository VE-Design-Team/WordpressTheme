<?php get_template_part( 'loop-templates/scorm/fssi', 'header' ); ?>
<div class="container">
<div class="row">
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'loop-templates/scorm/scorm', 'content' ); ?>
<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'loop-templates/scorm/scorm', 'nav' ); ?>
</div>
</div>
<?php get_template_part( 'loop-templates/scorm/fssi', 'footer' ); ?>


