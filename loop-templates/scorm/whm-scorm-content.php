<h1><?php the_title(); ?></h1>
<div class="heading-underline"></div>
<article><?php the_content(); ?></article>
<?php if (get_field('field_5ade80680cd32')): ?>
				<div class="instruction mr-1"><i class="fa fa-info-circle mr-1 fa-lg" data-intro="This icon appears next to instructions lines that explain how to use the interactivity located directly below it."></i>
	  <?php echo the_field('field_5ade80680cd32'); ?>
	</div>
<?php endif;?>
<?php if (get_field('field_5a13c5a7ec802') == 'None'): ?>
<?php else: ?>
	<section><?php get_template_part( 'loop-templates/acf' ); ?></section>
<?php endif;?>
<article class="mt-3"><?php the_field('field_5b91d32f52a61'); ?></article>
