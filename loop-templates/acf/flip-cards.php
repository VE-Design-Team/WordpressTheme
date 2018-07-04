<!-- Card Flip -->
<style>
	#nav-tab .tab-content {
		border: none;
	}
</style>
<script>

</script>
<?php

if (have_rows('field_5a865a7a9f82f')): ?>

	<div id="card-flip">

		<div class="container pt-5 pb-4">
			<div class="row">
				<!-- Build card-->
				<?php
$i = 1;
while (have_rows('field_5a865a7a9f82f')): the_row();?>
					<div class="col-6 col-md-4 col-lg-3 <?php if ($i % 2 !== 0) {
        print " offset-md-2 offset-lg-0 ";
    }
    ?> ">
						<!-- these offsets on odds-->
						<div class="card-flip">
							<div class="flip card-deck"  >
								<!-- front content -->
								<div class="front">
									<!-- front content -->
									<div class="card" tabindex="0">
										<div class="card-body">
									<?php if( get_sub_field('field_5a8663981362e') ): ?>
									<img class="card-img-top" src="<?php the_sub_field('field_5a8663981362e');?>" width:="" 100%;="" display:="" block; "=" data-holder-rendered="true">
									<p class="text-center <?php the_field('field_5b3c038bf73ee'); ?>"><?php the_sub_field('field_5a865a8c9f830');?></p>
<?php elseif (get_sub_field('field_5a865a8c9f830')): ?>
							<div class="card-text centre-align text-center">
												<p class="content <?php the_field('field_5b3c038bf73ee'); ?>"><?php the_sub_field('field_5a865a8c9f830');?></p>
											</div>

											<?php endif;?>
										</div>

										<span align="center" class="btn btn-sm">Flip me										</span>
									</div>
								</div>
								<!-- end front-->

								<!--front/back -->
								<div class="back">
									<!-- back content -->
									<div class="card">
										<div class="card-body">

							<?php if( get_sub_field('field_5a8664851362f') ): ?>
									<img class="card-img-top" src="<?php the_sub_field('field_5a8664851362f');?>" width:="" 100%;="" display:="" block; "=" data-holder-rendered="true">
									<p class="text-center  <?php the_field('field_5b3c03c1f73ef'); ?>"><?php the_sub_field('field_5a86650b13630');?></p>
<?php elseif (get_sub_field('field_5a86650b13630')): ?>
							<div class="card-text centre-align text-center">
												<p class="text-center content <?php the_field('field_5b3c03c1f73ef'); ?>"><?php the_sub_field('field_5a86650b13630');?></p>
											</div>

											<?php endif;?>

										</div>

										<span align="center" class="btn btn-sm">Flip me</span>
									</div>

								</div>
		
							</div>
						</div>

						<!-- End Card Flip -->
					</div>
					<!-- end build card -->
					<?php
$i++; 
endwhile;?>
			</div>
			<!-- row-->
		</div>
	</div>
	<?php else:

    // no cards here, move along....

endif;

?>
	<!-- for providing odd classes-->
	<?php if ($i == 3) {echo "</div><div class='row'>";}?>

	<script>
	$(document).ready(function () {
		$('.btn').on('click', function (e) {
			$(this).closest('.card-flip').toggleClass('hover');
		});
	});

	$(".flip").height(maxHeight + 80);

//this fires on enter keypress for accessibility	
$(function(){
  $('.card-flip').keypress(function(e){
    if(e.which == 13) {
     $(this).find('.card').toggleClass('hover');
    }		
  })
})</script>	