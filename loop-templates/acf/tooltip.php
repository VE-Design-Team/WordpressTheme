  <style><?php if( have_rows('field_5a30b394101e4') ): ?>
<?php while( have_rows('field_5a30b394101e4') ): the_row();?>

.<?php echo str_replace(' ', '', get_sub_field('field_5a30b4461abcc')); ?>:hover
 {
 	color:<?php echo the_sub_field('field_5a30b4531abcd');?>;
 } 	
 

<?php endwhile; ?>
  
<?php endif; ?>
</style>

<?php if( have_rows('field_5a30b394101e4') ): ?>
  <p class="display-2 text-center"><?php while( have_rows('field_5a30b394101e4') ): the_row();?><?php get_template_part('loop-templates/acf/tooltip-prepend');?><span title="<?php echo the_sub_field('field_5a30b4461abcc');?>" data-toggle="tooltip" data-placement="top" class="<?php echo str_replace(' ', '', get_sub_field('field_5a30b4461abcc')); ?>" ><?php the_sub_field('field_5a30b40b1abc9')?></span><?php get_template_part('loop-templates/acf/tooltip-append');?><?php endwhile; ?></p>
<?php endif; ?>

<script>
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>	
<!-- Tooltip end -->