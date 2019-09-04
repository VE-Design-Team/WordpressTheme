<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */
?>
<article <?php post_class();?> id="post-<?php the_ID();?>">
  <div class="entry-content">
<style>
.hz-background {
  background-size: contain;
  background-repeat: no-repeat;
  background-position: top;
  height: 520px;}
}
.card
{
  border-color:  #e60028;
  background-color: #e60028;
  color: white;
}
.card-body
{
  padding: .75rem;
}

<?php

// check if the repeater field has rows of data
if (have_rows('field_5a3987d635060')):

    // loop through the rows of data
    while (have_rows('field_5a3987d635060')): the_row();?>

		.<?php echo str_replace(' ', '', get_sub_field('field_5a39880135061')); ?>
		{
		  border-color:  <?php echo the_sub_field('field_5a3ad5223b377'); ?>;
		  background-color: <?php echo the_sub_field('field_5a3ad5223b377'); ?>;
		  color: <?php echo the_sub_field('field_5a3ae175998ac'); ?>;
		}

		   <?php endwhile;

else:

    // no rows found

endif;

?>
</style>

    <?php
wp_link_pages(array(
    'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
    'after' => '</div>',
));
?>
<div class="container p-1">
  <div class="row">
  <div class="col-12 col-md-9 col-lg-6 text-center mb-2">
<?php
// check if the repeater field has rows of data
if (have_rows('field_5a3987d635060')): ?>
   <div class="btn-group">
   <?php while (have_rows('field_5a3987d635060')): the_row();?>
	       <button type="button" data-toggle="collapse" data-target="#<?php echo str_replace(' ', '', get_sub_field('field_5a39880135061')); ?>" aria-expanded="false" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a39880135061')); ?>" class="btn btn-primary btn-sm">
	          <?php echo the_sub_field('field_5a39880135061'); ?>
	        </button>
	   <?php endwhile;?>
</div>
<?php else:
    // no rows found
endif;
?>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-7 col-lg-6 text-center">
  <div class=" hz-background" <?php if (get_field('field_5a398755da5b1')): ?>
style="background-image: url(<?php the_field('field_5a398755da5b1');?>);"
<?php endif;?> >
</div>
  </div>
  <div class="col-12 col-md-5 col-lg-5">
<?php
// check if the repeater field has rows of data
if (have_rows('field_5a3987d635060')): ?>
   <?php while (have_rows('field_5a3987d635060')): the_row();?>
	     <div id="<?php echo str_replace(' ', '', get_sub_field('field_5a39880135061')); ?>" class="collapse">
	       <div class="card card-block mt-1 <?php echo str_replace(' ', '', get_sub_field('field_5a39880135061')); ?>">
	        <div class="card-body  <?php echo str_replace(' ', '', get_sub_field('field_5a39880135061')); ?>">
	         <span class="small"><?php echo the_sub_field('field_5a3ac8c7f9f2d'); ?></span>
	        </div>
	      </div>
	    </div>
	   <?php endwhile;?>
<?php else:
    // no rows found
endif;
?>
 </div>
</div>
  </div>
</article><!-- #post-## -->