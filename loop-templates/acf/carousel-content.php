<div class="row carousel-min-height">
        <?php if( get_sub_field('field_5a55a5d15861b') ): ?>
     <div class="col-12 col-sm-6"><img src="<?php   the_sub_field('field_5a55a5d15861b'); ?>" alt="Slide" class="img-fluid float-right"/ height="300" width="300"></div>
      <div class="col-12 col-sm-6">
            <p><?php the_sub_field('field_5a55a5ef5861c'); ?></p>
          </div>
<?php else: ?>
 <div class="col-12 col-sm-6 offset-sm-3 carousel-text-only">
            <p><?php the_sub_field('field_5a55a5ef5861c'); ?></p>
          </div>
<?php endif; ?>
         <a class="right" href="#carousel" role="button" data-slide="next"><span class="d-md-none nxt-btn" role="button" data-slide="next"><i class="fa fa-chevron-circle-right fa-2x"></i></span></a>
</div>
    

 