
<?php if( get_field('field_5bf72deeb1307') == 'dissolve' ): ?>


<?php if (have_rows('field_5a13c61e91a66')): ?>
<div id="accordion" class="mr-1 mb-3">
<div id="cards" class="dissolve">
 <?php while (have_rows('field_5a13c61e91a66')): the_row();?>
 <div class="card dissolve">
	 <div class="card-header">
	 <div class="centerer">
<h3 class="cover" tabindex="0" id="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>"
 data-toggle="dissolve"  data-target="#dissolve<?php echo str_replace(str_split('\\/:*?"&<>(),.| '), '', get_sub_field('field_5a13c67d91a67')); ?>" aria-expanded="true" aria-controls="dissolve<?php echo str_replace(str_split('\\/:*?"<>,.()| '), '', get_sub_field('field_5a13c67d91a67')); ?>">

						<?php echo get_sub_field('field_5a13c67d91a67'); ?>
					</h3>
					</div>
					</div>
					<span id="dissolve<?php echo str_replace(str_split('\\/:*?"&<>,.()| '), '', get_sub_field('field_5a13c67d91a67')); ?>" class="dissolve" aria-labelledby="heading
						<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" >
						<div class="card-body glossarize">
							<?php echo the_sub_field('field_5a13c6ac91a68'); ?>
						</div>
	</span>

				</div>
				<?php endwhile;?>
	</div><!--cards -->
</div><!--accordion-->
<?php
//else expand
else: ?>
<?php endif;?>

<script>
$('.card-header').click(function(){
    $(this).addClass("active");
});
</script>



<?php else: ?>
<?php if (have_rows('field_5a13c61e91a66')): ?>
<?php if( get_field('field_5bc4d38bc5b36') == 'single' ): ?>
<div id="accordion" class="mr-1 mb-3">
<?php endif; ?>
<div id="cards" class="expand">
<?php if( get_field('field_5bc4d38bc5b36') == 'toggle' ): ?>
<div id="accordion" class="mr-1 mb-3">
<?php endif; ?>

 <?php while (have_rows('field_5a13c61e91a66')): the_row();?>
 <div id="cards" class="expand card">
<h3 class="card-header collapsed h6" role="button" tabindex="0" id="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>"
 data-toggle="collapse"  data-target="#collapse<?php echo str_replace(str_split('\\/:*?"&<>(),.| '), '', get_sub_field('field_5a13c67d91a67')); ?>" aria-expanded="false"
 aria-controls="collapse<?php echo str_replace(str_split('\\/:*?"<>,.()| '), '', get_sub_field('field_5a13c67d91a67')); ?>">
						<i class="fa fa-plus mr-1"></i>
						<i class="fa fa-minus mr-1 mr-1"></i>
						<?php echo get_sub_field('field_5a13c67d91a67'); ?>
					</h3>
					<span id="collapse<?php echo str_replace(str_split('\\/:*?"<>,.()| '), '', get_sub_field('field_5a13c67d91a67')); ?>" class="collapse" aria-labelledby="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" data-parent="#accordion">
						<div class="card-body glossarize">
							<?php echo the_sub_field('field_5a13c6ac91a68'); ?>
						</div>
	</span>

				</div>
				<?php endwhile;?>
	</div><!--cards -->
</div><!--accordion-->
<script>
//this fires on enter keypress for accessibility
$(function(){
  $('#cards').keypress(function(e){
    if(e.which == 13) {
     $.children().collapse('toggle');
	  $(this).find('.collapse').collapse('toggle');
    }
  })
})

</script>

<?php else: ?>

<?php endif;?>

<?php endif; ?>
