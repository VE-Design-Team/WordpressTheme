
<div id="card-flip">
  <?php

if (have_rows('field_5a865a7a9f82f')): ?>

	<div  class="container-fluid pt-5">
		<div class="row">
 <?php 
 $i=1;
 while (have_rows('field_5a865a7a9f82f')) : the_row(); ?>
 <div  class="col-4 " tabindex="0" >
        		<!-- Card Flip -->
				<div class="card-flip" >
					<div class="flip card-deck">
						<div class="front">
							<!-- front content -->
							<div class="card">
							<div class="card-background">
							  <img class="card-img-top" src="<?php the_sub_field('field_5a8663981362e'); ?>" width: 100%; display: block;" data-holder-rendered="true">

							<?php if (get_sub_field('field_5a865a8c9f830')): ?>
							<div class="card-body">
							   
								 <p class="card-text text-center"><?php the_sub_field('field_5a865a8c9f830'); ?></p>
								 </div>
								 <span class="btn btn-primary btn-sm ">Flip me<span>
							 </div>
							<?php endif; ?>

							</div>
							
						</div>
						<div class="back">
							<!-- back content -->
							<div class="card">
				
							  <img src="<?php the_sub_field('field_5a8664851362f'); ?>" data-holder-rendered="true" width: 100%; display: block;">
								
								<?php if (get_sub_field('field_5a86650b13630')): ?>
							<div class="card-body">
							   
								 <p class="card-text text-center"><?php the_sub_field('field_5a86650b13630'); ?></p>
								
							 </div>
							<?php endif; ?>

						<span class="btn btn-primary btn-sm ">Flip me<span>

							</div>
							
						</div>
					</div>
				</div>
        		<!-- End Card Flip -->
			</div>
	<?php if ($i==3){ echo "</div><div class='row'>"; } ?>


	 <?php 
	$i++;
	endwhile; ?>
</div>
</div>
<?php else :

    // no rows found

endif;

?>
</div>

		<script >
$(document).ready(function(){    
    $('.btn').on('click', function(e) {           
        $(this).closest('.card-flip').toggleClass('hover');            
    });    
});
var maxHeight = 0;

$(".card").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$(".flip").height(maxHeight + 80);

		</script>