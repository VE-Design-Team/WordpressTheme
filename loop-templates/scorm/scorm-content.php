<?php
if ( has_post_thumbnail() ) { ?>
<?php echo get_template_part('loop-templates/scorm/feature-image');?>
<?php }
else { ?>
<h1>
    <?php the_title();?>
</h1>
<?php }
?>
<article class="mb-3 glossary-show">
    <?php the_content();?>
</article>
<section>
<?php if (get_field('field_5a98cf8733d10')): ?>
			<div class="instruction mr-1"><i class="fa fa-info-circle mr-1 fa-lg"></i>
  <?php echo the_field('field_5a98cf8733d10'); ?>
</div>
<?php endif;?>
    <?php get_template_part('loop-templates/acf');?>
</section>
<article class="mt-3 glossary-show">
    <?php the_field('field_5b91d32f52a61');?>
</article>

<?php if (get_field('field_5a13c5a7ec802') == 'Introduction page'): ?>
<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 card card-legend mb-3 ">

<h3 style="font-family: Trade Gothic LT Pro Cn !important; font-weight: bold; line-height: 1.2; color: #3b3d3e; font-size: 1.5rem;">Start here</h3>
  <p><img class="alignnone wp-image-1907" src="<?php echo get_stylesheet_directory_uri()?>/fssi/img/theme/svg/next.svg" alt="" width="32" height="32" />  Work through this module using the arrows at the bottom of the page.</p>
 <p><img class="alignnone wp-image-1906" src="<?php echo get_stylesheet_directory_uri()?>/fssi/img/theme/svg/hamburger.svg" alt="" width="32" height="32" />  The navigation menu will help you keep track of the course.</p>
<p><img class="alignnone wp-image-1908" src="<?php echo get_stylesheet_directory_uri()?>/fssi/img/theme/svg/fullscreen.svg" alt="" width="32" height="32" />  Toggle the full screen button for a distraction free experience.</p>
</div>
<?php endif;?>
