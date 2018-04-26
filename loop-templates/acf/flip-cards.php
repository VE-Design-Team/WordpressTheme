
		<style>




			</style>


<!-- acf.php -->


<div id="card-flip">

	<div class="container-fluid pt-5">
		<div class="row" >
<!-- Build card-->

  <div class="col-6 col-md-4 col-lg-3 offset-md-2 offset-lg-0"><!-- these offsets on odds-->
        		<!-- Card Flip -->
				<div class="card-flip">
					<div class="flip card-deck">
						<div class="front" >
							<!-- front content -->
							<div class="card">
														<div class="card-body">
                              <img class="card-img-top" src="https://emedia.rmit.edu.au/C3319/wp-content/uploads/2018/01/needle_c1h-1.jpg" width:="" 100%;="" display:="" block;"=" data-holder-rendered="true">

								 <div class="card-text text-center">Older people</div>

								 </div>
								 <span class="btn btn-primary">Flip me<span>
							 </span></span>

							</div>

						</div><!-- end front-->
						
						
						
						
						
						
						<div class="back">
							<!-- back content -->
							<div class="card">
															<div class="card-body">

								 <p class="card-text text-center"></p><ul>
<li>Senile</li>
<li>Geriatric</li>
<li>Dependant</li>
<li>Burden on society</li>
<li>Sexless</li>
<li>Incapable of learning</li>
</ul>
<p></p>

							 </div>

						<span class="btn btn-primary">Flip me<span>
							</span></span></div>

						</div>
					</div>
				</div>
        		<!-- End Card Flip -->
			</div>
<!-- end build card -->

	  
			
	</div><!-- row-->
</div>
</div>

		<script>
$(document).ready(function(){
    $('.btn').on('click', function(e) {
        $(this).closest('.card-flip').toggleClass('hover');
    });
});

$(".flip").height(maxHeight + 80);

		</script><style>
#nav-tab .tab-content
{
	border: none;
}
</style>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
<!-- end acf.php -->


  <?php

if (have_rows('field_5a865a7a9f82f')): ?>

 <?php 
 $i=1;
 while (have_rows('field_5a865a7a9f82f')) : the_row(); ?>

  
							<!-- front content -->
					
							  <img class="card-img-top" src="<?php the_sub_field('field_5a8663981362e'); ?>" width: 100%; display: block; data-holder-rendered="true">

							<?php if (get_sub_field('field_5a865a8c9f830')): ?>
					
							   						<?php the_sub_field('field_5a865a8c9f830'); ?>
					
							<?php endif; ?>

					
				
							  <img src="<?php the_sub_field('field_5a8664851362f'); ?>" data-holder-rendered="true" width: 100%; display: block;">
								
								<?php if (get_sub_field('field_5a86650b13630')): ?>
					
							   
								<?php the_sub_field('field_5a86650b13630'); ?>
								
						
							<?php endif; ?>

	<?php if ($i==3){ echo "</div><div class='row'>"; } ?>


	 <?php 
	$i++;
	endwhile; ?>

<?php else :

    // no rows found

endif;

?>
<!-- for providing odd classes-->
<?php if ($i==3){ echo "</div><div class='row'>"; } ?>