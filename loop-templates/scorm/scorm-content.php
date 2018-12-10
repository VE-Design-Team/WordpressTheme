<?php
if ( has_post_thumbnail() ) { ?>
<?php echo get_template_part('loop-templates/scorm/feature-image');?>
<?php }
else { ?>
<h1>
    <?php the_title();?>
</h1>
<?php }
?>
<article>
    <?php the_content();?>
</article>
<section>
<?php if (get_field('field_5a98cf8733d10')): ?>
			<div class="instruction mr-1"><i class="fa fa-info-circle mr-1 fa-lg"></i>
  <?php echo the_field('field_5a98cf8733d10'); ?>
</div>
<?php endif;?>
    <?php get_template_part('loop-templates/acf');?>
</section>
<article>
    <?php the_field('field_5b91d32f52a61');?>
</article>
