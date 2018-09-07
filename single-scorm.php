<?php get_template_part( 'loop-templates/scorm/fssi', 'header' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'loop-templates/scorm/scorm', 'nav' ); ?>

<?php get_template_part( 'loop-templates/scorm/scorm', 'content' ); ?>
<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'loop-templates/scorm/fssi', 'footer' ); ?>