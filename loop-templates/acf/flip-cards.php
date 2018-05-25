<!-- Card Flip -->

<script>
	$(document).ready(function () {
		$('.btn').on('click', function (e) {
			$(this).closest('.card-flip').toggleClass('hover');
		});
	});

	$(".flip").height(maxHeight + 80);
</script>
<style>
	#nav-tab .tab-content {
		border: none;
	}
</style>
<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<!-- end acf.php -->

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
							<div class="flip card-deck">
								<!-- front content -->
								<div class="front">
									<!-- front content -->
									<div class="card">
										<div class="card-body">
											<img class="card-img-top" src="<?php the_sub_field('field_5a8663981362e');?>" width:="" 100%;="" display:="" block; "=" data-holder-rendered="true">

											<?php if (get_sub_field('field_5a865a8c9f830')): ?>
											<div class="card-text ">
												<?php the_sub_field('field_5a865a8c9f830');?>
											</div>

											<?php endif;?>
										</div>

										<span class="btn btn-primary">Flip me
											<span>
											</span>
										</span>

									</div>

								</div>
								<!-- end front-->

								<!--front/back -->
								<div class="back">
									<!-- back content -->
									<div class="card">
										<div class="card-body">

											<?php if (get_sub_field('field_5a86650b13630')): ?>
											<div class="card-text">

												<?php the_sub_field('field_5a86650b13630');?>

											</div>
											<?php endif;?>

										</div>

										<span class="btn btn-primary">Flip me
											<span>
											</span>
										</span>
									</div>

								</div>

								<!-- <img src="<?php the_sub_field('field_5a8664851362f');?>" data-holder-rendered="true" width: 100%; display: block;">-->

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

    // no rows found

endif;

?>
	<!-- for providing odd classes-->
	<?php if ($i == 3) {echo "</div><div class='row'>";}?>