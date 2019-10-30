<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
<h1><?php the_title(); ?></h1>
<div class="heading-underline"></div>

<article><?php the_content(); ?></article>
<?php if (get_field('field_5ade80680cd32')): ?>
				<div class="instruction mr-1"><i class="fa fa-info-circle mr-1 fa-lg"></i>
	  <?php echo the_field('field_5ade80680cd32'); ?>
	</div>
<?php endif;?>
<?php if (get_field('field_5a13c5a7ec802') == 'None'): ?>
<?php else: ?>
	<section><?php get_template_part( 'loop-templates/acf' ); ?></section>
<?php endif;?>
<article class="mt-3"><?php the_field('field_5b91d32f52a61'); ?></article>
