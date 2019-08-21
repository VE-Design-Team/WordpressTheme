<?php get_template_part( 'loop-templates/scorm/whm', 'header' ); ?>
<nav id="" class="navbar" >
      <?php get_template_part( 'loop-templates/scorm/whm-scorm', 'nav' ); ?>
</nav>
<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'loop-templates/scorm/whm-scorm', 'content' ); ?>
  <?php endwhile; // end of the loop. ?>
  <!--   col-10 -->
</div>
