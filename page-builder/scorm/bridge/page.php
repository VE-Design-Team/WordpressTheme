<?php  get_template_part('header');?>
  <div class="container-fluid page-width">
    <div class="row">
      <!-- bridge content ----------------------------------------------------------------------->
      <div id="content" >
        <div>

          <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'loop-templates/scorm/bridge', 'content' ); ?>
            <?php endwhile; // end of the loop. ?>
            <!--   col-10 -->
          </div>
        </div>
      </div>
    </div>
    <div class="bridge-nav">

<?php if( get_field('field_5bdf9ede4ef3a') ): ?>
             <a title="Previous page" href="<?php the_field('field_5bdf9ede4ef3a'); ?>"  class="btn btn-sm btn-prev">
             Prev </a>
             <?php endif; ?>

             <?php if( get_field('field_5bdf9ea04ef39') ): ?>
             <a title="Next page" href="<?php the_field('field_5bdf9ea04ef39'); ?>"  class="float-right btn btn-sm btn-next">
             Next
             </a>
             <?php endif; ?>

</div>
  </div>
