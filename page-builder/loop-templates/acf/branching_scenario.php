<?php $post_object = get_field('field_5be31f1126807');
if( $post_object ): 
	// override $post
	$post = $post_object;
	setup_postdata( $post ); 
	?>
<?php get_template_part('loop-templates/content', 'game');?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>