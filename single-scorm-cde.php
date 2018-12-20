<div class="wrapper">
<nav id="sidebar">
  <div>
      <!--   -->
    <div><?php get_template_part( 'loop-templates/scorm/cde-scorm', 'nav' ); ?> </div>
  </div>
</nav>

<div class="content">
<?php get_template_part( 'loop-templates/scorm/cde', 'header' ); ?>
  <div class="container-fluid page-width">
    <div class="row">
      <!--     content ----------------------------------------------------------------------->
      <div id="content" >
        <div id="push" dir=""class="row">
          <div>
              <button type="button" id="sidebarCollapse" class="">
                  <span class="fas"></span>
              </button>
          </div>
          <div class="container-fluid">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'loop-templates/scorm/cde-scorm', 'content' ); ?>
            <?php endwhile; // end of the loop. ?>
            <!--   col-10 -->
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<div class="fixed-bottom b-0 container-fluid page-width m-0 cde_footer">
  <?php get_template_part( 'loop-templates/scorm/cde', 'bottom_navigation' ); ?>
</div>
<!-- content ----------------------------------->
<?php get_template_part( 'loop-templates/scorm/cde', 'footer' ); ?>
