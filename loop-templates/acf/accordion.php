<div id="accordion mt-5 accordion<?php echo get_the_ID();?>" role="tablist" aria-multiselectable="true">
<?php
// check if the accordian field has  data
if (have_rows('field_5a13c61e91a66')):
  // loop through the  data
    while (have_rows('field_5a13c61e91a66')) : the_row();?>
        <div class="accord-item p-2"><?php //apply the accordion header?>
        <a data-toggle="collapse" data-parent="#accordion<?php echo get_the_ID();?>" href="#collapse<?php echo str_replace(str_split('\\/:*?"<>,.| '), '', get_sub_field('field_5a13c67d91a67')); ?>" aria-controls="collapseOne">
           <h3 class="h5"><span class='ac-plus '><i class="fa fa-plus" aria-hidden="true"></i></span>  <?php echo the_sub_field('field_5a13c67d91a67'); ?></h3>
        </a>
        <?php // display the accordion collapsed content?>
        <div id="collapse<?php echo str_replace(str_split('\\/:*?"<>,.| '), '', get_sub_field('field_5a13c67d91a67')); ?>" class="collapse mt-3 pl-3 glossarize" role="tabpanel" aria-labelledby="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
        <?php echo the_sub_field('field_5a13c6ac91a68'); ?>
        </div>
      </div>
        <?php  //close the accordion footer?>
   <?php endwhile;
else : ?>
<?php endif; ?>
</div>