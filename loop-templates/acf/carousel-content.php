<div class="row carousel-min-height">
  <?php if (get_sub_field('field_5a55a5d15861b')): ?>
  <div class="col-12 col-sm-6">

    <?php

     $image = get_sub_field('field_5a55a5d15861b');
     $size = 'large'; // (thumbnail, medium, large, full or custom size)
    if ($image) {
    echo wp_get_attachment_image($image, $size);
    }

    ?>

  </div>
  <div class="col-12 col-sm-6">
    <h3 class="h3">
      <?php the_sub_field('field_5a5820d027a5d');?> 
    </h3>
    <p>
      <?php the_sub_field('field_5a55a5ef5861c');?>
    </p>
  </div>
  <?php else: ?>
  <?php if( get_field('field_5ad936e5e0fdd') == 'fullwidth' ): ?>
  <div class="col-12 carousel-text-only">
    <?php else: {?>
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 carousel-text-only">
      <?php } endif; ?>
      <h3>
        <?php the_sub_field('field_5a5820d027a5d');?>
      </h3>
      <p>
        <?php the_sub_field('field_5a55a5ef5861c');?>
      </p>
    </div>
    <?php endif;?>
    <a class="right" href="#carousel" role="button" data-slide="next">
      <span class="d-md-none nxt-btn" role="button" data-slide="next">
        <i class="fa fa-chevron-circle-right fa-2x"></i>
      </span>
    </a>
  </div>
