<div class="row carousel-min-height">
        <?php if( get_sub_field('field_5a55a5d15861b') ): ?>
     <div class="col-12 col-sm-6">
     
     

     <?php 

$image = get_sub_field('field_5a55a5d15861b');
$size = 'large'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>
     
     
 </div>
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
    

 