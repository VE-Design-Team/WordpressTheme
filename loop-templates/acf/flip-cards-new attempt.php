<style>
.card-columns .card-flip {
  perspective: 1000px;
  -webkit-perspective: 1000px;
  -moz-perspective: 1000px;
  transform: rotateY(0deg);
}
.card-columns .card-deck .card {
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
}
.card-columns .card-deck .back,
.card-columns .card-deck .front {
  backface-visibility: hidden;
}
.card-columns .card-deck .back {

  transform: rotateY(180deg);
}
.card-columns .card-deck .front {

  margin-right: -95%;
  right: 0;
  z-index: 1000;
}
.card-columns .flip {
  transition: 0.6s;
  transform-style: preserve-3d;
  transform: rotateY(180deg);
}
.card-columns .flop {
  transition: 0.6s;
  transform-style: preserve-3d;
  transform: rotateY(0deg);
}

</style>
<div class="container">
  <div class="card-columns">


<?php

if (have_rows('field_5a865a7a9f82f')): ?>
<?php 
$i=1;
while (have_rows('field_5a865a7a9f82f')) : the_row(); ?>

   <div class="card-deck card-flip flop">
      <div class="card front"> <img class="card-img-top" src="<?php the_sub_field('field_5a8663981362e'); ?>" width: 100%; display: block;" data-holder-rendered="true">
      
    
      


		<?php if (get_sub_field('field_5a865a8c9f830')): ?>
    <div class="card-body">
							   
    <p class="card-text" <?php the_sub_field('field_5a865a8c9f830'); ?></p>
            </div>
         <?php endif; ?>
         <button class="btn btn-<?php echo $i ?> btn-primary">btn</button>


       
      </div>
 <div class="card back">		  <img src="<?php the_sub_field('field_5a8664851362f'); ?>" data-holder-rendered="true" width: 100%; display: block;">



        <div class="card-body">
  

    	<?php if (get_sub_field('field_5a86650b13630')): ?>
						
							   
            <?php the_sub_field('field_5a86650b13630'); ?>
          <?php endif; ?>
		  <button class="btn btn-2 btn-primary">btn</button>
        </div>
      </div>
    </div>
	 <?php 
$i++;	
endwhile; ?>

<?php else :

// no rows found

endif;

?>

 
 
 
  </div>
</div>



<script>
$(document).ready(function() {

$('.btn-1').click(function(e){
  $(this).closest(".card-flip").toggleClass('flop');
  $(this).closest(".card-flip").toggleClass('flip');
});
$('.btn-2').click(function(e){
  $(this).closest(".card-flip").toggleClass('flop');
  $(this).closest(".card-flip").toggleClass('flip');
});
});

</script>	