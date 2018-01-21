<!-- acf.php -->
<?php if (get_field('field_5a13c5a7ec802') == 'Accordion'): ?>
<?php get_template_part('loop-templates/acf/accordion');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Checklist'): ?>
<?php get_template_part('loop-templates/acf/checklist');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Tabbed sections'): ?>
<?php get_template_part('loop-templates/acf/tabs');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Cards'): ?>
<?php get_template_part('loop-templates/acf/cards');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Tooltip Textstrings'): ?>
<?php get_template_part('loop-templates/acf/tooltip');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Sample Document'): ?>
<?php get_template_part('loop-templates/acf/sample-document');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Quadrant reveal'): ?>
<?php get_template_part('loop-templates/acf/quadrant-reveal');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Image title reveal'): ?>
<?php get_template_part('loop-templates/acf/image-title-reveal');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Accordion with image'): ?>
<?php get_template_part('loop-templates/acf/accordion-with-image');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Carousel'): ?>
<?php get_template_part('loop-templates/acf/carousel');?>
<?php endif;?>
<style>
#nav-tab .tab-content
{
	border: none;
}
</style>
<!-- end acf.php -->