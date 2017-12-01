<?php if( have_rows('field_5a2094f978d32') ): ?>

	<div id="conditional">

	<?php 
    	$row_count = 1;
	    while( have_rows('field_5a2094f978d32') ): the_row(); 

		// vars
		$title = get_sub_field('field_5a209938a0dce');
		$image = get_sub_field('field_5a20996ca0dd0');
		$content = get_sub_field('field_5a20995da0dcf');
		?>
<div class="parent">
	<div class="collapse parent " id="collapse<?php echo $row_count; ?>">
<div class="card">
  <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><h3><?php echo $title; ?></h3><?php echo $content; ?></p>
<!-- Card <?php echo $row_count; ?>-->

		
<!-- get button data -->
<?php if( have_rows('field_5a2099c5a0dd1') ): ?>



	<?php while( have_rows('field_5a2099c5a0dd1') ): the_row(); 

		// vars
		$button_title = get_sub_field('field_5a209a18a0dd2');
		$button_location = get_sub_field('field_5a20b601dd5a4');
	

		?>

		<a class="btn btn-primary" href="#<?php echo $button_location ?>"

data-toggle="collapse" data-parent="#conditional" data-target="#collapse<?php echo $button_location ?>" aria-expanded="false" aria-controls="collapse<?php echo $button_location ?> "


			">

			<?php echo $button_title; ?>
		
		</a>

	<?php endwhile; ?>



<?php endif; ?>
<!-- end get button data -->

	  </div><!--card-body-->
</div><!--card-->
</div><!--collapse-->
</div><!--parent-->
	<?php 
	
$row_count++;
	endwhile; ?>

</div><!--conditional-->

<?php endif; ?>
<script>
// Make first card show on loadding, rest hidden by default	
$('.collapse:first').addClass('show');
</script>	