<?php get_template_part( 'loop-templates/scorm/fssi', 'header' ); ?>

  <?php
  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { ?>

  <?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div class="page-width splash-container">
  <div class="splash">
    <!--     content ----------------------------------------------------------------------->
    <div id="content-nav" >

      <div class="splash">
        <div class="background" style="background-image: url('<?php echo $image[0]; ?>')">
          <?php while ( have_posts() ) : the_post(); ?>
              <div class="splash-banner">
                <div class="splash-banner inner col-12">
                  <div class="splash-left col-lg-3 col-md-3 col-sm-4 col-12 offset-1 offset-lg-2 offset-md-3 offset-sm-2" >
                    <div class=" fssi-logo-text">

                    </div>
                  </div>
                    <div class="splash-right col-lg-4 col-md-4 col-sm-4 col-12">
                      <h2 class="fssi-splash-title">
                        <?php the_title();?>
                      </h2>
                      <h3  class="fssi-splash-button">
                        <?php if( get_field('field_5bdf9ea04ef39') ): ?>
                        <a title="Start here" href="<?php the_field('field_5bdf9ea04ef39'); ?>">
                        Start here</a>
                        <?php endif; ?>
                      </h3>
                    </div>
                  </div>
              </div>  <?php endwhile; // end of the loop. ?>
            </div>

        </div>
      </div>

  </div>
</div>
   <?php ?>
  <?php }
  else { ?>
    <div class="container-fluid page-width ">
    <div class="row">
      <div id="accordion-move" >
        <?php get_template_part( 'loop-templates/scorm/scorm', 'nav' ); ?>
      </div>
      <!--     content ----------------------------------------------------------------------->
      <div id="content" class="scorm" >
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

  <?php }
  ?>

<!------------------------------------------ content ----------------------------------->
  <?php get_template_part( 'loop-templates/scorm/fssi', 'footer' ); ?>



