<div class="row carousel-min-height">
        <?php if( get_sub_field('field_5a55a5d15861b') ): ?>
     <div class="col-6 "><img src="<?php   the_sub_field('field_5a55a5d15861b'); ?>" alt="Slide" class="img-fluid float-right"/ height="300" width="300"></div>
      <div class="col-6">
            <p><?php the_sub_field('field_5a55a5ef5861c'); ?></p>
          </div>
<?php else: ?>
 <div class="col-6  offset-3 carousel-text-only">
            <p><?php the_sub_field('field_5a55a5ef5861c'); ?></p>
          </div>
<?php endif; ?>
         
</div>
    

 