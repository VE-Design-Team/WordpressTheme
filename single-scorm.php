<?php get_template_part( 'loop-templates/scorm/fssi', 'header' ); ?>
<div class="container-fluid page-width">
  <div class="row">
    <div id="accordion-move" >
      <?php get_template_part( 'loop-templates/scorm/scorm', 'nav' ); ?>
    </div>
    <!--     content ----------------------------------------------------------------------->
    <div id="content" >
      <div class="row">
        <div class="container">
          <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'loop-templates/scorm/scorm', 'content' ); ?>
          <?php endwhile; // end of the loop. ?>
          <!--   col-10 -->
        </div>
      </div>
    </div>
  </div>
</div>


<!------------------------------------------ content ----------------------------------->
<?php get_template_part( 'loop-templates/scorm/fssi', 'footer' ); ?>