<!-- Tabs start -->
<?php if( get_field('field_5a13c748a910f') == 'top' ):?>
<?php get_template_part('loop-templates/acf/tabs-top');?>
<?php elseif( get_field('field_5a13c748a910f') == 'image' ): ?>
<?php get_template_part('loop-templates/acf/image-tabs-left');?>
<?php elseif( get_field('field_5a13c748a910f') == 'left' ): ?>
<?php get_template_part('loop-templates/acf/tabs-left');?>
<?php endif;  ?>
