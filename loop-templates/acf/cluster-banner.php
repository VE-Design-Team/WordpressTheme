<?php

if (have_rows('field_5a73d3d48b839')):

    while (have_rows('field_5a73d3d48b839')) : the_row(); ?>

<div class="col-12 pb-3" style="background-image: url('<?php the_sub_field('field_5a73d775be41f'); ?>'); <?php the_sub_field('field_5a73d88c935e5'); ?>">
<div class="row">
<div class="col-1"></div>
<div class="col-11 pt-4 pl-5 pr-4 pb-0">
<h3 style="color: #000054;"><?php the_sub_field('field_5a73d4088b83a'); ?></h3>
<p style="color: #000054;"><?php the_sub_field('field_5a73d4aa8b83b'); ?></p>
<p style="color: #000054;"><strong><?php the_sub_field('field_5a73d4da8b83c'); ?></strong></p>
</div>
</div>
</div>

     <?php endwhile;

else :

endif;

?>
