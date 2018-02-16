

 	<div class="container-fluid">
<?php

// check if the repeater field has rows of data
if( have_rows('field_5a86433eed2a0') ): ?>


 
  <?php while ( have_rows('field_5a86433eed2a0') ) : the_row(); ?>
  <div class="row">
  <div class="card col-12 mb-2">
      
          <div class="row align-items-center">
          <div class="col-3 col-sm-2 text-center icon">
    <img src="<?php the_sub_field('field_5a86434fed2a1'); ?>" alt="<?php echo the_sub_field('field_5a67bc81f0b61');?> " class=" aligncenter img-fluid" >
  </div>
                 <div class="col-9 col-sm-10 p-3 bg-white">
          <h3 class="text-dark"><?php the_sub_field('field_5a86477e19328'); ?></h3>
         <?php the_sub_field('field_5a86437bed2a2'); ?>
        
        </div>
  
          </div>
      
</div>
</div>
      
        

 <?php endwhile; ?>

 

 <?php else : 



endif;

?>
</div>