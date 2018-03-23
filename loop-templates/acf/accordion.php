<?php if (have_rows('field_5a13c61e91a66')): ?>
<div id="accordion" class="mr-1">
  <div id="cards">
   <?php while (have_rows('field_5a13c61e91a66')): the_row();?>
    <div class="card">
      <div class="card-header collapsed pl-2" id="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" data-toggle="collapse" data-target="#collapse<?php echo str_replace(str_split('\\/:*?"<>(),.| '), '', get_sub_field('field_5a13c67d91a67')); ?>" aria-expanded="true" aria-controls="collapse<?php echo str_replace(str_split('\\/:*?"<>,.()| '), '', get_sub_field('field_5a13c67d91a67')); ?>"><i class="fa fa-plus mr-1"></i><i class="fa fa-minus mr-1 mr-1"></i> <?php echo get_sub_field('field_5a13c67d91a67'); ?>
      </div>
      <div id="collapse<?php echo str_replace(str_split('\\/:*?"<>,.()| '), '', get_sub_field('field_5a13c67d91a67')); ?>" class="collapse" aria-labelledby="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" data-parent="#accordion">
        <div class="card-body glossarize">
        <?php echo the_sub_field('field_5a13c6ac91a68'); ?>
        </div>
      </div>
    </div>
				   <?php endwhile; ?>
  </div>
</div>
<?php else: ?>
<?php endif;?>
