<?php  get_template_part('header');?>
  <div class="container-fluid page-width">
    <div class="row">
      <!-- bridge content ----------------------------------------------------------------------->
      <div id="content" >
        <div id="push" dir=""class="row">

          <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'loop-templates/scorm/bridge', 'content' ); ?>
            <?php endwhile; // end of the loop. ?>
            <!--   col-10 -->
          </div>
        </div>
      </div>
    </div>
  </div>
