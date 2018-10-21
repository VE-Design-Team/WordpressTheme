<?php get_template_part( 'loop-templates/scorm/fssi', 'header' ); ?>
<?php get_template_part( 'loop-templates/scorm/scorm', 'nav' ); ?>
      <!--     content ----------------------------------------------------------------------->
      <div class="col-12 pt-4" >
        <div class="container-fluid">
        <?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'loop-templates/scorm/scorm', 'content' ); ?>
<?php endwhile; // end of the loop. ?>
          <!--   col-10 -->
        </div>
      </div>
    </div>
  </div>

  <!------------------------------------------ content ----------------------------------->
  <?php get_template_part( 'loop-templates/scorm/fssi', 'footer' ); ?>