<div id="accordion<?php echo get_the_ID();?>" role="tablist" aria-multiselectable="true">
<?php

// check if the accordian field has  data
if( have_rows('field_5a13c61e91a66') ):

  // loop through the  data
    while ( have_rows('field_5a13c61e91a66') ) : the_row();?>

        <?php //apply the accordion header ?>

        <a data-toggle="collapse" data-parent="#accordion<?php echo get_the_ID();?>" href="#collapse<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" aria-expanded="true" aria-controls="collapseOne">
           <h3><span class='text-dark'>+ </span><?php echo the_sub_field('field_5a13c67d91a67'); ?></h3>
        </a>
        <?php // display the accordion collapsed content ?>
        <div id="collapse<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" class="collapse pl-4" role="tabpanel" aria-labelledby="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
        <?php echo the_sub_field('field_5a13c6ac91a68'); ?>
        </div>
        <?php  //close the accordion footer ?>

   <?php endwhile;

else : ?>


<?php endif; ?>
</div>
