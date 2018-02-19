<style>
.card-flip {
  -webkit-perspective: 1000px;
          perspective: 1000px;
}
.card-flip:hover .flip, .card-flip.hover .flip {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.card-flip,
.front,
.back {
  width: 100%;
  height: 480px;
}

.flip {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: relative;
}

.front,
.back {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.front {
  z-index: 2;
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
}

.back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
.card
{
	
	background-repeat: no-repeat;
	background-size: 300%;

	
}



</style>	


  

  <?php


if( have_rows('field_5a865a7a9f82f') ): ?>

	<div class="container pt-5">
		<div class="row">
 <?php while ( have_rows('field_5a865a7a9f82f') ) : the_row(); ?>
 <div class="col-sm-6 col-lg-4">
        		<!-- Card Flip -->
				<div class="card-flip">
					<div class="flip">
						<div class="front">
							<!-- front content -->
							<div class="card">
							<div class="card-background">
							  <img class="card-img-top" src="<?php the_sub_field('field_5a8663981362e'); ?>" width: 100%; display: block;" data-holder-rendered="true">

							
							<?php if( get_sub_field('field_5a865a8c9f830') ): ?>
							<div class="card-body">
							   
								 <p class="card-text"><?php the_sub_field('field_5a865a8c9f830'); ?></p>
								 </div>
							 </div>
<?php endif; ?>


							</div>
						</div>
						<div class="back">
							<!-- back content -->
							<div class="card">
				
							  <img src="<?php the_sub_field('field_5a8664851362f'); ?>" data-holder-rendered="true" width: 100%; display: block;">
								
								<?php if( get_sub_field('field_5a86650b13630') ): ?>
							<div class="card-body">
							   
								 <p class="card-text"><?php the_sub_field('field_5a86650b13630'); ?></p>
							
							 </div>
<?php endif; ?>



						
							</div>
						</div>
					</div>
				</div>
        		<!-- End Card Flip -->
			</div>



     <?php endwhile; ?>
</div>
</div>
<?php else :

    // no rows found

endif;

?>


		<script >
		document.querySelector(".card-flip").classList.toggle("flip");

		
		</script>