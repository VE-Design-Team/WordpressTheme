<style>
.indicators > .row > .col > img
{
    -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}
@media (min-width: 20px) { .carousel-min-height
{
min-height: 150px;
} }
@media (min-width: 768px) { .carousel-min-height
{
min-height: 300px;
}  }
</style>
<div class="container">
<div id="rc-carousel" data-ride="carousel" class="carousel slide">
  <div data-ride="carousel" class="carousel slide">
    <div class="carousel-inner">
<?php
// check if the repeater field has rows of data
if( have_rows('field_5a55a5855861a') ):
  // loop through the rows of data
    while ( have_rows('field_5a55a5855861a') ) : the_row(); ?>
 <div class="carousel-item">
         <?php get_template_part('loop-templates/acf/carousel-content');?>
      </div>
   <?php endwhile;
else :
    // no rows found
endif;
?>
    </div>
  </div>
</div>
<div style="width: 100%" class="mx-auto text-center indicators mt-3">
  <div class="row">
   <?php
if( have_rows('field_5a55a5855861a') ): //get left indicator?>
    <div class="col"><a href="#rc-carousel" role="button" data-slide="prev">
<img src="<?php echo get_stylesheet_directory_uri(); ?>\img\left.png" alt="left" title="last image" class="img-fluid" width="85"/></a></div>
  <?php $i = 0;
    while ( have_rows('field_5a55a5855861a') ) : the_row(); //get carousel indicators ?>
 <?php if( get_sub_field('field_5a55a5d15861b') ): ?>
        <div data-target="#rc-carousel" data-slide-to="<?php echo $i; ?>" class="col
"><img src="<?php the_sub_field('field_5a55a5d15861b'); ?>" alt="<?php the_sub_field('field_5a5820d027a5d'); ?>" class="img-fluid" width="100"/></div>
<?php else: ?>
     <div data-target="#rc-carousel" data-slide-to="<?php echo $i; ?>" class="col
"><img src="<?php echo get_stylesheet_directory_uri(); ?>\img\text.png" alt="<?php the_sub_field('field_5a5820d027a5d'); ?>" class="img-fluid" width="85"/></div>
<?php endif; ?>
<?php $i++;
    endwhile; //noe get right indicator ?>
<div class="col"><a href="#rc-carousel" role="button" data-slide="next"><img src="<?php echo get_stylesheet_directory_uri(); ?>\img\right.png" alt="left" title="last image" class="img-fluid" width="85"/></a></div>
<?php else :
    // no rows found
endif;
?>
  </div>
</div>
</div>
<script>
  $('.carousel-inner .carousel-item:first').addClass('active');
   </script>
 