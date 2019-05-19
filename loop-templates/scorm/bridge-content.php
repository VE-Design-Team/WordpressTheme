<h1><?php the_title(); ?></h1>
<div class="heading-underline" style=""></div>
<article><?php the_content(); ?></article>
<?php if (get_field('field_5ade80680cd32')): ?>
				<div class="instruction mr-1"><i class="fa fa-info-circle mr-1 fa-lg"></i>
	  <?php echo the_field('field_5ade80680cd32'); ?>
	</div>
<?php endif;?>
<section><?php get_template_part( 'loop-templates/acf' ); ?></section>
<article class="mt-3"><?php the_field('field_5b91d32f52a61'); ?></article>