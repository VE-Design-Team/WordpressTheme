<div class="container-fluid pr-0 pl-0">
  <?php

// check if the repeater field has rows of data
if (have_rows('field_5a86433eed2a0')): ?>

    <?php while (have_rows('field_5a86433eed2a0')) : the_row(); ?>
    <div id="calloutcards" class="row mr-0">
      <div class="card col-12 mb-2  ml-0">

        <div class="row align-items-center">
          <div class="col-3 col-sm-2 pr-0">
            <img src="<?php the_sub_field('field_5a86434fed2a1'); ?>" alt="<?php echo the_sub_field('field_5a67bc81f0b61');?> " class=" aligncenter img-fluid">
          </div>
          <div class="col-9 col-sm-10 p-3">
            <h3 class="text-dark">
              <?php the_sub_field('field_5a86477e19328'); ?>
            </h3>
            <?php the_sub_field('field_5a86437bed2a2'); ?>

          </div>
          <style type="text/css">
            .st0 {
              fill: #00AAFF;
            }
          </style>
          <polygon class="pixel" points="10,20 10,10 20,10 20,0 30,0 30,30 0,30 0,20 10,20 " />
        </div>

      </div>

    </div>

    <?php endwhile; ?>

    <?php else :

endif;

?>
</div>