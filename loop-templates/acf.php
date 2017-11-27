<!-- get custom fields -->
<?php if( get_field('field_5a13c5a7ec802') == 'Accordion' ): ?>
	<!-- Accordion start -->
	<div id="accordion<?php echo get_the_ID();?>" role="tablist" aria-multiselectable="true">
	<?php

	// check if the accordian field has  data
	if( have_rows('field_5a13c61e91a66') ):

	 	// loop through the  data
	    while ( have_rows('field_5a13c61e91a66') ) : the_row();?>

					<?php //apply the accordion header ?>

					<a data-toggle="collapse" data-parent="#accordion<?php echo get_the_ID();?>" href="#collapse<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" aria-expanded="true" aria-controls="collapseOne">
						 <h3><span class='text-dark'>+ </span><?php echo the_sub_field('field_5a13c67d91a67'); ?></h3>
					</a>
					<?php // display the accordion collapsed content ?>
					<div id="collapse<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" class="collapse pl-4" role="tabpanel" aria-labelledby="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
					<?php echo the_sub_field('field_5a13c6ac91a68'); ?>
					</div>
					<?php  //close the accordion footer ?>

	   <?php endwhile;

	else : ?>


<?php endif; ?>
	</div>

	<!-- Accordion end -->
<?php elseif( get_field('field_5a13c5a7ec802') == 'Tabbed sections' ): ?>
	<!-- Tabs start -->
	<?php if( have_rows('field_5a13c7fda9110') ): ?>
<ul class="nav nav-tabs" id="Tab<?php echo get_the_ID();?>" role="tablist">
	<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
    <li class="nav-item">
      <a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="tab" href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" aria-selected="true"><?php echo the_sub_field('field_5a14fdfcc7bba');?>
      <img src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>">
      </a>
    </li>
	<?php endwhile;?>
  </ul>
    <div class="tab-content" id="TabContent<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
  <?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
      <div class="tab-pane fade show" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab"><?php echo the_sub_field('field_5a14fdab64ad0');?></div>
  <?php endwhile;?>
  </div>
<?php else : ?>



<?php endif; ?>
	<!-- tabs end -->
<?php elseif( get_field('field_5a13c5a7ec802') == 'Cards' ): ?>
	<!-- Cards start -->
	<?php if( have_rows('field_5a1b72e2b4a86') ): ?>



		<?php while( have_rows('field_5a1b72e2b4a86') ): the_row();?>
			<?php
						// vars
						$card_image = get_sub_field('field_5a1b730bb4a87');
						$field = get_sub_field_object('field_5a1b730bb4a87');
						$value = get_sub_field('field_5a1b730bb4a87');
						$card_title = $field['choices'][ $value ];
						$card_content = get_sub_field('field_5a1b865eaeaab');
						$card_text_title = $field['choices'][ $value ];

						?>
		<div class="card">
		  <div class="card-header">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $card_image ?>.png" alt="<?php echo $card_title; ?>" class="float-left" width="50" height="50" />
				<h3 class="float-left ml-2 mt-2"><?php echo $card_title; ?></h3>
		  </div>
		  <div class="card-body">

		    <p class="card-text"><?php echo $card_content ?></p>

		  </div>
		</div>





				<?php if( $link ): ?>
					<a href="<?php echo $link; ?>">
				<?php endif; ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

				<?php if( $link ): ?>
					</a>
				<?php endif; ?>

			    <?php echo $content; ?>



		<?php endwhile; ?>


	<?php endif; ?>
	<!-- cards end -->
<?php endif; ?>
<script>
$('.nav-item a.nav-link:first').addClass('active');
$('.tab-content .tab-pane:first').addClass('active');
</script>


<!-- end get custom fields -->
