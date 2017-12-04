<?php if( have_rows('field_5a2094f978d32') ): ?>

	<div id="ChoiceGame">

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
		<?php get_template_part('loop-templates/game/card');?>
<div class="card">

<?php if( get_sub_field('field_5a20996ca0dd0') ): ?>
	  <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>">
<?php endif; ?>

    <div class="card-body">
    <h3><?php echo $title; ?></h3><p class="card-text"><?php echo $content; ?></p>
<!-- Card <?php echo $row_count; ?>-->
	
<!-- get button data -->
<?php if( have_rows('field_5a2099c5a0dd1') ): ?>
	<?php while( have_rows('field_5a2099c5a0dd1') ): the_row(); 
		// vars
		$button_title = get_sub_field('field_5a209a18a0dd2');
		$button_location = get_sub_field('field_5a20b601dd5a4');
		?>
<?php if( get_field('field_5a20e2a468c91') == 'button' ): ?>
		<a class="btn btn-primary" href="#<?php echo $button_location ?>"
data-toggle="collapse" data-parent="#ChoiceGame" data-target="#collapse<?php echo $button_location ?>" aria-expanded="false" aria-controls="collapse<?php echo $button_location ?> " ">
			<?php echo $button_title; ?>
		</a>
<?php endif; ?>
<?php if( get_field('field_5a20e2a468c91') == 'link' ): ?>
	<li><a href="#<?php echo $button_location ?>"
data-toggle="collapse" data-parent="#ChoiceGame" data-target="#collapse<?php echo $button_location ?>" aria-expanded="false" aria-controls="collapse<?php echo $button_location ?> " ">
			<?php echo $button_title; ?>
		</a></li>
<?php endif; ?>


	

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

</div><!--ChoiceGame-->

<?php endif; ?>
<script>
// Make first card show on loadding, rest hidden by default	
$('.collapse:first').addClass('show');
</script>	