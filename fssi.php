<?php get_template_part( 'loop-templates/scorm/fssi', 'header' ); ?>
<?php
  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { ?>
<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
  html {
    background-size: cover;
    background-position: center;
  }

  body {}

  #fssi {
    background-image: url('<?php echo $image[0]; ?>');
    background-size: cover;
    background-position: center;
  }

  .single-scorm {}

  #navtoggle {
    display: none;
  }
</style>




<div id="ribbon">

  <?php while ( have_posts() ) : the_post(); ?>
  <div class="splash-banner">
    <div class="splash-banner inner container-fluid">
      <div class="container">
        <div class="row">
        <div class=" col-12 col-sm-6">
          <img class="img-fluid fssi-logo-text" src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/fssi-white.svg">
          <!--<div class=" fssi-logo-text float-sm-right"></div>-->
        </div>
        <div class="col-12 col-sm-5">
          <h2 class="fssi-splash-title ">
            <?php the_title();?>
          </h2>

          <?php if( get_field('field_5bdf9ea04ef39') ): ?>
          <a class="btn btn-splash" title="Start here" href="<?php the_field('field_5bdf9ea04ef39'); ?>">Start here</a>
          <?php endif; ?>

        </div>
</div>

      </div>
      <!--row-->

    </div><!-- splash banner -->

  </div>
  <!--ribbon -->

  <?php endwhile; // end of the loop. ?>
  <?php }
  else { ?>
  <div class="container-fluid page-width ">
    <div class="row">
      <div id="accordion-move">
        <?php get_template_part( 'loop-templates/scorm/scorm', 'nav' ); ?>
      </div>
      <!--     content ----------------------------------------------------------------------->
      <div id="content" class="scorm">
        <div class="row mb-4">
          <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'loop-templates/scorm/scorm', 'content' ); ?>
            <?php endwhile; // end of the loop. ?>
            <!--   col-10 -->
          </div>
          <!--container-->
        </div>
        <!--row -->
        <!-- footer buttons-->
        <?php if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page'): ?>

        <?php else: {?>

        <?php //previous next variables 
 $prevlink = get_field('field_5bdf9ede4ef3a');
 $nextlink = get_field('field_5bdf9ea04ef39');
 if ($prevlink == "" AND $nextlink == ""):
    {
        //no footer links;   
    }

else:{ 
      //get footer links
      ?>

        <div id="footer-page" class="p-0 m-0">
          <div id="next-prev" class="d-flex justify-content-center ">
            <?php if( get_field('field_5bdf9ede4ef3a') ): ?>
            <a title="Previous page" target="_self" href="<?php echo $prevlink; ?>" class="btn-prev">
            </a>
            <?php else: {
    echo "<a href='".$nextlink."' title='Next page' target='_self' class='pn-helper  m-0'>Next page</a> ";
};?>
            <?php endif; ?>
            <?php if( get_field('field_5bdf9ea04ef39') ): ?>
            <a title="Next page" target="_self" href="<?php echo $nextlink; ?>" class=" btn-next"></a>

            <?php else: {
    echo "<a href='".$prevlink."' title='Previous page' target='_self' class='pn-helper  m-0'>Previous page</div>";
};?>
            <?php endif; ?>

          </div><!-- thing-->
          <!--footer -->

          <?php } endif; ?>
        </div>
        <!-- thing2-- >
      <?php }
endif;
?>

    </div><!-- row-->

      </div><!-- #fssi -->
      <!-- footer buttons end -->
    </div><!-- content -->


  </div>

</div>

<?php }
  ?>

<!------------------------------------------ content ----------------------------------->


<?php get_template_part( 'loop-templates/scorm/fssi', 'footer' ); ?>

<?php

$my_theme = wp_get_theme();

  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { 
   echo "<div id='' class='down'><div class='copyright'><p>© VCOSS and RMIT University 2019, v".$my_theme->get( 'Version' ).", released ".date('F')." ".date('Y')." </p></div>
   </div>";
}
        ?>